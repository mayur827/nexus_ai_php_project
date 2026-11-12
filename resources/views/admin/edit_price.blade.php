@extends('admin.layout.app')

@section('title', 'Edit Pricing')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Pricing /</span>
            Edit Pricing
        </h4>


<div class="card">

    <div class="card-header">
        <h5 class="mb-0">Edit Pricing</h5>
    </div>

    <div class="card-body">

        <form
            action="{{ route('admin.price.update', $pricing->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="row">

                <!-- Plan -->
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Plan</label>

                    <input
                        type="text"
                        name="plan"
                        class="form-control"
                        value="{{ old('plan', $pricing->plan) }}"
                        required
                    >
                </div>

                <!-- Price -->
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Price</label>

                    <input
                        type="number"
                        name="price"
                        class="form-control"
                        value="{{ old('price', $pricing->price) }}"
                        required
                    >
                </div>

                <!-- Features -->
                <div class="col-lg-12 mb-3">
                    <label class="form-label">Features</label>

                    <textarea
                        name="features"
                        class="form-control"
                        rows="5"
                        required
                    >{{ old('features', $pricing->features) }}</textarea>
                </div>

                <!-- Description -->
                <div class="col-lg-12 mb-3">
                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="5"
                        required
                    >{{ old('description', $pricing->description) }}</textarea>
                </div>

            </div>

            <div class="mt-3">

                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i>
                    Update
                </button>

                <a href="{{ route('admin.price') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection