<!--begin::Aside-->
@php
$currentRoute = Route::current()->getName();
$getBannerList = getBannerList();
// print_r($getBannerList);
// die();
@endphp

@if($currentRoute == "home")
    <!--SLIDER START-->
<div class="home-slider">
    <!-- partial:index.partial.html -->
    <div class="hero-slider" data-carousel>
    @foreach($homeSlider as $key => $value)
        <div class="carousel-cell" style="background-image:url({{ asset('public/upload/homesilder/'.$value->image) }});">
            <div class="overlay"></div>
            <div class="container slider-caption">
                <h5 class="subtitle">{{$value->title}}</h5>
                <h2 class="title">{{ $value->description}} </h2>

            </div>
        </div>
        @endforeach
    </div>
    <!-- partial -->
</div>
<!--SLIDER END-->
@else

    <!--SLIDER START-->
    <div class="pages-hero" style="background-image:url({{ asset('public/frontend/assets/images/commons/header.png') }});">
        <div class="container">
            <div class="pages-title">
                <h1>{{$header['title']}}</h1>
            </div>
        </div>
    </div>
    <!--SLIDER END-->
@endif

