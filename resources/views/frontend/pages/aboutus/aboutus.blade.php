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

    <br><br><br><br>

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

    <!-- GRID SECTION START -->
    <div class="bg-wrapper mt-5" style="background-color: white">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 spacing-md">
                    <div class="ws-left-side">

                        <h2>We have 20 Years of experience</h2>
                        <p>
                            <strong>
                                World’s leading non-asset- based supply chain management companies, we design and implement industry-leading.
                            </strong>
                        </p>
                        <p>Washla customers has a tremendous opportunity to answer the call of logistic needs across the globe. Has 26 affiliated state soybean associations representing 30 soybean-producing state.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GRID SECTION END -->



@endsection
