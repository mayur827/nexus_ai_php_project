<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
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

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Favicon -->
    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('dashboard-assets/img/favicon/favicon.ico') }}"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    />

    <!-- Boxicons -->
    <link
        rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/fonts/boxicons.css') }}"
    />

    <!-- Core CSS -->
    <link
        rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/css/core.css') }}"
    />

    <link
        rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/css/theme-default.css') }}"
    />

    <!-- Perfect Scrollbar -->
    <link
        rel="stylesheet"
        href="{{ asset('dashboard-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
    />

    @stack('styles')

    <!-- Helpers -->
    <script src="{{ asset('dashboard-assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('dashboard-assets/js/config.js') }}"></script>

</head>

<body>

    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

            <!-- Sidebar -->
            @include('admin.common.sidebar')

            <div class="layout-page">

                <!-- Navbar -->
                @include('admin.common.navbar')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')

                    </div>

                    <!-- Footer -->
                    @include('admin.common.footer')

                    <div class="content-backdrop fade"></div>

                </div>

            </div>

        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

    </div>


    <!-- Core JS -->

    <script src="{{ asset('dashboard-assets/vendor/libs/jquery/jquery.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/libs/popper/popper.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/js/bootstrap.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('dashboard-assets/vendor/js/menu.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('dashboard-assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard-assets/js/main.js') }}"></script>

    <!-- Dashboard Analytics -->
    <script src="{{ asset('dashboard-assets/js/dashboards-analytics.js') }}"></script>

    {{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))

<script>

document.addEventListener('DOMContentLoaded', function () {

    Swal.fire({

        icon: 'success',

        title: 'Success!',

        text: "{{ session('success') }}",

        confirmButtonText: 'OK',

        confirmButtonColor: '#696cff',

        background: '#ffffff',

        customClass: {
            confirmButton: 'btn btn-primary'
        },

        buttonsStyling: false

    });

});

</script>



@endif

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('submit', function (e) {

    if (!e.target.classList.contains('delete-form')) {
        return;
    }

    e.preventDefault();

    const form = e.target;
    const itemName = form.getAttribute('data-item-name');

    Swal.fire({
        title: 'Are you sure?',
        text: 'You want to delete this ' + itemName + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#696cff',
        cancelButtonColor: '#8592a3',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then(function (result) {

        if (result.isConfirmed) {
            form.submit();
        }

    });

});
</script>

@stack('scripts')

</body>

</html>