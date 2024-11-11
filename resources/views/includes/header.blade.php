<div class="overflow-hidden">
        <header>
            <div class="nav_contact bg_blue py-3">
                <div class="container">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="d-lg-flex gap-5 mt-4 mt-lg-0">
                            <div class="d-sm-flex gap-5 justify-content-sm-between align-items-sm-start">
                                <div class="d-flex gap-3 align-items-center pe-xl-4 mb-3 mb-sm-0">
                                    <img src="{{ asset('public/assets/images/png/location-pin.png') }}" alt="location-icon"
                                    class="mail_icon">
                                    <div>
                                        <a href="#" class="text-white fs_16 fw-normal link">Lorem, ipsum dolor.</a>
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center pe-xl-5">
                                    <img src="{{ asset('public/assets/images/png/email.png') }}" alt="mail-icon" class="mail_icon">
                                    <div>
                                        <a href="#" class="text-white fs_16 fw-normal link">contactus@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex gap-3 d-none">
                            <a href="#"><img src="{{ asset('public/assets/images/png/instagram-icon.png') }}" alt="social-icon" class="social_icon"></a>
                            <a href="#"><img src="{{ asset('public/assets/images/png/facebook-icon.png') }}" alt="social-icon" class="social_icon"></a>
                            <a href="#"><img src="{{ asset('public/assets/images/png/whatsapp-icon.png') }}" alt="social-icon" class="social_icon"></a>
                            <a href="#"><img src="{{ asset('public/assets/images/png/twitter.png') }}" alt="social-icon" class="social_icon"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <nav id="nav" class="ps-xl-2 border_bottom bg-light">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center py-3">
                        <div class="d-flex justify-content-lg-start justify-content-center">
                            <a href="#"><img src="{{ asset('public/assets/images/png/page-logo.png') }}" alt="page-logo" class="page_logo w-100"></a>
                        </div>
                        <ul id="navbar" class="ps-0 m-0 d-flex flex-column list-unstyled flex-lg-row gap-4 justify-content-center align-items-center mobile_view z_index_7">
                            <li class="py-2 px-3" id="home-link">
                                <a href="{{route('home')}}" class="navline position-relative fw-semibold nav_text fs_16 lh_100 text-black ">HOME</a>
                            </li>
                            <li class="py-2 px-3">
                                <a href="{{route('about.show')}}"  class="navline position-relative fw-semibold nav_text fs_16 lh_100 text-black ">ABOUT US</a>
                            </li>
                            <li id="dropdown" class="py-2 px-3 position-relative">
                                <a href="{{route('service')}}" class="navline position-relative fw-semibold nav_text fs_16 lh_100 text-black d-flex align-items-center gap-2">
                                    SERVICES
                                    <span><img src="{{ asset('public/assets/images/png/dropdown-arrow.png') }}" alt="dropdown" class="dropdown_icon"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="text-black">Service 1</a></li>
                                    <li><a href="#">Service 2</a></li>
                                    <li><a href="#">Service 3</a></li>
                                    <li><a href="#">Service 4</a></li>
                                    <li><a href="#">Service 5</a></li>
                                    <li><a href="#">Service 6</a></li>
                                    <li><a href="#">Service 7</a></li>
                                </ul>
                            </li>
                            <li id="dropdown" class="py-2 px-3 position-relative">
                                <a href="#" class="navline position-relative fw-semibold nav_text fs_16 lh_100 text-black d-flex align-items-center gap-2">
                                    PAGES
                                    <span><img src="{{ asset('public/assets/images/png/dropdown-arrow.png') }}" alt="dropdown" class="dropdown_icon"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('about.show')}}" class="text-black">About Us</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{route('service')}}">Services</a></li>
                                </ul>
                            </li>
                            <li class="py-2 px-3">
                                <a href="{{route('contact')}}" class="navline position-relative fw-semibold nav_text fs_16 lh_100 text-black ">CONTACT US</a>
                            </li>
                        </ul>
                        <div id="menubtn-icon" onclick="opennav()" class="d-lg-none z_index_9 pe-2 cursor_pointer menu_icon ">
                            <div class="line"></div>
                            <div class="line1 my_6 my-1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
            </nav>
            
        </header>
