@extends('admin.layout.app')

@section('title', 'Work Section')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website /</span>
            Work Section
        </h4>


        @if(session('success'))

            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                ></button>

            </div>

        @endif


        <!-- Work Table -->

        <div class="card">

            <div class="row card-header">

                <div class="col-md-6">

                    <h5 class="card-header">
                        Work Section Table
                    </h5>

                </div>


                <div class="col-md-6 text-end">

                    <a
                        href="{{ route('admin.work.add') }}"
                        class="btn btn-primary"
                    >
                        <i class="bx bx-plus me-1"></i>
                        Add Work
                    </a>

                </div>

            </div>


            <div class="table-responsive">

                <table
                    id="workTable"
                    class="table"
                >

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Step</th>

                            <th>Title</th>

                            <th>Description</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($works as $work)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>


                                <td>

                                    <span class="badge bg-label-primary">
                                        {{ $work->step }}
                                    </span>

                                </td>


                                <td>
                                     <div class="faq-answer">
                                    <strong>
                                        {{ $work->title }}
                                    </strong>
                                     </div>
                                </td>


                                <td>

                                    <div class="faq-answer"
                                        style="
                                            max-width: 400px;
                                            white-space: normal;
                                        "
                                    >
                                        {{ $work->description }}
                                    </div>

                                </td>


                                <td>

                                    <div class="d-flex align-items-center gap-2">

                                        <!-- Edit -->

                                        <a
                                            href="{{ route('admin.work.edit', $work->id) }}"
                                            class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                                            title="Edit"
                                            style="width: 45px; height: 38px;"
                                        >
                                            <i class="bx bx-edit-alt fs-5"></i>
                                        </a>


                                        <!-- Delete -->

                                       <form
                                            action="{{ route('admin.work.delete', $work->id) }}"
                                            method="POST"
                                            class="m-0 delete-form"
                                            data-item-name="Work"
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

</div>

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

    new DataTable('#workTable', {

        pageLength: 10,

        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        language: {
            emptyTable: "No Work Section data found."
        },

        columnDefs: [
            {
                orderable: false,
                targets: [4]
            }
        ]

    });

});

</script>

@endpush

@endsection