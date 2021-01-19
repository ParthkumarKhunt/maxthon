@extends('frontend.layout.app')
@section('section')
 <!-- CONTENT START -->
 <section>
    <!-- PROJECT GRID START -->
   <div class="container mt-5 mb-5">
       <div class="filter-container">
           <ul class="filter">
           @foreach($submenu as $key => $value)
               <li class=".house" data-filter="*">{{ $value->name }}</li>
            @endforeach
               <!-- <li class="active" data-filter="*">All</li>
               <li data-filter=".house">House</li>
               <li data-filter=".apartment">Apartment</li>
               <li data-filter=".office">Office</li> -->
           </ul>
       </div>
       <div class="grid" id="kehl-grid">
           <div class="grid-sizer"></div>
           <div class="grid-box house">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-1.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-1.jpg') }}" alt="" />
                   <h3>House Cleaning</h3>
               </a>
           </div>
           <div class="grid-box house apartment">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-2.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-2.jpg') }}" alt="" />
                   <h3>Apartment Cleaning</h3>
               </a>
           </div>
           <div class="grid-box apartment">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-3.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-3.jpg') }}" alt="" />
                   <h3>Apartment Cleaning</h3>
               </a>
           </div>
           <div class="grid-box office">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-4.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-4.jpg') }}" alt="" />
                   <h3>Office Cleaning</h3>
               </a>
           </div>
           <div class="grid-box house">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-5.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-5.jpg') }}" alt="" />
                   <h3>House Cleaning</h3>
               </a>
           </div>
           <div class="grid-box house office">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-6.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-6.jpg') }}" alt="" />
                   <h3>Office Cleaning</h3>
               </a>
           </div>
           <div class="grid-box office">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-7.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-7.jpg') }}" alt="" />
                   <h3>Office Cleaning</h3>
               </a>
           </div>
           <div class="grid-box house">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-8.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-8.jpg') }}" alt="" />
                   <h3>House Cleaning</h3>
               </a>
           </div>
           <div class="grid-box house office">
               <a class="image-popup-vertical-fit" href="{{ asset('public/frontend/assets/images/commons/gallery-9.jpg') }}">
                   <div class="image-mask"></div>
                   <img src="{{ asset('public/frontend/assets/images/commons/gallery-9.jpg') }}" alt="" />
                   <h3>Office Cleaning</h3>
               </a>
           </div>
       </div>
   </div>
   <!-- PROJECT GRID END -->
</section>
<!-- CONTENT END -->
@endsection
