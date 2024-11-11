@extends('layouts.app')
@section('content')
<section class="about_bg_img py-sm-5 py-4 position-relative">
    <div class="about_bg_layer z-0"></div>
    <img src="{{ asset('assets/images/png/dots.png') }}" alt="dotted-img"
        class="position-absolute top-0 start-0 d-md-block d-none">
    <img src="{{ asset('assets/images/png/dots.png') }}" alt="dotted-img"
        class="position-absolute bottom-0 end-0 d-sm-block d-none">
    <div class="container position-relative z-1 mt-5">
        <h1 class="fw-semibold fs_42 text-center text-uppercase text-white" data-aos="fade-down"
            data-aos-easing="linear" data-aos-duration="600">Available Services
        </h1>
        <p class="fs_16 fw-medium text-center mt-2 text-uppercase text-white" data-aos="fade-down"
            data-aos-easing="linear" data-aos-duration="600">HOME / Our Services
        </p>
    </div>
</section>
    
<section class="py-5">
    <div class="container my-xl-5">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <h2 class="fw-semibold text_blue fs_32 text-center text-lg-start">Lorem ipsum dolor
                    ipsum.</h2>
                <p class="fs_16 fw-normal text-center text-lg-start opacity-75">Lorem ipsum, dolor sit dolor sit
                    amet Lorem ipsum dolor sit amet<span class="d-xl-block">Lorem ipsum dolor sit Lorem ipsum dolor
                        sit amet. Lorem ipsum, dolor sit <br>consectetur adipisicing .
                        amet consectetur
                    </span>
                </p>
                <div
                    class="d-flex gap-xl-5 gap-sm-4 gap-2 mt-4 justify-content-lg-start justify-content-center align-items-center flex-column flex-sm-row">
                    <div>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-3"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-3"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-2"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                    </div>
                    <div>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-3"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-3"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                        <h4 class="fs_18 fw-medium d-flex gap-2 align-items-center mb-2"><span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon">
                        </span>Lorem
                            ipsum
                            dolor sit.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-9 col-12 mx-auto mt-4 mt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden">
                    <img src="{{ asset('public/assets/images/about.avif') }}" alt="service" class="w-100 about_img border_radius_6">
            </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 contact_bg_img position-relative">
    <div class="footer_bg_layer z-0"></div>
    <div class="container bg-light box_shadow border_radius_6 position-relative z-1 p-lg-5 p-sm-4 p-3">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden mx-auto">
                    <img src="{{ asset('public/assets/images/service-printer.jpg') }}" alt="service" class="about_img border_radius_6 w-100">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <h2 class="text-center text-lg-start fw-semibold text-black fs_32 mb-3">Lorem ipsum dolor sit.</h2>
                <p class="fs_16 fw-normal text-center text-lg-start text-black mb-2 pe-xl-5">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum dolor sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum dolor sit. adipisicing . amet consectetur</span></p>
                <p class="fs_16 fw-normal text-center text-lg-start text-black mb-2 pe-xl-5">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum dolor sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum dolor sit. adipisicing . amet consectetur</span></p>
                <p class="fs_16 fw-normal text-center text-lg-start text-black mb-3 pe-xl-5">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum dolor sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum dolor sit. adipisicing . amet consectetur</span></p>
                <div class="d-flex justify-content-lg-start justify-content-center">
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-lig ht py-5">
    <div class="container my-xl-5">
        <h2 class="text-center fw-semibold text-black fs_32 mb-2" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600"><span class="text_blue">Our</span> Services</h2>
        <p class="fs_16 fw-normal text-center text-black mb-4" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="600">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum
            dolor
            sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum
                dolor sit.
                adipisicing .
                amet consectetur
            </span>
        </p>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-sm-0" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">

                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-lg-0" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">

                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 " data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">

                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="service_clr_card">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 " data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="service_clr_card2">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/assets/images/png/service-icon.png') }}" alt="service-icon" class="mb-3">
                    </div>
                    <div class="solu_title">
                        <h3 class="text-black fw-medium fs_24 text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black fs_16 fw-normal opacity-75 text-center">Lorem, ipsum dolor sit
                            amet
                            consectetur adipisicing
                            elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptate,
                            ducimus!
                            Lorem ipsum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service_bg_img position-relative py-5">
        <div class="about_bg_layer z-0"></div>
        <div class="container position-relative z-1">
            <h2 class="fw-semibold text-white fs_32 text-center " data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">Lorem ipsum dolor
                ipsum.</h2>
            <p class="fs_16 fw-normal text-center text-white" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum dolor
                sit amet-<span class="d-xlblock">Lorem ipsum dolor sit Lorem ipsum dolor sit amet. Lorem ipsum, dolor
                    sit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, enim. Lorem ipsum dolor sit
                    amet consectetur, adipisicing elit. Enim, qui! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Dolorum porro repellat ut excepturi error omnis minima quisquam quae nobis dicta. consectetur
                    adipisicing .
                    amet consectetur
                </span>
            </p>
        </div>
</section>

<section class="py-5 bg-light ">
    <div class="container my-xl-5">
        <h2 class="text-center fw-semibold text-black fs_32 mb-2" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">FAQS</h2>
        <p class="fs_16 fw-normal text-center text-black mb-5" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="600">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum
            dolor
            sit amet-<span class="d-xl-block"> error omnis minima quisquam quae nobis dicta. consectetur Lorem ipsum
                dolor sit.
                adipisicing .
                amet consectetur
            </span>
        </p>
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <div id="faqAccordion" class="accordion accordion-flush">
                    <div class="accordion-item bg-light">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-medium text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="true"
                                aria-controls="flush-collapse1">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse show"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body fw-normal text-black">This is the first item's accordion
                                body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Dolor, accusantium?</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-light">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-medium text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false"
                                aria-controls="flush-collapse2">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body fw-normal text-black">This is the first item's accordion
                                body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Dolor, accusantium?</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-light">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-medium text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false"
                                aria-controls="flush-collapse3">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body fw-normal text-black">TThis is the first item's accordion
                                body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Dolor, accusantium?</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-light">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-medium text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                aria-controls="flush-collapse4">
                                Accordion Item #4
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body fw-normal text-black">TThis is the first item's accordion
                                body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Dolor, accusantium?</div>
                        </div>
                    </div>
                    <div class="accordion-item bg-light">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-medium text-black" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                aria-controls="flush-collapse5">
                                Accordion Item #5
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body fw-normal text-black">TThis is the first item's accordion
                                body. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus suscipit
                                eveniet sequi ipsam! Consequuntur, numquam. Lorem ipsum dolor, sit amet
                                consectetur
                                adipisicing elit. Dolor, accusantium?</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-sm-6 col-12 d-flex" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="service_logo w-100 mx-auto">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-3 mt-sm-0 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/images.jfif') }}" alt="samsung" class="service_logo object-fit-cover w-100">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 mt-lg-0 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/brother.svg') }}" alt="brother" class="service_logo w-100">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 mt-lg-0 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/images.png') }}" alt="sharp" class="service_logo p-4 object-fit-cover w-100">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/brother.svg') }}" alt="brother" class="service_logo w-100">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/images.png') }}" alt="sharp" class="service_logo p-4 object-fit-cover w-100">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="service_logo w-100 mx-auto">
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-md-4 mt-3 d-flex justify-content-center" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <img src="{{ asset('public/assets/images/images.jfif') }}" alt="samsung" class="service_logo object-fit-cover w-100">
            </div>
        </div>
    </div>
</section>

@endsection
