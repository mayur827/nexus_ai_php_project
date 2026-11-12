@extends('admin.layout.app')

@section('title', 'Dashboard')

@push('styles')

<style>

    /* =========================================================
       PREMIUM DASHBOARD
    ========================================================= */

    .premium-dashboard {
        position: relative;
    }


    /* =========================================================
       TOP WELCOME BANNER
    ========================================================= */

    .dashboard-welcome {
        position: relative;
        overflow: hidden;
        border: 0;
        border-radius: 22px;
        background:
            radial-gradient(circle at 85% 20%, rgba(105, 108, 255, .35), transparent 35%),
            radial-gradient(circle at 10% 90%, rgba(3, 195, 255, .20), transparent 35%),
            linear-gradient(135deg, #17192e 0%, #292c63 55%, #696cff 100%);
        box-shadow: 0 15px 45px rgba(40, 42, 100, .25);
        animation: welcomeSlide .7s ease both;
    }


    .dashboard-welcome::before {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        right: -80px;
        top: -120px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .08);
        animation: floatingCircle 6s ease-in-out infinite;
    }


    .dashboard-welcome::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        left: 40%;
        bottom: -130px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .05);
        animation: floatingCircle 8s ease-in-out infinite reverse;
    }


    .welcome-content {
        position: relative;
        z-index: 2;
    }


    .welcome-title {
        color: #fff;
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 8px;
    }


    .welcome-text {
        color: rgba(255, 255, 255, .75);
        margin-bottom: 0;
        font-size: 15px;
    }


    /* =========================================================
       TOTAL CONTENT CARD
    ========================================================= */

    .total-content-card {
        height: 100%;
        min-height: 170px;
        border: 0;
        border-radius: 22px;
        background: linear-gradient(
            145deg,
            #696cff 0%,
            #8b5cf6 55%,
            #4f46e5 100%
        );
        box-shadow: 0 15px 40px rgba(105, 108, 255, .28);
        position: relative;
        overflow: hidden;
        animation: cardEntrance .8s ease both;
    }


    .total-content-card::before {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        right: -100px;
        top: -100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .10);
    }


    .total-content-card::after {
        content: "";
        position: absolute;
        width: 120px;
        height: 120px;
        left: -50px;
        bottom: -50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .07);
    }


    .total-content-card .card-body {
        position: relative;
        z-index: 2;
    }


    .total-label {
        color: rgba(255, 255, 255, .75);
        font-size: 14px;
        font-weight: 500;
    }


    .total-number {
        color: #fff;
        font-size: 42px;
        font-weight: 800;
        line-height: 1.1;
        margin-top: 10px;
    }


    .total-icon {
        width: 58px;
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 17px;
        background: rgba(255, 255, 255, .16);
        color: #fff;
        font-size: 27px;
    }


    /* =========================================================
       SECTION TITLE
    ========================================================= */

    .dashboard-section-title {
        font-size: 20px;
        font-weight: 700;
        color: #566a7f;
    }


    .dashboard-section-subtitle {
        font-size: 13px;
        color: #a1acb8;
        margin-top: 4px;
    }


    /* =========================================================
       PREMIUM CONTENT CARD
    ========================================================= */

    .content-card-link {
        text-decoration: none !important;
        display: block;
        height: 100%;
    }


    .premium-content-card {
        position: relative;
        height: 100%;
        min-height: 190px;
        border: 1px solid rgba(67, 89, 113, .08);
        border-radius: 20px;
        background: #fff;
        overflow: hidden;
        box-shadow: 0 6px 22px rgba(67, 89, 113, .08);
        transition:
            transform .35s cubic-bezier(.2,.8,.2,1),
            box-shadow .35s ease,
            border-color .35s ease;
        animation: cardEntrance .7s ease both;
    }


    .premium-content-card:hover {
        transform: translateY(-9px);
        box-shadow: 0 18px 42px rgba(67, 89, 113, .16);
        border-color: rgba(105, 108, 255, .25);
    }


    /* Shine effect */

    .premium-content-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: -130%;
        width: 70%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.65),
            transparent
        );
        transform: skewX(-20deg);
        transition: left .8s ease;
    }


    .premium-content-card:hover::before {
        left: 150%;
    }


    .content-card-body {
        padding: 23px;
        position: relative;
        z-index: 2;
    }


    /* =========================================================
       ICON
    ========================================================= */

    .content-icon {
        width: 56px;
        height: 56px;
        border-radius: 17px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
        transition: transform .35s ease;
    }


    .premium-content-card:hover .content-icon {
        transform: rotate(-6deg) scale(1.08);
    }


    /* Different icon backgrounds */

    .icon-purple {
        background: rgba(105,108,255,.12);
        color: #696cff;
    }

    .icon-blue {
        background: rgba(3,195,255,.12);
        color: #03c3ec;
    }

    .icon-green {
        background: rgba(113,221,55,.12);
        color: #71dd37;
    }

    .icon-orange {
        background: rgba(255,171,0,.13);
        color: #ffab00;
    }

    .icon-red {
        background: rgba(255,62,29,.12);
        color: #ff3e1d;
    }

    .icon-pink {
        background: rgba(233,30,99,.12);
        color: #e91e63;
    }


    /* =========================================================
       CARD TEXT
    ========================================================= */

    .content-card-title {
        color: #566a7f;
        font-size: 17px;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 4px;
    }


    .content-card-description {
        color: #a1acb8;
        font-size: 13px;
        margin-bottom: 18px;
    }


    /* =========================================================
       COUNT
    ========================================================= */

    .entry-count {
        font-size: 30px;
        font-weight: 800;
        color: #566a7f;
        line-height: 1;
    }


    .entry-label {
        font-size: 12px;
        color: #a1acb8;
        margin-left: 5px;
    }


    .view-arrow {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f5ff;
        color: #696cff;
        transition: all .3s ease;
    }


    .premium-content-card:hover .view-arrow {
        background: #696cff;
        color: #fff;
        transform: translateX(4px);
    }


    /* =========================================================
       ANIMATIONS
    ========================================================= */

    @keyframes welcomeSlide {

        from {
            opacity: 0;
            transform: translateY(-18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes cardEntrance {

        from {
            opacity: 0;
            transform: translateY(25px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes floatingCircle {

        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(18px) rotate(8deg);
        }

    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 767px) {

        .welcome-title {
            font-size: 22px;
        }

        .total-number {
            font-size: 34px;
        }

        .premium-content-card {
            min-height: 170px;
        }

    }

</style>

@endpush


@section('content')

<div class="premium-dashboard">


    {{-- ======================================================
         TOP AREA
    ====================================================== --}}

    <div class="row g-4 mb-4">


        {{-- WELCOME --}}
        <div class="col-xl-8 col-lg-7">

            <div class="dashboard-welcome">

                <div class="card-body p-4 p-md-5">

                    <div class="welcome-content">

                        <div class="mb-3">

                            <span
                                class="badge"
                                style="
                                    background:rgba(255,255,255,.14);
                                    color:#fff;
                                    padding:8px 13px;
                                    border-radius:20px;
                                "
                            >
                                <i class="bx bx-sparkles me-1"></i>
                                Admin Dashboard
                            </span>

                        </div>

                        <h3 class="welcome-title">
                            Welcome back to NexusAI 👋
                        </h3>

                        <p class="welcome-text">
                            Manage your website content, sections and customer information
                            from one powerful dashboard.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- TOTAL ENTRIES --}}
        <div class="col-xl-4 col-lg-5">

            <div class="total-content-card">

                <div class="card-body p-4">

                    <div class="d-flex justify-content-between align-items-start">

                        <div>

                            <div class="total-label">
                                Total Content Entries
                            </div>

                            <div
                                class="total-number count-number"
                                data-count="{{ $totalEntries }}"
                            >
                                0
                            </div>

                        </div>


                        <div class="total-icon">

                            <i class="bx bx-layer"></i>

                        </div>

                    </div>


                    <div class="mt-4">

                        <span
                            style="
                                color:rgba(255,255,255,.75);
                                font-size:13px;
                            "
                        >
                            Across all website sections
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>



    {{-- ======================================================
         SECTION TITLE
    ====================================================== --}}

    <div class="mb-4">

        <div class="dashboard-section-title">
            Website Content
        </div>

        <div class="dashboard-section-subtitle">
            Manage every dynamic section of your NexusAI website
        </div>

    </div>



    {{-- ======================================================
         CONTENT CARDS
    ====================================================== --}}

    <div class="row g-4">


        



        {{-- HERO --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.hero') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-blue">
                                <i class="bx bx-home"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Hero
                        </div>

                        <div class="content-card-description">
                            Manage hero section
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['hero'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- SOCIAL --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.social') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-green">
                                <i class="bx bx-bar-chart-alt-2"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Social
                        </div>

                        <div class="content-card-description">
                            Manage social statistics
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['social'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- FEATURES --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.feature') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-orange">
                                <i class="bx bx-grid-alt"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Features
                        </div>

                        <div class="content-card-description">
                            Manage website features
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['feature'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- WORK --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.work') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-red">
                                <i class="bx bx-list-ol"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Work Section
                        </div>

                        <div class="content-card-description">
                            Manage work process
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['work'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- INTEGRATION --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.integration') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-purple">
                                <i class="bx bx-git-branch"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Integration
                        </div>

                        <div class="content-card-description">
                            Manage connected tools
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['integration'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- PRICING --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.price') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-green">
                                <i class="bx bx-dollar"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Pricing
                        </div>

                        <div class="content-card-description">
                            Manage pricing plans
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['price'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Plans
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- TESTIMONIAL --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.testimonial') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-pink">
                                <i class="bx bx-message-rounded-detail"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            Testimonial
                        </div>

                        <div class="content-card-description">
                            Manage client testimonials
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['testimonial'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>



        {{-- FAQ --}}
        <div class="col-xl-3 col-lg-4 col-md-6">

            <a
                href="{{ route('admin.faq') }}"
                class="content-card-link"
            >

                <div class="premium-content-card">

                    <div class="content-card-body">

                        <div class="d-flex justify-content-between">

                            <div class="content-icon icon-orange">
                                <i class="bx bx-help-circle"></i>
                            </div>

                            <div class="view-arrow">
                                <i class="bx bx-right-arrow-alt"></i>
                            </div>

                        </div>

                        <div class="content-card-title">
                            FAQ
                        </div>

                        <div class="content-card-description">
                            Manage frequently asked questions
                        </div>

                        <div>

                            <span
                                class="entry-count count-number"
                                data-count="{{ $counts['faq'] }}"
                            >
                                0
                            </span>

                            <span class="entry-label">
                                Entries
                            </span>

                        </div>

                    </div>

                </div>

            </a>

        </div>


    </div>

</div>


@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const counters = document.querySelectorAll('.count-number');

    counters.forEach(function (counter) {

        const target = parseInt(counter.getAttribute('data-count')) || 0;

        let current = 0;

        const duration = 1000;

        const steps = 40;

        const increment = target / steps;

        const interval = duration / steps;

        const timer = setInterval(function () {

            current += increment;

            if (current >= target) {

                counter.textContent = target;

                clearInterval(timer);

            } else {

                counter.textContent = Math.floor(current);

            }

        }, interval);

    });


    /* Stagger card animation */

    const cards = document.querySelectorAll('.premium-content-card');

    cards.forEach(function (card, index) {

        card.style.animationDelay = (index * 0.08) + 's';

    });

});

</script>

@endpush

@endsection