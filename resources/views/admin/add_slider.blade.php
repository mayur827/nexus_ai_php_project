@extends('admin.layout.app')

@section('title', 'Add Slider')

@section('content')

<div class="row">

    <div class="col-12">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Forms /</span>
            Add Slider
        </h4>


        <!-- Add Slider Form -->

        <div class="card">

            <div class="card-header">

                <h5 class="card-header">
                    Add New Slider
                </h5>

            </div>


            <div class="card-body">

                <form>

                    <div class="row">

                        <!-- Field 1 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingProjectName"
                                    placeholder="Project Name"
                                >

                                <label for="floatingProjectName">
                                    Project Name
                                </label>

                            </div>

                        </div>


                        <!-- Field 2 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingClientName"
                                    placeholder="Client Name"
                                >

                                <label for="floatingClientName">
                                    Client Name
                                </label>

                            </div>

                        </div>


                        <!-- Field 3 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="email"
                                    class="form-control"
                                    id="floatingEmail"
                                    placeholder="Email"
                                >

                                <label for="floatingEmail">
                                    Email Address
                                </label>

                            </div>

                        </div>


                        <!-- Field 4 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="tel"
                                    class="form-control"
                                    id="floatingPhone"
                                    placeholder="Phone"
                                >

                                <label for="floatingPhone">
                                    Phone Number
                                </label>

                            </div>

                        </div>


                        <!-- Field 5 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingCity"
                                    placeholder="City"
                                >

                                <label for="floatingCity">
                                    City
                                </label>

                            </div>

                        </div>


                        <!-- Field 6 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="text"
                                    class="form-control"
                                    id="floatingCountry"
                                    placeholder="Country"
                                >

                                <label for="floatingCountry">
                                    Country
                                </label>

                            </div>

                        </div>


                        <!-- Field 7 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="number"
                                    class="form-control"
                                    id="floatingUsers"
                                    placeholder="Number of Users"
                                >

                                <label for="floatingUsers">
                                    Number of Users
                                </label>

                            </div>

                        </div>


                        <!-- Field 8 -->

                        <div class="col-lg-6 mb-3">

                            <div class="form-floating">

                                <input
                                    type="date"
                                    class="form-control"
                                    id="floatingDate"
                                    placeholder="Start Date"
                                >

                                <label for="floatingDate">
                                    Start Date
                                </label>

                            </div>

                        </div>


                        <!-- Field 9 -->

                        <div class="col-lg-12 mb-3">

                            <div class="form-floating">

                                <textarea
                                    class="form-control"
                                    id="floatingDescription"
                                    placeholder="Description"
                                    style="height: 80px;"
                                ></textarea>

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
                                <i class="bx bx-check me-1"></i>
                                Submit
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

        <!--/ Add Slider Form -->

    </div>

</div>

@endsection