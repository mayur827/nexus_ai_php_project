@extends('admin.layout.app')

@section('title', 'Edit Integration')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">

            <span class="text-muted fw-light">
                Website / Integration /
            </span>

            Edit Integration

        </h4>


        <div class="card">

            <div class="card-header">

                <h5 class="mb-0">
                    Edit Integration
                </h5>

            </div>


            <div class="card-body">

                <form
                    action="{{ route('admin.integration.update', $integration->id) }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <div class="row">

                        <!-- Tool Name -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="tool_name"
                                class="form-label"
                            >
                                Tool Name
                            </label>

                            <input
                                type="text"
                                name="tool_name"
                                id="tool_name"
                                class="form-control"
                                value="{{ old('tool_name', $integration->tool_name) }}"
                                required
                            >

                            @error('tool_name')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>


                        <!-- Status -->

                        <div class="col-lg-6 mb-3">

                            <label
                                for="status"
                                class="form-label"
                            >
                                Status
                            </label>

                            <select
                                name="status"
                                id="status"
                                class="form-select"
                                required
                            >

                                <option
                                    value="Active"
                                    {{ old('status', $integration->status) == 'Active' ? 'selected' : '' }}
                                >
                                    Active
                                </option>

                                <option
                                    value="Inactive"
                                    {{ old('status', $integration->status) == 'Inactive' ? 'selected' : '' }}
                                >
                                    Inactive
                                </option>

                            </select>

                            @error('status')

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
                            >{{ old('description', $integration->description) }}</textarea>

                            @error('description')

                                <small class="text-danger">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>

                    </div>


                    <div class="mt-3">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            <i class="bx bx-save me-1"></i>
                            Update Integration
                        </button>


                        <a
                            href="{{ route('admin.integration') }}"
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