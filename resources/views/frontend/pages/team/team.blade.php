@extends('frontend.layout.app')
@section('section')

 <!-- CONTENT START -->
 <section>
    <!-- TEAM START -->
    <div class="container mt-5 mb-5">
        <div class="row tc-page">
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
            <div class="col-md-6 col-lg-4">
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
    </div>
    <!-- TEAM END -->

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
