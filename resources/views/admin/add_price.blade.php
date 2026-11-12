@extends('admin.layout.app')

@section('title', 'Add Pricing')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Pricing /</span>
            Add Pricing
        </h4>


<div class="card">

    <div class="card-header">
        <h5 class="mb-0">Add Pricing</h5>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.price.store') }}" method="POST">

            @csrf

            <div class="row">

                <!-- Plan -->
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Plan</label>

                    <input
                        type="text"
                        name="plan"
                        class="form-control"
                        placeholder="Enter plan name"
                        value="{{ old('plan') }}"
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
                        placeholder="Enter price"
                        value="{{ old('price') }}"
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
                        placeholder="Enter features"
                        required
                    >{{ old('features') }}</textarea>
                </div>

                <!-- Description -->
                <div class="col-lg-12 mb-3">
                    <label class="form-label">Description</label>

                    <textarea
                        name="description"
                        class="form-control"
                        rows="5"
                        placeholder="Enter description"
                        required
                    >{{ old('description') }}</textarea>
                </div>

            </div>

            <div class="mt-3">

                <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i>
                    Save
                </button>

                <a href="{{ route('admin.price') }}" class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

@endsection