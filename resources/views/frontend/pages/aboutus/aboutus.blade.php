@extends('frontend.layout.app')
@section('section')


<!-- CONTENT START -->
<section>
    <!-- ABOUT SECTION START -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-info-layer">
                    <h5 class="subtitle">About Washla</h5>
                    <h2>Expert House Cleaning Service you Can Trust</h2>
                    <p><strong>Customized advice to smallholder couriera with radical efficiency and scalability
                            logistic.</strong></p>
                    <p>Washla cleaning service. We are a company dedicated to giving our customers back the time
                        they deserve to enjoy the things they love. We put The Extra In Your Ordinary, restoring
                        balance to your life by taking care of your home.</p>
                    <div class="order-list d-flex">
                        <ul class="ol-left">
                            <li>Service guarantee</li>
                            <li>Tradition of trust</li>
                        </ul>
                        <ul class="ol-right">
                            <li>Shifting idled planes.</li>
                            <li>Sustainable trade
                            </li>
                        </ul>
                    </div>
                    <div class="brand-layer d-flex">
                        <figure class="signature">
                            <img src="{{ asset('public/frontend/assets/images/commons/signature.jpg') }}" alt="">
                        </figure>
                        <div class="bl-contact">
                            <p>Call Us for Service</p>
                            <h4>052 5401 3322</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 spacing-md">
                <figure class="about-img-layer">
                    <img src="{{ asset('public/frontend/assets/images/commons/washla-about.jpg') }}" alt="">
                    <div class="ai-banner">
                        <div class="media">
                            <img src="{{ asset('public/frontend/assets/images/icons/icon-clean.png') }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">Cleaning Your Worries Away</h5>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
    <!-- ABOUT SECTION END -->

    <!-- GRID SECTION START -->
    <div class="bg-wrapper mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grid-column">
                                <figure class="gc-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/blue-house-cleaning.png') }}" alt="">
                                </figure>
                                <h4>Home Cleaning</h4>
                                <p>Homes and thoroughly launder them between usage, We give our teams.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-column">
                                <figure class="gc-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/blue-cleaning.png') }}" alt="">
                                </figure>
                                <h4>Office Cleaning</h4>
                                <p>We are closely monitoring national, state and local health agencies.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-column">
                                <figure class="gc-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/service-glass-cleaning.png') }}" alt="">
                                </figure>
                                <h4>Windows Cleaning</h4>
                                <p>Follow these tips from the CDC to help prevent the spread.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="grid-column">
                                <figure class="gc-icon">
                                    <img src="{{ asset('public/frontend/assets/images/icons/blue-cleaning-tools.png') }}" alt="">
                                </figure>
                                <h4>Deep Cleaning</h4>
                                <p>Cleanliness plays a large role in the comfort of your home.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 spacing-md">
                    <div class="ws-left-side">
                        <h5 class="subtitle">We love cleaning</h5>
                        <h2>We have 20 Years <br /> of experience</h2>
                        <p>
                            <strong>
                                World’s leading non-asset- based supply chain management companies, we design and implement industry-leading.
                            </strong>
                        </p>
                        <p>Washla customers has a tremendous opportunity to answer the call of logistic needs across the globe. Has 26 affiliated state soybean associations representing 30 soybean-producing state.</p>
                        <button class="btn-washla btn-outline mt-3" type="submit">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GRID SECTION END -->

   <!-- TEAM STAR-->
   <div class="team-banner-wrapper mb-5">
        <div class="container">
            <div class="section-heading">
                <div class="row">
                    <div class="col-10 col-md-6 mx-auto text-center">
                        <h5 class="subtitle">Meet Our</h5>
                        <h2>Professional Team</h2>
                        <p>Washla is a global community of practice that facilitates dialogue, information exchange and use of information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container team-layer-up mb-5">
        <div class="team-carousel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/frontend/assets/images/commons/team-portrait-1.jpg') }}" alt="">
                            <ul class="tc-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </figure>
                        <div class="tc-caption">
                            <h4>Laura Jones</h4>
                            <p>Cleaner</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/frontend/assets/images/commons/team-portrait-2.jpg') }}" alt="">
                            <ul class="tc-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </figure>
                        <div class="tc-caption">
                            <h4>Sara Ryan</h4>
                            <p>House Cleaner</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/frontend/assets/images/commons/team-portrait-3.jpg') }}" alt="">
                            <ul class="tc-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </figure>
                        <div class="tc-caption">
                            <h4>John Smith</h4>
                            <p>Housekeeper</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/frontend/assets/images/commons/team-portrait-4.jpg') }}" alt="">
                            <ul class="tc-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </figure>
                        <div class="tc-caption">
                            <h4>Maria Johnson</h4>
                            <p>Cleaning Attendants</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/frontend/assets/images/commons/team-portrait-5.jpg') }}" alt="">
                            <ul class="tc-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </figure>
                        <div class="tc-caption">
                            <h4>Monica Gordon</h4>
                            <p>House Cleaning</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEAM END-->

    <!-- VIDEO POPUP START -->
    <div class="container mt-5 mb-5">
        <figure class="pop-background">
            <div class="btn-popup">
                <a class="popup-youtube" href="https://www.youtube.com/watch?v=-_tvJtUHnmU">
                    <div class="pulse"><i class="fas fa-play"></i></div>
                </a>
            </div>
        </figure>
    </div>
    <!-- VIDEO POPUP END -->



</section>
<!-- CONTENT END -->


@endsection
