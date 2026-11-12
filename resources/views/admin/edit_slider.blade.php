@extends('admin.layout.app')

@section('title', 'Edit Slider')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">

            <span class="text-muted fw-light">
                Forms /
            </span>

            Edit Slider

        </h4>


        <!-- Edit Slider Form -->

        <div class="card">

            <div class="card-header">

                <h5 class="card-header">
                    Edit Slider
                </h5>

            </div>


            <div class="card-body">

                <form>

                    <div class="row">

                        <!-- Project Name -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingProjectName"
                                    placeholder="Project Name"
                                    value="Angular Project"
                                >

                                <label for="floatingProjectName">
                                    Project Name
                                </label>

                            </div>

                        </div>


                        <!-- Client Name -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingClientName"
                                    placeholder="Client Name"
                                    value="Albert Cook"
                                >

                                <label for="floatingClientName">
                                    Client Name
                                </label>

                            </div>

                        </div>


                        <!-- Email -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="email"
                                    class="form-control"
                                    id="floatingEmail"
                                    placeholder="Email"
                                    value="albert@example.com"
                                >

                                <label for="floatingEmail">
                                    Email Address
                                </label>

                            </div>

                        </div>


                        <!-- Phone -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="tel"
                                    class="form-control"
                                    id="floatingPhone"
                                    placeholder="Phone"
                                    value="9876543210"
                                >

                                <label for="floatingPhone">
                                    Phone Number
                                </label>

                            </div>

                        </div>


                        <!-- City -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingCity"
                                    placeholder="City"
                                    value="Aurangabad"
                                >

                                <label for="floatingCity">
                                    City
                                </label>

                            </div>

                        </div>


                        <!-- Country -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingCountry"
                                    placeholder="Country"
                                    value="India"
                                >

                                <label for="floatingCountry">
                                    Country
                                </label>

                            </div>

                        </div>


                        <!-- Number of Users -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="number"
                                    class="form-control"
                                    id="floatingUsers"
                                    placeholder="Number of Users"
                                    value="25"
                                >

                                <label for="floatingUsers">
                                    Number of Users
                                </label>

                            </div>

                        </div>


                        <!-- Start Date -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="date"
                                    class="form-control"
                                    id="floatingDate"
                                    value="2026-09-17"
                                >

                                <label for="floatingDate">
                                    Start Date
                                </label>

                            </div>

                        </div>


                        <!-- Description -->

                        <div class="col-lg-12 mb-3">

                            <div class="form-floating">

                                <textarea
                                    class="form-control"
                                    id="floatingDescription"
                                    placeholder="Description"
                                    style="height: 100px;"
                                >This is a sample slider description.</textarea>

                                <label for="floatingDescription">
                                    Description
                                </label>

                            </div>

                        </div>

                    </div>


                    <!-- Buttons -->

                    <div class="row mt-4">

                        <div class="col-12">

                            <button
                                type="submit"
                                class="btn btn-primary me-2"
                            >
                                <i class="bx bx-save me-1"></i>
                                Update
                            </button>


                            <a
                                href="{{ route('admin.slider') }}"
                                class="btn btn-secondary"
                            >
                                <i class="bx bx-arrow-back me-1"></i>
                                Back
                            </a>

                        </div>

                    </div>

                </form>

            </div>

        </div>

        <!--/ Edit Slider Form -->

    </div>

</div>

@endsection