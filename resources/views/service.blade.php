    @extends('layouts.master')

    @section('section')

        <!-- page title area start  -->
        <section class="page-title-area" data-background="{{ URL::asset('public/frontend/assets/img/bg/page-title-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-title-content text-center">
                            <div class="page-title-heading">
                                <h1>Services</h1>
                            </div>
                            <nav class="grb-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home.view')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page title area end -->
        <!-- service box area  -->
        <section class="service-box-area service-box-area-main pt-150 pb-80">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box-single mb-40">
                            <div class="service-box-content st-1">
                                <div class="service-box-content-icon st-1">
                                    <i class="flaticon-idea"></i>
                                </div>
                                <div class="service-box-content-text">
                                    <h4><a href="{{route('service-details.view')}}">Office Supplies</a></h4>
                                    <p>ATI supplies all kinds of office supplies and electronics. A small 
                                        list is provided below:
                                        </p>
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                              <div class="ms-2 me-auto">
                                                <div class="fw-bold">Paper</div>
                                               
                                              </div>
                                              <span class="badge bg-primary rounded-pill">11</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                              <div class="ms-2 me-auto">
                                                <div class="fw-bold">Envelopes & Boxes</div>
                                                
                                              </div>
                                              <span class="badge bg-primary rounded-pill">5</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                              <div class="ms-2 me-auto">
                                                <div class="fw-bold">Notebooks & Notepads</div>
                                                
                                              </div>
                                              <span class="badge bg-primary rounded-pill">6</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Binder Items</div>
                                                  
                                                </div>
                                                <span class="badge bg-primary rounded-pill">6</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Filing Materials</div>
                                                  
                                                </div>
                                                <span class="badge bg-primary rounded-pill">3</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">General Office Supplies</div>
                                                  
                                                </div>
                                                <span class="badge bg-primary rounded-pill">20</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Writing Implements</div>
                                                 
                                                </div>
                                                <span class="badge bg-primary rounded-pill">14</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Office Storage</div>
                                                 
                                                </div>
                                                <span class="badge bg-primary rounded-pill">10</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Electrical Items</div>
                                                </div>
                                                <span class="badge bg-primary rounded-pill">23</span>
                                              </li>
                                              <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                  <div class="fw-bold">Miscellaneous</div>
                                                </div>
                                                <span class="badge bg-primary rounded-pill">15</span>
                                              </li>
                                          </ol>
                                        <p>These are few of the items that we provide. We welcome all your 
                                            queries.</p>
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
                                    <h4><a href="{{route('service-details.view')}}">Construction Management</a></h4>
                                    <p>We have an energetic team of experienced construction managers, 
                                        who manages each and every single construction site as a challenge. Till 
                                        now, we have handed over all the projects in due time, if not ahead of 
                                        deadline and that also with no complaints from our clients. While a 
                                        project is going on, we hold weekly progress meetings with our valued 
                                        clients, to keep them updated on the work going on, and if they want 
                                        any changes or addition, we plan accordingly.</p>

                                        <img class="mt-4" src="{{ URL::asset('public/frontend/assets/img/service/construction_ati.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box-single mb-40">
                            <div class="service-box-content st-1">
                                <div class="service-box-content-icon st-1">
                                    <i class="flaticon-healthcare"></i>
                                </div>
                                <div class="service-box-content-text">
                                    <h4><a href="{{route('service-details.view')}}">Handy Man & Janitorial</a></h4>
                                    <p>There are few services given below: <br>
                                        Appraising of property, Auto maintenance, Cabinet refacing, Carpentry, Ceiling repair, Ceramic tile repair, Barbecue pit maintenance, Cleaning, Concrete work, Countertops, Curtain hanging, Decks, Door installation, Door repair, Dryer repair, Dryer vent cleaning, Framing, Garage door openers, Garage doors, General Maintenance, Gutter Cleaning, Gutter Repair, Heating system tune-up, Home inspection, Home security systems, Hot tubs and spas, Insulation installation (batts), Insulation installation (blown-in), Lamp repairs, Landscaping, Lawncare, Maid service, Remodeling kitchens, Roofing, Safety modifications, Sealing driveways, Senior Living Modifications, Sprinkler system installation and so many services.</p>
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box-single mb-40">
                            <div class="service-box-content st-1">
                                <div class="service-box-content-icon st-1">
                                    <i class="flaticon-analytics"></i>
                                </div>
                                <div class="service-box-content-text">
                                    <h3 style="margin-top: 20px; font-weight: 50px;"><a href="{{route('service-details.view')}}">Corporate Event Management</a></h3>
                                    <p>ATI arranges all sorts of corporate events and catering. We have an 
                                        experienced team to cater all your event related needs and PR 
                                        activities. We guarantee our products’ quality and customer satisfaction through 
                                        our service. Our services are tailored according to our client’s need. Our 
                                        motto is to provide our clients with the best service they deserve. 
                                    </p>
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
                                    <h3 style="margin-top: 25px; font-weight: 600;"><a href="{{route('service-details.view')}}">Scrap Management & Recycling</a></h3>
                                    <p>Recently ATI has opened up recycling service, 
                                        thinking of the impact global warming is having 
                                        on the Earth’s climate. We specialize in recycling 
                                        Plastic, Glass, Metal, Paper & Cardboards. We 
                                        have proper equipment, such as furnace & 
                                        shredders, etc. to recycle scraps, generated by 
                                        our valued clients.</p>
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
                                    <h4><a href="{{route('service-details.view')}}">Logistics Support</a></h4>
                                    <p>ATI provides all kinds of transport related support required by our 
                                        clients. Private Cars, Mini Vans, SUVs, Pick Ups, Trucks, Vans, Bus are a 
                                        few to be named. We also provide moving and courier service for our 
                                        valued clients.</p>
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
                                    <h4><a href="{{route('service-details.view')}}">Travel Support</a></h4>
                                    <p>We provide all kinds of support to our clients from processing visa, 
                                        ticketing to international & domestic destinations, Reserving hotel 
                                        rooms for our valued clients and arranging tours and local guides for 
                                        them is what we excel in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-box-single mb-40">
                            <div class="service-box-content st-1">
                                <div class="service-box-content-icon st-1">
                                    <i class="flaticon-consultation"></i>
                                </div>
                                <div class="service-box-content-text">
                                    <h5 style="margin-top: 20px; font-weight: 50px;"><a href="{{route('service-details.view')}}">Office Furnitures & Interior</a></h5>
                                    <p>ATI has an excellent team of both experienced and young Architects, to 
                                        cater your needs for interior designing, landscaping and construction.
                                        ATI has a furniture factory, with state of the art technology to design 
                                        any sorts of Commercial or Residential furniture. We also import 
                                        furniture from China.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service box end -->
        <!-- partners area start  -->
        <section class="partners-area pb-80">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-lg-6">
                        <div class="partners-content mb-40">
                            <div class="section-title mb-35">
                                <h2>Our Global Partners We Worked With</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="partners-logo pl-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-partner">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand1.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner text-end">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand2.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-partner text-center">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand3.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand4.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-partner text-end">
                                        <a href="#"><img src="{{ URL::asset('public/frontend/assets/img/brand/brand5.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- partners area end -->
        <!-- hire area start  -->
        <section class="hire-area" data-background="{{ URL::asset('public/frontend/assets/img/bg/hire-bg.jpg') }}">
            <div class="container">
                <div class="row wow fadeInUp justify-content-center">
                    <div class="col-lg-8 col-md-11">
                        <div class="hire-content text-center">
                            <div class="section-title mb-55">
                                <h2 class="white-color">Do You Have Some Projects
                                    In Your Mind ?</h2>
                            </div>
                            <div class="hire-btn">
                                <a href="contact.html" class="grb-btn">HIRE US NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hire area end  -->
        <!-- testimonial area start  -->
        <div class="testimonial-area st-2">
            <div class="container">
                <div class="row wow fadeInUp align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-30">
                            <div class="border-left">
                                <p>Testimonials</p>
                            </div>
                            <h2>Some Expression Of <br> Our Clients</h2>
                        </div>
                        <div class="swiper-container testimonial-active-2 st-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-single">
                                        <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut
                                            aliquip ex ea commodo consequat.
                                            consequat. Duis aute irure dolor in reprehenderit</p>
                                        <div class="testimonial-name">
                                            <h5>Jonathon Razib</h5>
                                            <p>Sr. Manager, Wood Bazar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-single">
                                        <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut
                                            aliquip ex ea commodo consequat.
                                            consequat. Duis aute irure dolor in reprehenderit</p>
                                        <div class="testimonial-name">
                                            <h5>Nirob Aronno</h5>
                                            <p>CEO, CodeXpand</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-single">
                                        <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut
                                            aliquip ex ea commodo consequat.
                                            consequat. Duis aute irure dolor in reprehenderit</p>
                                        <div class="testimonial-name">
                                            <h5>Jonathon Razib</h5>
                                            <p>Sr. Manager, Wood Bazar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-single">
                                        <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                            do eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut
                                            aliquip ex ea commodo consequat.
                                            consequat. Duis aute irure dolor in reprehenderit</p>
                                        <div class="testimonial-name">
                                            <h5>Nirob Aronno</h5>
                                            <p>CEO, CodeXpand</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-nav-2">
                                <div class="testimonial2-btn-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="testimonial2-btn-next"><i class="fal fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="testimonial-right p-relative">
                            <div class="test-i-img">
                                <img src="{{ URL::asset('public/frontend/assets/img/testimonial/test-i-img.jpg') }}" alt="">
                            </div>
                            <div class="testimonial-right-img p-relative">
                                <img src="{{ URL::asset('public/frontend/assets/img/testimonial/test-r-img.jpg') }}" alt="">
                                <div class="testimonial-quote pos-2">
                                    <i class="fal fa-quote-left"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->

    @endsection