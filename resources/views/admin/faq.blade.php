@extends('admin.layout.app')

@section('title', 'FAQ')

@section('content')


<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website /</span>
            FAQ
        </h4>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h5 class="mb-0">FAQ</h5>

        <a href="{{ route('admin.faq.add') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i>
            Add FAQ
        </a>

    </div>


    <div class="card-body">

        @if(session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        <div class="table-responsive">

            <table
                id="faqTable"
                class="table table-bordered table-striped"
            >

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Actions</th>
                    </tr>

                </thead>


                <tbody>

                    @foreach($faqs as $faq)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <div class="faq-answer"> 
                                {{ $faq->question }}
                                </div>
                            </td>

                            <td>
                                    <div class="faq-answer">
                                     {{ $faq->answer }}
                                     </div>
                            </td>

                            <td>

                                <div class="d-flex align-items-center gap-2">

                                    {{-- Edit --}}
                                    <a
                                        href="{{ route('admin.faq.edit', $faq->id) }}"
                                        class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                                        title="Edit"
                                        style="width:45px; height:38px;"
                                    >
                                        <i class="bx bx-edit-alt fs-5"></i>
                                    </a>


                                    {{-- Delete --}}
                                    <form
                                            action="{{ route('admin.faq.delete', $faq->id) }}"
                                            method="POST"
                                            class="m-0 delete-form"
                                            data-item-name="FAQ"
                                        >

                                            @csrf

                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm d-flex align-items-center justify-content-center delete-btn"
                                                title="Delete"
                                                style="width: 45px; height: 38px;"
                                            >
                                                <i class="bx bx-trash fs-5"></i>
                                            </button>

                                        </form>


                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection

<style>
    .faq-answer {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        line-clamp: 3;

        overflow: hidden;
        text-overflow: ellipsis;

        max-width: 450px;
        line-height: 24px;
        max-height: 72px;

        word-break: break-word;
        white-space: normal;
    }
</style>

@push('styles')

<link
    rel="stylesheet"
    href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.min.css"
>

@endpush


@push('scripts')

<script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.min.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function () {

    new DataTable('#faqTable', {

        pageLength: 10,

        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        language: {
            emptyTable: "No FAQ found."
        },

        columnDefs: [

            {
                orderable: false,
                targets: [3]
            }

        ]

    });

});

</script>

@endpush