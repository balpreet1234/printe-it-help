@extends('layouts.app')
@section('content')
<section class="bg-light py-sm-5 py-4 position-relative">
    <img src="{{ asset('public/assets/images/png/dots.png') }}" alt="dotted-img"
    class="position-absolute top-0 start-0 d-md-block d-none pointer_events">
<img src="{{ asset('public/assets/images/png/dots.png') }}" alt="dotted-img"
    class="position-absolute bottom-0 end-0 d-sm-block d-none pointer_events">
    <div class="container mb-xl-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <h1 class="fw-semibold fs_42 text-center text-lg-start text-uppercase">Lorem ipsum <span
                        class="text_blue">
                        dolor amet</span>
                    consectetur lorem
                </h1>
                <p class="fs_16 fw-normal text-center text-lg-start opacity-75">Lorem ipsum, dolor sit amet
                    consectetur
                    adipisicing elit. Harum, ad? Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Obcaecati,
                    velit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                </p>
                <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Watch Video</button>
                    <button class="book_btn text-white py-2 px-4 fw-medium fs_16">Book Appointment</button>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-sm-4 col-6 text-center">
                        <div class="white_card">
                            <img src="{{ asset('public/assets/images/png/shield.png') }}" alt="shield">
                            <p class="text-black fw-normal fs_16 mt-2">Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 text-center">
                        <div class="white_card">
                            <img src="{{ asset('public/assets/images/png/shield.png') }}" alt="shield">
                            <p class="text-black fw-normal fs_16 mt-2">Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 text-center mt-3 mt-sm-0">
                        <div class="white_card">
                            <img src="{{ asset('public/assets/images/png/shield.png') }}" alt="shield">
                            <p class="text-black fw-normal fs_16 mt-2">Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-5 col-10 mt-5 mt-lg-0" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <img src="{{ asset('public/assets/images/png/printer.png') }}" alt="printer" class="w-100">
            </div>
        </div>
    </div>

</section>

