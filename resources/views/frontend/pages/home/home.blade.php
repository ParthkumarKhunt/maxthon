@extends('frontend.layout.app')
@section('section')

<section>
    <!-- HOME SERVICE CAROUSEL START -->
    <div class="container mt-5 mb-5">
        <div class="front-carousel-alt">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-cleaning.png') }}" alt="Silder 1">
                        </figure>
                        <h4>Home Cleaning</h4>
                        <p>Homes and thoroughly launder them between usage.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-service-glass-cleaning.png') }}" alt="Silder 2">
                        </figure>
                        <h4>Windows Cleaning</h4>
                        <p>We are closely monitoring national, state and local health.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-cleaner.png') }}" alt="Silder 3">
                        </figure>
                        <h4>Office Cleaning</h4>
                        <p>Follow these tips from the CDC to help prevent the seasonal.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-cleaning-tools.png') }}" alt="">
                        </figure>
                        <h4>Deep Cleaning</h4>
                        <p>Cleanliness plays a large role in the comfort of your home.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-vaccum-cleaner.png') }}" alt="">
                        </figure>
                        <h4>Carpet Cleaning</h4>
                        <p>We realize that every family has their own preferences.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="box-layer">
                        <figure class="bl-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/white-house-cleaning.png') }}" alt="">
                        </figure>
                        <h4>Apartment Cleaning</h4>
                        <p>While some cleaning companies use rotating cleaning plans.</p>
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
    <!-- HOME SERVICE CAROUSEL END -->

    <!-- HOME ABOUT START -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6">
                <figure class="about-front">
                    <img src="{{ asset('public/frontend/assets/images/commons/staff-about.jpg') }}" alt="">
                    <div class="mission-layer">
                        <figure class="ml-icon">
                            <img src="{{ asset('public/frontend/assets/images/icons/medal-award-white.png') }}" alt="">
                        </figure>
                        <h4>Our Values</h4>
                        <p>World’s leading non-asset- based supply chain management companies.</p>
                    </div>
                </figure>
            </div>
            <div class="col-lg-6 spacing-md ">
                <div class="about-layer">
                    <h5 class="subtitle">WHY CHOOSE US</h5>
                    <h2>Cleaner Place is a <br /> Safer Place </h2>
                    <p><strong>Customized advice to smallholder couriera with radical efficiency and scalability
                            logistic.</strong></p>
                    <p>Washla customers has a tremendous opportunity to answer the call of logistic needs across the
                        globe. Has 26 affiliated state soybean associations representing 30 soybean-producing state.
                    </p>
                    <p class="read-more-alt">
                        Read More
                    </p>
                    <div class="signature-layer">
                        <figure class="signature-img">
                            <img src="{{ asset('public/frontend/assets/images/commons/signature.jpg') }}" alt="">
                        </figure>
                        <div class="front-contact-layer">
                            <h4>123-456-7890</h4>
                            <p>Call Us for Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME ABOUT END -->

    <!-- HOME WIDE SECTION START -->
    <div class="ws-washla mt-5 mb-5">
        <div class="content-left-layer">
            <div class="inner-cll">
                <h2>Expert House Cleaning Service you Can Trust</h2>
                <p>Washla cleaning service. We are a company dedicated to giving our customers back the time they
                    deserve to enjoy the things they love. We put The Extra In Your Ordinary, restoring balance to
                    your life by taking care of your home.</p>
                <div class="order-list d-flex">
                    <ul class="ol-left">
                        <li>Market Research</li>
                        <li>Cleaning Accreditation</li>
                    </ul>
                    <ul class="ol-right">
                        <li>Lower Storage Costs.</li>
                        <li>Collection Deliveries</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME WIDE SECTION END -->

    <!-- TEAM START -->
    <div class="container mt-5 mb-5">
        <div class="section-heading">
            <div class="row">
                <div class="col-10 col-md-6 mx-auto text-center mb-4">
                    <h5 class="subtitle">MEET OUR</h5>
                    <h2>Our Team</h2>
                    <p>The member of our highly experienced team is dedicated to providing you with only the best
                        service we can possibly provide.</p>
                </div>
            </div>
        </div>
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
    <!-- TEAM END -->

    <!-- CAROUSEL INFO SECTION START -->
    <div class="container mt-5">
        <div class="cover-feature">
            <div class="row">
                <div class="col-lg-5">
                    <div class="gallery-carousel">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="gallery-slider-bg"
                                    style="background-image:url({{ asset('public/frontend/assets/images/commons/washla-6.jpg') }});"></div>
                            </div>
                            <div class="item">
                                <div class="gallery-slider-bg"
                                    style="background-image:url({{ asset('public/frontend/assets/images/commons/blog-thumb-11.jpg') }});"></div>
                            </div>
                            <div class="item">
                                <div class="gallery-slider-bg"
                                    style="background-image:url({{ asset('public/frontend/assets/images/commons/washla-about.jpg') }});"></div>
                            </div>
                        </div>
                        <div class="owl-theme">
                            <div class="owl-controls">
                                <div class="custom-nav owl-nav"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="cf-content">
                        <h2>The New Generation of Cleaning and Restoration</h2>
                        <p>World’s leading non-asset- based supply chain management companies, we design and
                            implement industry-leading. We specialise in intelligent & effective search and believes
                            in the power of partnerships to grow business..</p>
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

                        <div class="cf-box-layer d-flex">
                            <div class="cfb-inner">
                                <div class="media">
                                    <img src="{{ asset('public/frontend/assets/images/icons/guarantee.png') }}" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Service Guarantee</h5>
                                        <p>We are telling our team members to switch cleaning.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cfb-inner">
                                <div class="media">
                                    <img src="{{ asset('public/frontend/assets/images/icons/medal-award.png') }}" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Awarded Company</h5>
                                        <p>We encourage our customers to let us know in advance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CAROUSEL INFO SECTION END -->

    <!-- COUNTER START -->
    <div class="ww-counter mb-5">
        <div class="container">
            <div class="counter-bar">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/frontend/assets/images/icons/happy.png') }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <div class="counter" data-count="385">0</div>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/frontend/assets/images/icons/counter-house-cleaning.png') }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <div class="counter" data-count="842">0</div>
                                <p>Houses Cleaned</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/frontend/assets/images/icons/counter-award.png') }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <div class="counter" data-count="489">0</div>
                                <p>Awards Received</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer">
                            <img src="{{ asset('public/frontend/assets/images/icons/service-glass-cleaning.png') }}" class="mr-3" alt="...">
                            <div class="media-body">
                                <div class="counter" data-count="1344">0</div>
                                <p>Glass Cleaned</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER END -->

    <!-- CLIENTS CAROUSEL START -->
    <div class="container mt-5 mb-5">
        <div class="clients-carousel">
            <div class="owl-carousel owl-theme">
                @if(!$ourClient->isEmpty())
                @foreach($ourClient as $key => $value)
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/upload/ourclients/'.$value->image) }}" alt="blog_img">
                            
                            {{-- <img src="{{ asset('public/frontend/assets/images/commons/client-logo-1.jpg') }}" alt=""> --}}
                        </figure>
                    </div>
                </div>               
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- CLIENTS CAROUSEL END -->
</section>

@endsection
