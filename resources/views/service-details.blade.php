    @extends('layouts.master')

    @section('section')

        <!-- page title area start  -->
        <section class="page-title-area" data-background="{{ URL::asset('public/frontend/assets/img/bg/page-title-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="page-title-heading">
                                <h1>Office Supplies</h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home.view')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('service.view')}}">Services</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Office Supplies</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- service details area start  -->
        <section class="service-details-area pt-150 pb-80">
            <div class="container">
                <div class="service-details-img wow fadeInUp">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="service-details-single-img">
                                <img src="{{ URL::asset('public/frontend/assets/img/service/service-d1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="service-details-single-img">
                                        <img src="{{ URL::asset('public/frontend/assets/img/service/service-d2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="service-details-single-img">
                                        <img src="{{ URL::asset('public/frontend/assets/img/service/service-d3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-details-content wow fadeInUp">
                    <div class="service-details-heading">
                        <h2>Office Supplies</h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form,
                        by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be sure. Lorem
                        ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        consequat. Duis aute irure
                        dolor in reprehenderit.</p>
                    <div class="row">
                        <div class="col-xl-9">
                            <h5 class="mb-15">Planning & Starting</h5>
                            <p class="mb-40">There are many variations of passages of Lorem Ipsum available, but the
                                majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum</p>
                            <h5 class="mb-15">Sketch & Executing</h5>
                            <p class="mb-20">There are many variations of passages of Lorem Ipsum available, but the
                                majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum</p>
                            <ul class="execute-list">
                                <li>Research & Beyond the Business Plans</li>
                                <li>Marketing Eligibility & Spreading the Products</li>
                                <li>Raw Materials Collections</li>
                                <li>Finally Put Out the Results & Live Server Testing.</li>
                            </ul>
                            <h5 class="mb-20">Questions On The Projects</h5>
                            <div class="grb-accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Will The Project Meet The Requirements of Clients As Want?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                                by injected humour. If you are going to use a passage of Lorem Ipsum,
                                                you need to be sure. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Where Should I Incorporate to My Business Solutions?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                                by injected humour. If you are going to use a passage of Lorem Ipsum,
                                                you need to be sure. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How to Process The Function For Development?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form,
                                                by injected humour. If you are going to use a passage of Lorem Ipsum,
                                                you need to be sure. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                                et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-45 mb-25">Explore More Services</h4>
                    <div class="row service-details-more">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box-single mb-40">
                                <div class="service-box-content st-1">
                                    <div class="service-box-content-icon st-1">
                                        <i class="flaticon-analytics"></i>
                                    </div>
                                    <div class="service-box-content-text">
                                        <h4><a href="service-details.html">Construction Management</a></h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but
                                            the majority
                                            have
                                            suffered alteration in some form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box-single mb-40">
                                <div class="service-box-content st-1">
                                    <div class="service-box-content-icon st-1">
                                        <i class="flaticon-digital-marketing"></i>
                                    </div>
                                    <div class="service-box-content-text">
                                        <h4><a href="service-details.html">Handy Man & Janitorial</a></h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but
                                            the majority
                                            have
                                            suffered alteration in some form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-box-single mb-40">
                                <div class="service-box-content st-1">
                                    <div class="service-box-content-icon st-1">
                                        <i class="flaticon-web-maintenance"></i>
                                    </div>
                                    <div class="service-box-content-text">
                                        <h4><a href="service-details.html">Office Supplies</a></h4>
                                        <p>There are many variations of passages of Lorem Ipsum available, but
                                            the majority
                                            have
                                            suffered alteration in some form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service details area end -->

    @endsection