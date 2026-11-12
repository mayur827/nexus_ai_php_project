@extends('admin.layout.app')

@section('title', 'Integration')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website /</span>
            Integration
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


        <div class="card">

            <div class="row card-header">

                <div class="col-md-6">

                    <h5 class="card-header">
                        Integration Table
                    </h5>

                </div>


                <div class="col-md-6 text-end">

                    <a
                        href="{{ route('admin.integration.add') }}"
                        class="btn btn-primary"
                    >
                        <i class="bx bx-plus me-1"></i>
                        Add Integration
                    </a>

                </div>

            </div>


            <div class="table-responsive">

                <table
                    id="integrationTable"
                    class="table"
                >

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Tool Name</th>

                            <th>Description</th>

                            <th>Status</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                        @foreach($integrations as $integration)

                            <tr>

                                <td>
                                     {{ $loop->iteration }}
                                </td>


                                <td>
                                   <div class="faq-answer">
                                       
                                    <strong>
                                        {{ $integration->tool_name }}
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
                                        {{ $integration->description }}
                                    </div>

                                </td>


                                <td>

                                    @if($integration->status == 'Active')

                                        <span class="badge bg-label-success">
                                            Active
                                        </span>

                                    @else

                                        <span class="badge bg-label-danger">
                                            Inactive
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <div class="d-flex align-items-center gap-2">

                                        <!-- Edit -->

                                        <a
                                            href="{{ route('admin.integration.edit', $integration->id) }}"
                                            class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
                                            title="Edit"
                                            style="width:45px; height:38px;"
                                        >
                                            <i class="bx bx-edit-alt fs-5"></i>
                                        </a>


                                        <!-- Delete -->

                                        <form
                                            action="{{ route('admin.integration.delete', $integration->id) }}"
                                            method="POST"
                                            class="m-0 delete-form"
                                            data-item-name="Integration"
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

    new DataTable('#integrationTable', {

        pageLength: 10,

        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        language: {
            emptyTable: "No Integration data found."
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