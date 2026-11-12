@extends('admin.layout.app')

@section('title', 'Edit Social')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">

            <span class="text-muted fw-light">
                Website / Social /
            </span>

            Edit Social

        </h4>


        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">
                    Edit Social
                </h5>

            </div>


            <div class="card-body">

                <form
                    action="{{ route('admin.social.update', $social->id) }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <div class="row">


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
                                value="{{ old('title', $social->title) }}"
                                required
                            >

                            @error('title')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>


                        <!-- Count -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="count"
                                class="form-label"
                            >
                                Count
                            </label>

                           <input
    type="number"
    name="count"
    id="count"
    class="form-control"
    placeholder="Enter count"
    value="{{ old('count', $social->count) }}"
    min="0"
    required
>

                            @error('count')

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
                            Update Social
                        </button>


                        <a
                            href="{{ route('admin.social') }}"
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