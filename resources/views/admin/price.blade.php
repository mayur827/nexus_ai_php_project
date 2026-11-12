@extends('admin.layout.app')

@section('title', 'Pricing')

@section('content')


<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website /</span>
            Pricing
        </h4>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Pricing</h5>

        <a href="{{ route('admin.price.add') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i>
            Add Pricing
        </a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table id="pricingTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Plan</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Features</th>
                        <th>Actions</th>
                    </tr>
                </thead>

<tbody>

    @foreach($pricings as $pricing)

        <tr>
            <td> {{ $loop->iteration }}</td>

            <td>
                <div class="faq-answer">
                    {{ $pricing->plan }}
                </div>
            </td>

            <td>{{ $pricing->price }}</td>

            <td>
                <div class="faq-answer">
                    {{ $pricing->description }}
                </div>
            </td>

            <td>
                <div class="faq-answer">
                    {{ $pricing->features }}
                </div>
            </td>

            <td>
                <div class="d-flex align-items-center gap-2">

                    <a
                        href="{{ route('admin.price.edit', $pricing->id) }}"
                        class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                        title="Edit"
                        style="width:45px; height:38px;"
                    >
                        <i class="bx bx-edit-alt fs-5"></i>
                    </a>

                                        <form
                                            action="{{ route('admin.price.delete', $pricing->id) }}"
                                            method="POST"
                                            class="m-0 delete-form"
                                            data-item-name="Pricing"
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

    new DataTable('#pricingTable', {

        pageLength: 10,

        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        language: {
            emptyTable: "No pricing found."
        },

        columnDefs: [
            {
                orderable: false,
                targets: 5
            }
        ]

    });

});
</script>

@endpush