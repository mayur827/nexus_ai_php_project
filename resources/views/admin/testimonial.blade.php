@extends('admin.layout.app')

@section('title', 'Testimonial')

@section('content')


<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website /</span>
            Testimonial
        </h4>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">

        <h5 class="mb-0">Testimonial</h5>

        <a href="{{ route('admin.testimonial.add') }}" class="btn btn-primary">
            <i class="bx bx-plus"></i>
            Add Testimonial
        </a>

    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">

            <table id="testimonialTable" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Client Name</th>
                        <th>Profession</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($testimonials as $testimonial)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                           <td>
    @if($testimonial->image)

        <img
            src="{{ asset('uploads/testimonials/' . $testimonial->image) }}"
            alt="{{ $testimonial->client_name }}"
            width="60"
            height="60"
            style="object-fit: cover; border-radius: 8px; cursor: pointer;"
            data-bs-toggle="modal"
            data-bs-target="#imageModal{{ $testimonial->id }}"
        >

    @else

        <span class="text-muted">No Image</span>

    @endif
</td>

                            <td>{{ $testimonial->client_name }}</td>

                            <td>{{ $testimonial->profession }}</td>

                            <td>
                                <div class="faq-answer">
                                    {{ $testimonial->description }}
                                </div>
                            </td>

                            <td>

    <div class="d-flex align-items-center gap-2">

        {{-- VIEW --}}
        <a
            href="{{ route('admin.testimonial.view', $testimonial->id) }}"
            class="btn btn-info btn-sm d-flex align-items-center justify-content-center"
            title="View"
            style="width:45px; height:38px;"
        >
            <i class="bx bx-show fs-5"></i>
        </a>


        {{-- EDIT --}}
        <a
            href="{{ route('admin.testimonial.edit', $testimonial->id) }}"
            class="btn btn-primary btn-sm d-flex align-items-center justify-content-center"
            title="Edit"
            style="width:45px; height:38px;"
        >
            <i class="bx bx-edit-alt fs-5"></i>
        </a>


                                         {{-- DELETE --}}
                                         <form
                                            action="{{ route('admin.testimonial.delete', $testimonial->id) }}"
                                            method="POST"
                                            class="m-0 delete-form"
                                            data-item-name="Testimonial"
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

@if($testimonial->image)

    <div
        class="modal fade"
        id="imageModal{{ $testimonial->id }}"
        tabindex="-1"
        aria-labelledby="imageModalLabel{{ $testimonial->id }}"
        aria-hidden="true"
    >

        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="imageModalLabel{{ $testimonial->id }}">
                        {{ $testimonial->client_name }}
                    </h5>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>

                </div>

                <div class="modal-body text-center">

                    <img
                        src="{{ asset('uploads/testimonials/' . $testimonial->image) }}"
                        alt="{{ $testimonial->client_name }}"
                        class="img-fluid"
                        style="max-height: 500px; object-fit: contain;"
                    >

                </div>

            </div>

        </div>

    </div>

@endif

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

    new DataTable('#testimonialTable', {

        pageLength: 10,

        lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All']
        ],

        language: {
            emptyTable: "No testimonial found."
        },

        columnDefs: [
            {
                orderable: false,
                targets: [1, 5]
            }
        ]

    });

});

</script>

@endpush