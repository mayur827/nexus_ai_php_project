@extends('admin.layout.app')

@section('title', 'View Testimonial')

@section('content')

<h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Website / Testimonial /</span>
            View Testimonial
        </h4>

<div class="card border-0 shadow-sm">

    <div class="card-body p-5">

        {{-- TITLE --}}
        <h4 class="fw-bold mb-5">
            View Testimonial
        </h4>


        {{-- TESTIMONIAL --}}
        <div class="testimonial-view">

            <div class="row align-items-start">

                {{-- CLIENT IMAGE --}}
                <div class="col-lg-3 col-md-4 text-center">

                    @if($testimonial->image)

                        <img
                            src="{{ asset('uploads/testimonials/' . $testimonial->image) }}"
                            alt="{{ $testimonial->client_name }}"
                            class="testimonial-image"
                        >

                    @else

                        <div class="no-image">
                            No Image
                        </div>

                    @endif

                </div>


                {{-- CLIENT INFORMATION --}}
                <div class="col-lg-9 col-md-8">

                    {{-- CLIENT NAME --}}
                    <h3 class="testimonial-name">
                        {{ $testimonial->client_name }}
                    </h3>


                    {{-- PROFESSION --}}
                    <p class="testimonial-profession">
                        {{ $testimonial->profession }}
                    </p>


                    {{-- DESCRIPTION --}}
                    <p class="testimonial-description">
                        {{ $testimonial->description }}
                    </p>

                </div>

            </div>

        </div>


        {{-- BACK BUTTON --}}
        <div class="mt-5">

            <a
                href="{{ route('admin.testimonial') }}"
                class="btn btn-secondary"
            >
                <i class="bx bx-arrow-back"></i>
                Back
            </a>

        </div>

    </div>

</div>


<style>

    /* Main testimonial area */
    .testimonial-view {
        padding: 10px 20px;
    }


    /* Client image */
    .testimonial-image {
        width: 180px;
        height: 180px;
        object-fit: cover;
        border-radius: 50%;
        display: block;
        margin: 0 auto;
    }


    /* When image does not exist */
    .no-image {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: #f5f5f5;

        display: flex;
        align-items: center;
        justify-content: center;

        color: #697a8d;
        margin: 0 auto;
    }


    /* Client name */
    .testimonial-name {
        margin-top: 10px;
        margin-bottom: 5px;

        font-size: 28px;
        font-weight: 700;

        color: #344767;
    }


    /* Profession */
    .testimonial-profession {
        margin-bottom: 25px;

        font-size: 16px;
        font-weight: 500;

        color: #697a8d;
    }


    /* Description */
    .testimonial-description {
        max-width: 850px;

        font-size: 17px;
        line-height: 1.8;

        color: #697a8d;

        margin-bottom: 0;
    }


    /* Mobile */
    @media (max-width: 767px) {

        .testimonial-view {
            padding: 10px 0;
        }

        .testimonial-image,
        .no-image {
            width: 150px;
            height: 150px;
            margin-bottom: 30px;
        }

        .testimonial-name {
            font-size: 24px;
        }

        .testimonial-description {
            font-size: 16px;
        }

    }

</style>

@endsection