<!--begin::Aside-->
@php
$currentRoute = Route::current()->getName();
@endphp

@if($currentRoute == "home")
    <!--SLIDER START-->
<div class="home-slider">
    <!-- partial:index.partial.html -->
    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image:url({{ asset('public/frontend/assets/images/commons/slider4.jpg') }});">
            <div class="overlay"></div>
            <div class="container slider-caption">
                <h5 class="subtitle">Affordable prices to anyone</h5>
                <h2 class="title"> cleaning service  <br>you can trust</h2>
                <div class="slider-btn">
                    <a href="contact.html" class="btn-washla btn-outline-blue btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url({{ asset('public/frontend/assets/images/commons/slider6.jpg') }});">
            <div class="overlay"></div>
            <div class="container slider-caption">
                <h5 class="subtitle">We clean. A lot.</h5>
                <h2 class="title">Because quality <br /> is necessary</h2>
                <div class="slider-btn">
                    <a href="contact.html" class="btn-washla btn-outline-blue btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="carousel-cell" style="background-image:url({{ asset('public/frontend/assets/images/commons/slider7.jpg') }});">
            <div class="overlay"></div>
            <div class="container slider-caption">
                <h5 class="subtitle">Renew your look</h5>
                <h2 class="title">A tradition of <br />quality cleaning</h2>
                <div class="slider-btn">
                    <a href="contact.html" class="btn-washla btn-outline-blue btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
</div>
<!--SLIDER END-->

@else
    <!--SLIDER START-->
    <div class="pages-hero">
        <div class="container">
            <div class="pages-title">
                <h1>{{$header['title']}}</h1>
            </div>
        </div>
    </div>
    <!--SLIDER END-->
@endif

