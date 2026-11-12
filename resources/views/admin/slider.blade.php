@extends('admin.layout.app')

@section('title', 'Slider Tables')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Tables /</span>
            Slider Tables
        </h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">

            <div class="row card-header">

                <div class="col-md-6">
                    <h5 class="card-header">
                        Slider Table
                    </h5>
                </div>

                <div class="col-md-6 text-end">

                    <a
                        class="btn btn-primary"
                        href="{{ route('admin.slider.add') }}"
                    >
                        <i class="bx bx-plus me-1"></i>
                        Add Slider
                    </a>

                </div>

            </div>


            <div class="table-responsive text-nowrap">

                <table
                    id="sliderTable"
                    class="table"
                >

                    <thead>

                        <tr>

                            <th>Project</th>

                            <th>Client</th>

                            <th>Users</th>

                            <th>Status</th>

                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody class="table-border-bottom-0">

                        <tr>

                            <td>

                                <i class="fab fa-angular fa-lg text-danger me-3"></i>

                                <strong>
                                    Angular Project
                                </strong>

                            </td>


                            <td>
                                Albert Cook
                            </td>


                            <td>

                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <li
                                        data-bs-toggle="tooltip"
                                        data-popup="tooltip-custom"
                                        data-bs-placement="top"
                                        class="avatar avatar-xs pull-up"
                                        title="Lilian Fuller"
                                    >

                                        <img
                                            src="{{ asset('dashboard-assets/img/avatars/5.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle"
                                        >

                                    </li>

                                </ul>

                            </td>


                            <td>

                                <span class="badge bg-label-primary me-1">
                                    Active
                                </span>

                            </td>


                            <td>

                                <a
                                    class="btn btn-primary"
                                    href="{{ route('admin.slider.edit', 1) }}"
                                >
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>


                                <a
                                    class="btn btn-danger"
                                    href="#"
                                >
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>

                            </td>

                        </tr>


                        <!-- Dummy Row 2 -->

                        <tr>

                            <td>

                                <i class="fab fa-react fa-lg text-info me-3"></i>

                                <strong>
                                    React Project
                                </strong>

                            </td>

                            <td>
                                John Doe
                            </td>

                            <td>

                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <li
                                        class="avatar avatar-xs pull-up"
                                        title="John Doe"
                                    >

                                        <img
                                            src="{{ asset('dashboard-assets/img/avatars/6.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle"
                                        >

                                    </li>

                                </ul>

                            </td>

                            <td>

                                <span class="badge bg-label-success me-1">
                                    Completed
                                </span>

                            </td>

                            <td>

                                <a
                                    class="btn btn-primary"
                                    href="{{ route('admin.slider.edit', 2) }}"
                                >
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>

                                <a
                                    class="btn btn-danger"
                                    href="#"
                                >
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>

                            </td>

                        </tr>


                        <!-- Dummy Row 3 -->

                        <tr>

                            <td>

                                <i class="fab fa-vuejs fa-lg text-success me-3"></i>

                                <strong>
                                    Vue Project
                                </strong>

                            </td>

                            <td>
                                Michael Smith
                            </td>

                            <td>

                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <li
                                        class="avatar avatar-xs pull-up"
                                        title="Michael Smith"
                                    >

                                        <img
                                            src="{{ asset('dashboard-assets/img/avatars/7.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle"
                                        >

                                    </li>

                                </ul>

                            </td>

                            <td>

                                <span class="badge bg-label-warning me-1">
                                    Pending
                                </span>

                            </td>

                            <td>

                                <a
                                    class="btn btn-primary"
                                    href="{{ route('admin.slider.edit', 3) }}"
                                >
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>

                                <a
                                    class="btn btn-danger"
                                    href="#"
                                >
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>

                            </td>

                        </tr>


                        <!-- Dummy Row 4 -->

                        <tr>

                            <td>

                                <i class="fab fa-angular fa-lg text-danger me-3"></i>

                                <strong>
                                    Angular Dashboard
                                </strong>

                            </td>

                            <td>
                                Robert Brown
                            </td>

                            <td>

                                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                                    <li
                                        class="avatar avatar-xs pull-up"
                                        title="Robert Brown"
                                    >

                                        <img
                                            src="{{ asset('dashboard-assets/img/avatars/7.png') }}"
                                            alt="Avatar"
                                            class="rounded-circle"
                                        >

                                    </li>

                                </ul>

                            </td>

                            <td>

                                <span class="badge bg-label-danger me-1">
                                    Cancelled
                                </span>

                            </td>

                            <td>

                                <a
                                    class="btn btn-primary"
                                    href="{{ route('admin.slider.edit', 4) }}"
                                >
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>

                                <a
                                    class="btn btn-danger"
                                    href="#"
                                >
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
        <!--/ Basic Bootstrap Table -->

    </div>

</div>


<!-- ============================= -->
<!-- DataTables CSS -->
<!-- ============================= -->

@push('styles')

<link
    rel="stylesheet"
    href="https://cdn.datatables.net/2.3.3/css/dataTables.bootstrap5.min.css"
>

<style>

    #sliderTable_wrapper {
        padding: 20px;
    }

    #sliderTable_wrapper .dt-search {
        margin-bottom: 15px;
    }

    #sliderTable_wrapper .dt-length {
        margin-bottom: 15px;
    }

    #sliderTable_wrapper .dt-paging {
        margin-top: 15px;
    }

    #sliderTable_wrapper select,
    #sliderTable_wrapper input {
        margin-left: 5px;
    }

</style>

@endpush


<!-- ============================= -->
<!-- DataTables JS -->
<!-- ============================= -->

@push('scripts')

<script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>

<script src="https://cdn.datatables.net/2.3.3/js/dataTables.bootstrap5.min.js"></script>


<script>

    document.addEventListener('DOMContentLoaded', function () {

        new DataTable('#sliderTable', {

            pageLength: 10,

            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, 'All']
            ],

            ordering: true,

            searching: true,

            paging: true,

            info: true,

            columnDefs: [

                {
                    orderable: false,
                    targets: [2, 4]
                }

            ]

        });

    });

</script>

@endpush

@endsection