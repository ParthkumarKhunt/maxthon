@extends('frontend.layout.app')
@section('section')

<!-- CONTENT START -->
<section>
    <!-- SERVICE START -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-1.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-house-cleaning.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Home Cleaning</h4>
                            <p>Homes and thoroughly launder them between usage, We give our teams the accusantium
                                doloremque laudantium. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-2.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-cleaning.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Office Cleaning</h4>
                            <p>We are closely monitoring national, state and local health agencies for the most
                                recent developments. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-3.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-service-glass-cleaning.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Windows Cleaning</h4>
                            <p>Follow these tips from the CDC to help prevent the spread of the seasonal flu and
                                respiratory diseases. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-4.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-vaccum-cleaner.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Carpet Cleaning</h4>
                            <p>Cleanliness plays a large role in the comfort of your home, but many homeowners
                                simply don’t have. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-5.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-cleaning-tools.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Deep Cleaning</h4>
                            <p>We realize that every family has their own preferences, so we accommodate all your
                                specific requests into. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="sb-washla">
                    <figure class="sb-thumbail"><img src="{{ asset('public/frontend/assets/images/commons/service-6.jpg') }}" alt=""></figure>
                    <div class="sb-caption">
                        <div class="sb-inner-caption">
                            <div class="sb-circle-layer">
                                <figure class="sb-center-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/white-cleaner.png') }}" alt="">
                                </figure>
                            </div>
                            <h4>Apartment Cleaning</h4>
                            <p>While some cleaning companies use rotating cleaning plans, we’re equipped to clean
                                your entire house.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE END -->

    <div class="mb-5" style="padding-top: 100px ; padding-bottom: 100px ; background: #ccf0fa ">
        <div class="container">
            <div class="pc-center">
                <div class="section-heading">
                    <div class="row">
                        <div class="col-10 col-md-6 mx-auto text-center mb-4">
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>




                <div class="bs-carousel">
                    <div class="owl-carousel owl-theme" id="#owl-demo">
                        @foreach($testimonials as $key => $value)
                            <div class="item text-center" style="width: 100% !important">
                                <div class="ws-box-services">
                                    <center>
                                        <figure class="ws-box-icon" >
                                            <img src="{{ asset('public/upload/testimonials/'.$value->image) }}" alt="testimonials_img" style="height: 80px; width: 80px; border-radius:50%; ">
                                        </figure>
                                    </center>

                                    <h4>{{ $value->name}}</h4>
                                    <p>{{ $value->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="owl-theme">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME SERVICE END -->




    <!-- CLIENTS CAROUSEL START -->
    <div class="container mt-5 mb-5">
        <div class="clients-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-1.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-5.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-8.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-4.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-2.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-6.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-7.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/frontend/assets/images/commons/client-logo-3.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLIENTS CAROUSEL END -->
</section>
<!-- CONTENT END -->
@endsection
