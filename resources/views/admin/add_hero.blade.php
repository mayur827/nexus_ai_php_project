@extends('admin.layout.app')

@section('title', 'Add Hero')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Hero /</span>
            Add Hero
        </h4>


        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">
                    Add Hero
                </h5>

            </div>


            <div class="card-body">

                <form
                    action="{{ route('admin.hero.store') }}"
                    method="POST"
                >

                    @csrf


                    <div class="row">


                        <!-- Badge -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="badge"
                                class="form-label"
                            >
                                Badge
                            </label>

                            <input
                                type="text"
                                name="badge"
                                id="badge"
                                class="form-control"
                                placeholder="Now with GPT-4o & Claude 3.5 integration"
                                value="{{ old('badge') }}"
                                required
                            >

                            @error('badge')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        <!-- Title -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="title"
                                class="form-label"
                            >
                                Title
                            </label>

                            <input
                                type="text"
                                name="title"
                                id="title"
                                class="form-control"
                                placeholder="Automate Your Business with AI Agents"
                                value="{{ old('title') }}"
                                required
                            >

                            @error('title')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                    

                        <!-- Primary Button Text -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="primary_button_text"
                                class="form-label"
                            >
                                Primary Button Text
                            </label>

                            <input
                                type="text"
                                name="primary_button_text"
                                id="primary_button_text"
                                class="form-control"
                                placeholder="Start Free Trial"
                                value="{{ old('primary_button_text') }}"
                                required
                            >

                            @error('primary_button_text')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        <!-- Primary Button Link -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="primary_button_link"
                                class="form-label"
                            >
                                Primary Button Link
                            </label>

                            <input
                                type="text"
                                name="primary_button_link"
                                id="primary_button_link"
                                class="form-control"
                                placeholder="#"
                                value="{{ old('primary_button_link') }}"
                                required
                            >

                            @error('primary_button_link')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        <!-- Secondary Button Text -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="secondary_button_text"
                                class="form-label"
                            >
                                Secondary Button Text
                            </label>

                            <input
                                type="text"
                                name="secondary_button_text"
                                id="secondary_button_text"
                                class="form-control"
                                placeholder="Watch Demo"
                                value="{{ old('secondary_button_text') }}"
                            >

                            @error('secondary_button_text')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>


                        <!-- Secondary Button Link -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="secondary_button_link"
                                class="form-label"
                            >
                                Secondary Button Link
                            </label>

                            <input
                                type="text"
                                name="secondary_button_link"
                                id="secondary_button_link"
                                class="form-control"
                                placeholder="#"
                                value="{{ old('secondary_button_link') }}"
                            >

                            @error('secondary_button_link')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                          <!-- Description -->

                        <div class="col-lg-12 mb-3">

                            <label
                                for="description"
                                class="form-label"
                            >
                                Description
                            </label>

                            <textarea
                                name="description"
                                id="description"
                                rows="5"
                                class="form-control"
                                placeholder="Enter hero description"
                                required
                            >{{ old('description') }}</textarea>

                            @error('description')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>



                    </div>


                    <!-- Buttons -->

                    <div class="mt-3">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            <i class="bx bx-save me-1"></i>
                            Save Hero
                        </button>


                        <a
                            href="{{ route('admin.hero') }}"
                            class="btn btn-secondary"
                        >
                            Back
                        </a>

                    </div>


                </form>

            </div>

        </div>

    </div>

</div>

@endsection