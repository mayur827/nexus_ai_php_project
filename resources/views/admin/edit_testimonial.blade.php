@extends('admin.layout.app')

@section('title', 'Edit Testimonial')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Testimonial /</span>
            Edit Testimonial
        </h4>
        
<div class="card">

    <div class="card-header">
        <h5 class="mb-0">Edit Testimonial</h5>
    </div>

    <div class="card-body">

        <form
            action="{{ route('admin.testimonial.update', $testimonial->id) }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf
            @method('PUT')

            <div class="row">


                <!-- Client Name -->
                <div class="col-lg-6 mb-3">

                    <label class="form-label">Client Name</label>

                    <input
                        type="text"
                        name="client_name"
                        class="form-control"
                        value="{{ old('client_name', $testimonial->client_name) }}"
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
                        value="{{ old('profession', $testimonial->profession) }}"
                        required
                    >

                </div>

                <!-- Image -->
                <div class="col-lg-12 mb-3">

                    <label class="form-label">Image</label>

                    @if($testimonial->image)

                        <div class="mb-2">

                            <img
                                src="{{ asset('uploads/testimonials/' . $testimonial->image) }}"
                                alt="{{ $testimonial->client_name }}"
                                width="100"
                                height="100"
                                style="object-fit: cover; border-radius: 8px;"
                            >

                        </div>

                    @endif

                    <input
                        type="file"
                        name="image"
                        class="form-control"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <small class="text-muted">
                        Leave empty if you don't want to change the image.
                    </small>

                </div>

                <!-- Description -->
                <div class="col-lg-12 mb-3">

                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="5"
                        required
                    >{{ old('description', $testimonial->description) }}</textarea>

                </div>

            </div>

            <div class="mt-3">

                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i>
                    Update
                </button>

                <a href="{{ route('admin.testimonial') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection