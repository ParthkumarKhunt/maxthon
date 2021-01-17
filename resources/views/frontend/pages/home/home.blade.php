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
            @foreach($ourTeam as $key => $value)
                <div class="item">
                    <div class="team-card">
                        <figure class="tc-portrait">
                            <img src="{{ asset('public/upload/ourteam/'. $value->image)}}" alt="ourteam">
                            <ul class="tc-social">
                            @if($value->facebook != NULL)
                                <li><a href="{{ $value->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if($value->twitter != NULL)
                                <li><a href="{{ $value->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if($value->instagram != NULL)
                                <li><a href="{{ $value->instagram }}"><i class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if($value->linkedin != NULL)
                                <li><a href="{{ $value->linkedin }}"><i class="fab fa-dribbble"></i></a></li>
                            @endif
                            </ul>
                        </figure>
                        <div class="tc-caption">
                        
                            <h4>{{ $value->name }}</h4>
                            <p>{{ $value->designation}}</p>
                        </div>
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
    @if(!$statistical->isEmpty())
    <div class="ww-counter mb-5" style="background-image:url({{ asset('public/upload/aboutus_section/'.$statistical[0]->image)}});">
        <div class="container">
            <div class="counter-bar">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/upload/aboutus_section/'.$statistical[0]->icon1) }}"  class="mr-3" alt="happay_client">
                            <div class="media-body">
                                <div class="counter" data-count="{{$statistical[0]->count1}}">0</div>
                                <p>Happy  Client </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/upload/aboutus_section/'.$statistical[0]->icon2) }}" class="mr-3" alt="happay_client">
                            <div class="media-body">
                                <div class="counter" data-count="{{$statistical[0]->count2}}">0</div>
                                <p> Number of Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer right-border">
                            <img src="{{ asset('public/upload/aboutus_section/'.$statistical[0]->icon3) }}" class="mr-3" alt="happay_client">
                            <div class="media-body">
                                <div class="counter" data-count="{{$statistical[0]->count3}}">0</div>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="media counter-layer">
                            <img src="{{ asset('public/upload/aboutus_section/'.$statistical[0]->icon4) }}" class="mr-3" alt="happay_client">
                            <div class="media-body">
                                <div class="counter" data-count="{{$statistical[0]->count4}}">0</div>
                                <p>Technology & Platform</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- COUNTER END -->


    <!-- CLIENTS CAROUSEL START -->
    @if(!$ourClient->isEmpty())
    <div class="container mt-5 mb-5">
        <div class="clients-carousel">
            <div class="owl-carousel owl-theme">
              
                @foreach($ourClient as $key => $value)
                <div class="item">
                    <div class="client-box">
                        <figure class="client-icon">
                            <img src="{{ asset('public/upload/ourclients/'.$value->image) }}" alt="blog_img" style="width: 184px;
                            height: 125px;">
                            
                            {{-- <img src="{{ asset('public/frontend/assets/images/commons/client-logo-1.jpg') }}" alt=""> --}}
                        </figure>
                    </div>
                </div>               
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- CLIENTS CAROUSEL END -->
</section>

@endsection