<section class="py-4 support_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12 support_border_right border_sm_block">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('public/assets/images/png/warranty.png') }}" alt="warranty" class="support_icon">
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-center mt-3">
                    <a href="#" class="text-black fs-medium fs_18">Check Warranty Status </a>
                    <a href="#"><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next-arrow" class="support_arrow">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 support_border_right border_lg_block mt-4 mt-sm-0">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/images/png/warranty.png') }}" alt="warranty" class="support_icon">
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-center mt-3">
                    <a href="#" class="text-black fs-medium fs_18">Check Warranty Status </a>
                    <a href="#"><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next-arrow" class="support_arrow">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 support_border_right mt-4 mt-lg-0 border_sm_block">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('public/assets/images/png/warranty.png') }}" alt="warranty" class="support_icon">
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-center mt-3">
                    <a href="#" class="text-black fs-medium fs_18">Check Warranty Status </a>
                    <a href="#"><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next-arrow" class="support_arrow">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 mt-4 mt-lg-0">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('public/assets/images/png/warranty.png') }}" alt="warranty" class="support_icon">
                </div>
                <div class="d-flex gap-2 align-items-center justify-content-center mt-3">
                    <a href="#" class="text-black fs-medium fs_18">Check Warranty Status </a>
                    <a href="#"><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next-arrow" class="support_arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-xl-5">
        <div class="row align-items-center">
            <div class="col-lg-5 col-12" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden">
                    <img src="{{ asset('public/assets/images/about.jpg') }}" alt="aboutimg" class="w-100 about_img">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-3 mt-lg-0 mt-sm-4" data-aos="fade-right" data-aos-easing="linear"
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
                <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <a href="#" class="text_blue d-flex gap-2 link">More support options for this topic
                        <span><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next" class="support_arrow">
                        </span></a>
                    <div class="mt-3">
                        <a href="#" class="text_blue d-flex gap-2 link">Wireless print support <span><img src="{{ asset('public/assets/images/png/next.png') }}" alt="next" class="support_arrow">
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
=
<section class="py-5 bg-light">
    <div class="container my-xl-5">
        <h2 class="text-center fw-semibold text-black fs_32 mb-2" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="600">Our <span class="text_blue">Services</span></h2>
        <p class="text-center fw-normal text-black fs_16 opacity-75" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="600">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Possimus ea et earum,
            officia neque alias <span class="d-xl-block">Lorem ipsum dolor sit amet consectetur
                adipisicing.</span></p>
        <div class="row justify-content-center pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12 text-center" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="service_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/serviceimg.jpg') }}" alt="serviceimg" class="w-100 service_img">
                    </div>
                    <h3 class="text_blue fw-medium fs_24">Lorem ipsum dolor sit.</h3>
                    <p class="text-black fs_16 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse,
                        reprehenderit!</p>
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 text-center mt-3 mt-sm-0" data-aos="zoom-in-up"
                data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/serviceimg.jpg') }}" alt="serviceimg" class="w-100 service_img">
                    </div>
                    <h3 class="text_blue fw-medium fs_24">Printer Setup For Home</h3>
                    <p class="text-black fs_16 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse,
                        reprehenderit!</p>
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 text-center mt-sm-4 mt-3 mt-lg-0" data-aos="zoom-in-up"
                data-aos-easing="linear" data-aos-duration="600">
                <div class="service_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/serviceimg.jpg') }}" alt="serviceimg" class="w-100 service_img">
                    </div>
                    <h3 class="text_blue fw-medium fs_24">Printer Setup For Home</h3>
                    <p class="text-black fs_16 ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse,
                        reprehenderit!</p>
                    <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-lig ht py-5">
    <div class="container my-xl-5">
        <h2 class="text-center fw-semibold text-black fs_32 mb-4" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="600">Here's Why You Should <span class="text_blue">Choose</span> US</h2>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-4 mt-lg-0" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-4" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-4" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-4" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <img src="{{ asset('public/assets/images/png/printing.png') }}" alt="printing" class="mb-3">
                            <div class="solu_title">
                                <h3 class="text-black fw-medium fs_24">Complete Printer Support</h3>
                            </div>
                            <div class="solu_description">
                                <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet
                                    consectetur adipisicing
                                    elit.
                                    Esse,
                                    reprehenderit! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptate,
                                    ducimus!
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam, eveniet!
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 contact_bg_img position-relative">
    <div class="contact_bg_layer z-1 pointer_events"></div>
    <div class="container position-relative z-1">
        <div class="row justify-content-between align-items-center pt-3">
            <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                <h2 class="fw-semibold text-white fs_32 mb-1"> Contact Information
                </h2>
                <div class="form_line mb-3 mt-1"></div>
                <p class="text-white fs_16 fw-normal mb-3">Lorem ipsum Lorem, ipsum. dolor sit amet Lorem ipsum
                    dolor sit amet. Lorem ipsum dolor
                    consectetur, sit laudantium, consequatur
                    consectetur adipisicing.
                </p>
                <h4 class="fs_16 fw-normal d-flex gap-3 align-items-center mb-3 text-white">
                    <span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon"></span>
                    Lorem ipsum dolor sit.
                </h4>
                <h4 class="fs_16 fw-normal d-flex gap-3 align-items-center mb-3 text-white">
                    <span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon"></span>
                    Lorem ipsum dolor sit.
                </h4>
                <h4 class="fs_16 fw-normal d-flex gap-3 align-items-center mb-3 text-white">
                    <span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon"></span>
                    Lorem ipsum dolor sit.
                </h4>
                <h4 class="fs_16 fw-normal d-flex gap-3 align-items-center mb-3 text-white">
                    <span><img src="{{ asset('public/assets/images/png/dot-icon.png') }}" alt="dot-icon" class="dot_icon"></span>
                    Lorem ipsum dolor sit.
                </h4>
                
            </div>
            <div class="col-lg-5 col-12 mt-md-4 mt-3 mt-lg-0" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <input type="hidden" name="form_type" value="home_form">
                    <div class="corner-animation z-1"></div>
                    <div class="position-relative z-1">
                        <h2 class="fw-semibold text_blue text-center fs_32 mb-4 position-relative z-2">Fill Out This Form for Assistance</h2>
                        
                        <div class="d-md-flex gap-3">
                            <div class="w-100">
                                <input class="w-100 mb-1" type="text" placeholder="Enter your name" name="firstName" value="{{ old('firstName') }}" pattern="[A-Za-z\s]+" title="Please enter only letters" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                @error('firstName')
                                    <span class="error-message text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Last Name" name="lastName" value="{{ old('lastName') }}" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                @error('lastName')
                                    <span class="error-message text-danger ps-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="d-md-flex gap-3 mt-3">
                            <div class="w-100">
                                <input class="w-100" type="email" placeholder="Enter Your Email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="error-message text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your Address" name="address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="error-message text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="d-md-flex gap-3 mt-lg-3">
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your Number" name="contact" minlength="10" maxlength="10" value="{{ old('contact') }}" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                @error('contact')
                                    <span class="error-message text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-100 mt-2 mt-lg-0">
                                <input class="w-100" type="text" placeholder="Enter Your City" name="city" value="{{ old('city') }}" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                                @error('city')
                                    <span class="error-message text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="common_btn text-white py-2 px-4 fw-medium fs_16 mt-md-3 mt-2">Enquiry Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-xl-5">
        <div>
            <h2 class="fw-semibold text-black fs_32 mb-4 text-center" data-aos="fade-down"
                data-aos-easing="linear" data-aos-duration="600"> All Printer Setup - Latest <span
                    class="text_blue">Blogs</span> Update</h2>
        </div>
        <div class="row responsive pt-md-4 pt-1 justify-content-center">
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black fs_16">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black fw-medium fs_24 mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fs_16 opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black fs_16">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black fw-medium fs_24 mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit.
                            Esse,
                            reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.
                        </p>
                        <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                    </div>
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black fs_16">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black fw-medium fs_24 mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fs_16 fw-normal opacity-75">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                    </div>
                </div>
                
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black fs_16">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black fw-medium fs_24 mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fs_16 opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                    </div>
                    
                </div>
            </div>
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/assets/images/png/blogimg.jpg') }}" alt="blogimg" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="d-flex gap-2 align-items-center">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="clock">
                            <a href="#" class="fw-medium text-black fs_16">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black fw-medium fs_24 mt-3">Lorem ipsum dolor sit amet consectetur</h3>
                        <p class="text-black fs_16 opacity-75 fw-normal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, reprehenderit! Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem, ipsum.</p>
                        <button class="common_btn text-white py-2 px-4 fw-medium fs_16">Contact us</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="slider-container py-5">
    <div class="slider">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        <img src="{{ asset('public/assets/images/phantom.png') }}" alt="phantom" class="slider_img">
        <img src="{{ asset('public/assets/images/images.jfif') }}" alt="img" class="slider_img">
        
    </div>
</section>
    </div>
@endsection
  