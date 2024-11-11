@extends('layouts.app')
@section('content')
<section class="about_bg_img py-sm-5 py-4 position-relative">
    <div class="about_bg_layer z-0"></div>
    <img src="{{ asset('public/assets/images/png/dots.png') }}" alt="dotted-img"
        class="position-absolute top-0 start-0 d-md-block d-none">
    <img src="{{ asset('public/assets/images/png/dots.png') }}" alt="dotted-img"
        class="position-absolute bottom-0 end-0 d-sm-block d-none">
    <div class="container position-relative z-1 mt-5">
        <h1 class="fw-semibold fs_42 text-center text-uppercase text-white" data-aos="fade-down"
            data-aos-easing="linear" data-aos-duration="600">ABOUT US
        </h1>
        <p class="fs_16 fw-medium text-center mt-2 text-white" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">HOME / ABOUT US
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container my-xl-5">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden">
                    <img src="{{ asset('public/assets/images/about.jpg') }}" alt="aboutimg" class="w-100 about_img">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-3 mt-lg-0 mt-sm-4" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <h4 class="text_blue fw-medium fs_18 text-lg-start text-center">About Us</h4>
                <h2 class="fw-semibold text-black fs_32 text-center text-lg-start">About All Printer Setup</h2>
                <p class="fs_16 fw-normal text-center text-lg-start opacity-75">Lorem ipsum, dolor sit amet
                    consectetur
                    adipisicing elit. Harum, ad? Lorem, ipsum <span class="d-xl-block">Lorem ipsum dolor sit
                        amet consectetur
                    </span>
                </p>
                <p class="fs_16 fw-normal text-center text-lg-start opacity-75">Lorem ipsum, dolor sit amet
                    consectetur
                    adipisicing elit. Harum, ad? Lorem <span class="d-xl-block">Lorem ipsum dolor sit amet
                        consectetur
                    </span>
                </p>
                <p class="fs_16 fw-normal text-center text-lg-start opacity-75">Lorem ipsum, dolor sit amet
                    consectetur
                    adipisicing elit. Harum, ad? Lorem <span class="d-xl-block">Lorem ipsum dolor sit amet
                        consectetur
                    </span>
                </p>
                <div class="d-flex justify-content-lg-start justify-content-center mb-sm-3">
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 contact_bg_img position-relative">
    <div class="footer_bg_layer z-0"></div>
    <div class="container bg-light py-3 py-md-5 py-sm-4 px-xl-5 px-sm-4 px-3 box_shadow position-relative z-1 border_radius_6">
        <div class="row align-items-center justify-content-center">
            <h2 class="fw-semibold text-black fs_32 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
                Our Mission, Vision and Values
            </h2>
            <p class="fs_16 fw-normal opacity-75 mb-4 pb-xl-2 text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum 
                <span class="d-xl-block">Lorem ipsum dolor sit amet consectetur</span>
            </p>

            <div class="col-lg-5 col-12" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <div class="vision_card d-flex gap-3">
                    <div>
                        <img src="{{ asset('public/assets/images/png/mission-icon.png') }}" alt="mission-icon">
                    </div>
                    <div>
                        <h4 class="fw-medium text-black fs_20 mb-2">Mission</h4>
                        <p class="fs_16 fw-normal opacity-75 mb-0">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <div class="vision_card d-flex gap-3">
                    <div>
                        <img src="{{ asset('public/assets/images/png/vision-icon.png') }}" alt="vision-icon">
                    </div>
                    <div>
                        <h4 class="fw-medium text-black fs_20 mb-2">Vision</h4>
                        <p class="fs_16 fw-normal opacity-75 mb-0">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mt-4" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
                <div class="vision_card d-flex gap-3">
                    <div>
                        <img src="{{ asset('public/assets/images/png/values-icon.png') }}" alt="value-icon">
                    </div>
                    <div>
                        <h4 class="fw-medium text-black fs_20 mb-2">Values</h4>
                        <p class="fs_16 fw-normal opacity-75 mb-0">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, ad? Lorem, ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt sunt itaque Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, reiciendis. Lorem ipsum at molestias vitae sed eaque commodi dignissimos eum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-xl-5">
        <h2 class="fw-semibold fs_32 text-center text-black" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">Testimonial</h2>
        <div class="row mt-4 justify-content-center">
            <div class="testimonial">
                <div class="col-lg-4 col-sm-6 col-12" data-aos="zoom-in" data-aos-easing="linear"
                data-aos-duration="600">
                    <div class="testimonial_card mx-3">
                        <h4 class="fw-medium fs_20 text-black mb-md-3 mb-2 text-center text-lg-start">Lorem,
                            ipsum.</h4>
                        <h5
                            class="fw-normal fs_16 text-black opacity-75 mb-md-3 mb-2 text-center text-lg-start">
                            Lorem, ipsum.</h5>
                        <p class="fs_16 fw-normal text-black text-center text-lg-start">"Lorem ipsum, dolor sit
                            amet
                            consectetur Lorem, ipsum dolor Lorem ipsum dolor sit.
                            adipisicing elit. Harum, ad? Lorem, ipsum "
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-0 mt-3" data-aos="zoom-in" data-aos-easing="linear"
                data-aos-duration="600">
                    <div class="testimonial_card mx-3">
                        <h4 class="fw-medium fs_20 text-black mb-md-3 mb-2 text-center text-lg-start">Lorem,
                            ipsum.</h4>
                        <h5
                            class="fw-normal fs_16 text-black opacity-75 mb-md-3 mb-2 text-center text-lg-start">
                            Lorem, ipsum.</h5>
                        <p class="fs_16 fw-normal text-black text-center text-lg-start">"Lorem ipsum, dolor sit
                            amet
                            consectetur Lorem, ipsum dolor Lorem ipsum dolor sit.
                            adipisicing elit. Harum, ad? Lorem, ipsum "
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 mt-3 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear"
                data-aos-duration="600">
                    <div class="testimonial_card mx-3">
                        <h4 class="fw-medium fs_20 text-black mb-md-3 mb-2 text-center text-lg-start">Lorem,
                            ipsum.</h4>
                        <h5
                            class="fw-normal fs_16 text-black opacity-75 mb-md-3 mb-2 text-center text-lg-start">
                            Lorem, ipsum.</h5>
                        <p class="fs_16 fw-normal text-black text-center text-lg-start">"Lorem ipsum, dolor sit
                            amet
                            consectetur Lorem, ipsum dolor Lorem ipsum dolor sit.
                            adipisicing elit. Harum, ad? Lorem, ipsum "
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 mt-3 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear"
                data-aos-duration="600">
                    <div class="testimonial_card mx-3">
                        <h4 class="fw-medium fs_20 text-black mb-md-3 mb-2 text-center text-lg-start">Lorem,
                            ipsum.</h4>
                        <h5
                            class="fw-normal fs_16 text-black opacity-75 mb-md-3 mb-2 text-center text-lg-start">
                            Lorem, ipsum.</h5>
                        <p class="fs_16 fw-normal text-black text-center text-lg-start">"Lorem ipsum, dolor sit
                            amet
                            consectetur Lorem, ipsum dolor Lorem ipsum dolor sit.
                            adipisicing elit. Harum, ad? Lorem, ipsum "
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 mt-3 mt-lg-0" data-aos="zoom-in" data-aos-easing="linear"
                data-aos-duration="600">
                    <div class="testimonial_card mx-3">
                        <h4 class="fw-medium fs_20 text-black mb-md-3 mb-2 text-center text-lg-start">Lorem,
                            ipsum.</h4>
                        <h5
                            class="fw-normal fs_16 text-black opacity-75 mb-md-3 mb-2 text-center text-lg-start">
                            Lorem, ipsum.</h5>
                        <p class="fs_16 fw-normal text-black text-center text-lg-start">"Lorem ipsum, dolor sit
                            amet
                            consectetur Lorem, ipsum dolor Lorem ipsum dolor sit.
                            adipisicing elit. Harum, ad? Lorem, ipsum "
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service_bg_img position-relative py-5">
    <div class="about_bg_layer z-0"></div>
    <div class="container position-relative z-1 mt-xl-4">
        <h2 class="fw-semibold text-white fs_32 text-center " data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="600">Lorem ipsum dolor
            ipsum.</h2>
        <p class="fs_16 fw-normal text-center text-white" data-aos="fade-down" data-aos-easing="linear"
        data-aos-duration="600">Lorem ipsum, dolor sit dolor sit amet Lorem ipsum
            dolor
            sit amet-<span class="d-xlblock">Lorem ipsum dolor sit Lorem ipsum dolor sit amet. Lorem ipsum,
                dolor
                sit Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae, enim. Lorem ipsum dolor sit
                amet consectetur, adipisicing elit. Enim, qui! Lorem ipsum dolor sit amet consectetur
                adipisicing
                elit. Dolorum porro repellat ut excepturi error omnis minima quisquam quae nobis dicta.
                consectetur
                adipisicing .
                amet consectetur
            </span>
        </p>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container my-xl-5 position-relative">
        <img src="{{ asset('public/assets/images/png/arrow-right.png') }}" alt="arrow" class="position-absolute work_arrow1 d-lg-block d-none">
        <img src="{{ asset('public/assets/images/png/arrow-right.png') }}" alt="arrow" class="position-absolute work_arrow2 d-lg-block d-none">        
        <h4 class="text-center text_blue fw-medium fs_18" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600"> Work Process</h4>
        <h2 class="fw-semibold fs_32 text-center text-black" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600"> How We Work</h2>
        <div class="row mt-5">
            <div class="col-lg-4 col-12 text-center" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="600">
                <img src="{{ asset('public/assets/images/png/favicon.png') }}" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium fs_24 mt-3 text-center">Lorem ipsum dolor</h3>
                <p class="text-black fs_16 fw-normal text-center opacity-75">Lorem, ipsum dolor sit amet
                    consectetur
                    <span class="d-xl-block">adipisicing elit.
                        Esse,</span>
                </p>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="600">
                <img src="{{ asset('public/assets/images/png/download-icon.png') }}" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium fs_24 mt-3 text-center">Lorem ipsum dolor</h3>
                <p class="text-black fs_16 fw-normal text-center opacity-75">Lorem, ipsum dolor sit amet
                    consectetur
                    <span class="d-xl-block">adipisicing elit.
                        Esse,</span>
                </p>
            </div>
            <div class="col-lg-4 col-12 text-center mt-3 mt-lg-0" data-aos="fade-up" data-aos-easing="linear"
                data-aos-duration="600">
                <img src="{{ asset('public/assets/images/png/favicon.png') }}" alt="printer" class="w-100 workprinter_img">
                <h3 class="text-black fw-medium fs_24 mt-3 text-center">Lorem ipsum dolor</h3>
                <p class="text-black fs_16 fw-normal text-center opacity-75">Lorem, ipsum dolor sit amet
                    consectetur
                    <span class="d-xl-block">adipisicing elit.
                        Esse,</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-xl-5">
        <h2 class="text-center fw-semibold text-black fs_32 mb-2" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">We are excellent at providing the <span class="text_blue">best
                products.</span></h2>
        <div class="row mt-lg-5 mt-4">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <img src="{{ asset('public/assets/images/png/tick-icon.png') }}" alt="tick-icon" class="tick_icon">
                    <div>
                        <h3 class="text-black fw-medium fs_24">Lorem ipsum dolor Lorem, ipsum.</h3>
                        <p class="text-black fs_16 fw-normal mb-0 opacity-75">Lorem, ipsum dolor sit amet
                            consectetur Lorem, ipsum dolor ipsum.
                            <span class="d-xl-block">adipisicing elit.
                                Esse,</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
@endsection