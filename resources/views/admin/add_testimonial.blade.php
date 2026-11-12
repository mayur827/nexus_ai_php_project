@extends('admin.layout.app')

@section('title', 'Add Testimonial')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Testimonial /</span>
            Add Testimonial
        </h4>


<div class="card">

    <div class="card-header">
        <h5 class="mb-0">Add Testimonial</h5>
    </div>

    <div class="card-body">

        <form
            action="{{ route('admin.testimonial.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="row">

                <!-- Client Name -->
                <div class="col-lg-6 mb-3">

                    <label class="form-label">Client Name</label>

                    <input
                        type="text"
                        name="client_name"
                        class="form-control"
                        placeholder="Enter client name"
                        value="{{ old('client_name') }}"
                        required
                    >

                </div>

                <!-- Profession -->
                <div class="col-lg-6 mb-3">

                    <label class="form-label">Profession</label>

                    <input
                        type="text"
                        name="profession"
                        class="form-control"
                        placeholder="Enter profession"
                        value="{{ old('profession') }}"
                        required
                    >

                </div>

                 <!-- Image -->
                <div class="col-lg-12 mb-3">

                    <label class="form-label">Image</label>

                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                </div>

                <!-- Description -->
                <div class="col-lg-12 mb-3">

                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="5"
                        placeholder="Enter testimonial description"
                        required
                    >{{ old('description') }}</textarea>

                </div>

            </div>

            <div class="mt-3">

                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i>
                    Save
                </button>

                <a href="{{ route('admin.testimonial') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection