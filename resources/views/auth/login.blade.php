<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('dashboard-assets/') }}/"
    data-template="vertical-menu-template-free"
>

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no"
    />

    <title>Login - Admin Dashboard</title>

    <link rel="icon"
        type="image/x-icon"
        href="{{ asset('dashboard-assets/img/favicon/favicon.ico') }}"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Boxicons -->
    <link rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/fonts/boxicons.css') }}"
    />

    <!-- Core CSS -->
    <link rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/css/core.css') }}"
    />

    <link rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/css/theme-default.css') }}"
    />

    <link rel="stylesheet"
        href="{{ asset('dashboard-assets/css/demo.css') }}"
    />

    <!-- Helpers -->
    <script src="{{ asset('dashboard-assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/config.js') }}"></script>
</head>

<body>

    <!-- Content -->

    <div class="container">
        <div class="authentication-wrapper authentication-basic container-p-y">

            <div class="authentication-inner">

                <!-- Login -->
                <div class="card w-50 m-auto">

                    <div class="card-body">

                        <!-- Logo -->
                        <div class="app-brand justify-content-center">

                            <a href="{{ route('login') }}"
                               class="app-brand-link gap-2">

                                <span class="app-brand-text demo text-body fw-bolder">
                                    logo
                                </span>

                            </a>

                        </div>
                        <!-- /Logo -->


                        <h4 class="mb-2 text-center py-4">
                            Welcome to Sneat! 👋
                        </h4>

                        
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

                        <!-- Login Form -->

                        <form
                            id="formAuthentication"
                            class="mb-3"
                            action="{{ route('login.submit') }}"
                            method="POST"
                        >

                            @csrf

                            <!-- Email / Username -->

                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label"
                                >
                                    Email or Username
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email or username"
                                    autofocus
                                />

                            </div>


                            <!-- Password -->

                            <div class="mb-3 form-password-toggle">

                                <div class="d-flex justify-content-between">

                                    <label
                                        class="form-label"
                                        for="password"
                                    >
                                        Password
                                    </label>

                                    <a href="#">
                                        <small>Forgot Password?</small>
                                    </a>

                                </div>


                                <div class="input-group input-group-merge">

                                    <input
                                        type="password"
                                        id="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password"
                                    />

                                    <span class="input-group-text cursor-pointer">
                                        <i class="bx bx-hide"></i>
                                    </span>

                                </div>

                            </div>


                            <!-- Remember Me -->

                            <div class="mb-3">

                                <div class="form-check">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        id="remember-me"
                                        name="remember"
                                    />

                                    <label
                                        class="form-check-label"
                                        for="remember-me"
                                    >
                                        Remember Me
                                    </label>

                                </div>

                            </div>


                            <!-- Sign In -->

                            <div class="mb-3">

                                <button
                                    class="btn btn-primary d-grid w-100"
                                    type="submit"
                                >
                                    Sign in
                                </button>

                            </div>

                        </form>

                        <!-- /Login Form -->

                    </div>

                </div>
                <!-- /Login -->

            </div>

        </div>
    </div>

    <!-- / Content -->


    <!-- Core JS -->

    <script src="{{ asset('dashboard-assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/libs/popper/popper.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/js/bootstrap.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/js/menu.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/main.js') }}"></script>

</body>

</html>