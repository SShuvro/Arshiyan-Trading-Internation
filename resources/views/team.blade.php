    @extends('layouts.master')

    @section('section')

        <!-- page title area start  -->
        <section class="page-title-area" data-background="{{ URL::asset('public/frontend/assets/img/bg/page-title-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="page-title-heading">
                                <h1>Team Page</h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home.view')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- team area start  -->
        <section class="team-description-area pt-140">
            <div class="container">
                <div class="team-description-content">
                    <div class="row wow fadeInUp align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-30">
                                <h2>Meet Our Experienced & Skilled Team</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="mb-30 fs-16">I believe everyone should have the opportunity to create the progress
                                through the technology and develop the skills.
                                Luxury home prices in Sydney declined for the first time in years slipping.</p>
                        </div>
                    </div>
                    <div class="team-description-img mt-25 mb-120">
                        <img src="{{ URL::asset('public/frontend/assets/img/team/team-desc-img.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row wow fadeInUp team-p-members">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member mb-30 st-3">
                            <div class="member-img st-3">
                                <div class="member-img-bg">
                                    <img src="{{ URL::asset('public/frontend/assets/img/shape/member-shape-st3.png') }}" alt="">
                                </div>
                                <a href="{{route('contact.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/team/team-sh1.png') }}" alt=""></a>
                            </div>
                            <div class="member-name st-3">
                                <h5><a href="{{route('contact.view')}}">Janathan Samantha</a></h5>
                                <span>Web Developer</span>
                                <ul class="member-social-icons st-3">
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member mb-30 st-3">
                            <div class="member-img st-3">
                                <div class="member-img-bg">
                                    <img src="{{ URL::asset('public/frontend/assets/img/shape/member-shape-st3.png') }}" alt="">
                                </div>
                                <a href="{{route('contact.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/team/team-sh2.png') }}" alt=""></a>
                            </div>
                            <div class="member-name st-3">
                                <h5><a href="{{route('contact.view')}}">Daniel David Deo</a></h5>
                                <span>Programmer</span>
                                <ul class="member-social-icons st-3">
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member mb-30 st-3">
                            <div class="member-img st-3">
                                <div class="member-img-bg">
                                    <img src="{{ URL::asset('public/frontend/assets/img/shape/member-shape-st3.png') }}" alt="">
                                </div>
                                <a href="{{route('contact.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/team/team-sh3.png') }}" alt=""></a>
                            </div>
                            <div class="member-name st-3">
                                <h5><a href="{{route('contact.view')}}">Arman Ariyan</a></h5>
                                <span>Manager</span>
                                <ul class="member-social-icons st-3">
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member mb-30 st-3">
                            <div class="member-img st-3">
                                <div class="member-img-bg">
                                    <img src="{{ URL::asset('public/frontend/assets/img/shape/member-shape-st3.png') }}" alt="">
                                </div>
                                <a href="{{route('contact.view')}}"><img src="{{ URL::asset('public/frontend/assets/img/team/team-sh4.png') }}" alt=""></a>
                            </div>
                            <div class="member-name st-3">
                                <h5><a href="{{route('contact.view')}}">Shimuel Bappy</a></h5>
                                <span>UI/UX Designer</span>
                                <ul class="member-social-icons st-3">
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->
        <!-- brand area start  -->
        <div class="brand-area pt-70 pb-100">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-12">
                        <div class="swiper-container brand-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand1.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand1-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand2.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand2-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand3.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand3-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand4.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand4-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand5.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand5-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand1.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand1-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand2.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand2-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand3.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand3-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand4.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand4-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand5.png') }}" alt=""></a>
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand5-wc.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        @endsection
