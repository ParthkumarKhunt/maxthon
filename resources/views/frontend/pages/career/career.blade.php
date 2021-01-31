@extends('frontend.layout.app')
@section('section')

 <!-- CONTENT START -->
 <section>
    <!-- CAREER START -->
    <div class="container mt-5 mb-5">
       <div class="filter-container">
           <ul class="filter">
            <li class=".house" data-filter="*">All</li>
           @foreach($menu as $key => $value)
               <li class="" data-filter="{{  ".".str_replace(' ', '-',$value['name'])  }}">  {{ $value->name }} </a></li>
            @endforeach
           </ul>
        </div>
     

   </div>
    <!-- CAREER END -->
</section>
<!-- CONTENT END -->

@endsection
