@extends('admin.layout.app')

@section('title', 'Edit Work Section')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">

            <span class="text-muted fw-light">
                Website / Work Section /
            </span>

            Edit Work

        </h4>


        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">
                    Edit Work Section
                </h5>

            </div>


            <div class="card-body">

                <form
                    action="{{ route('admin.work.update', $work->id) }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <div class="row">


                        <!-- Step -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="step"
                                class="form-label"
                            >
                                Step
                            </label>

                            <input
                                type="number"
                                name="step"
                                id="step"
                                class="form-control"
                                value="{{ old('step', $work->step) }}"
                                required
                            >

                            @error('step')

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
                                value="{{ old('title', $work->title) }}"
                                required
                            >

                            @error('title')

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
                                class="form-control"
                                rows="5"
                                required
                            >{{ old('description', $work->description) }}</textarea>

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
                            Update Work
                        </button>


                        <a
                            href="{{ route('admin.work') }}"
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