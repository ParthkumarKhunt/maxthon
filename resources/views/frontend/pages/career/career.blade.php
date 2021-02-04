@extends('frontend.layout.app')
@section('section')

  <!-- CONTENT START -->
  <section>
    <!-- PROJECT GRID START -->
    <div class="container mt-5 mb-5">
       <div class="filter-container">
           <ul class="filter">
               <li class="active" data-filter="*">All</li>
                @foreach($menu as $key => $value)
                    <li class="" data-filter="{{  ".".str_replace(' ', '-',$value['name'])  }}">  {{ $value->name }} </a></li>
                @endforeach
           </ul>
       </div>

       <div class="grid grid-two-col" id="kehl-grid" style="width: 100% !important">
           <div class="grid-sizer"></div>
            @foreach($carrer as $key => $value)
                <div class="grid-box {{  str_replace(' ', '-',$value['dept_name'])  }}" style="width: 100% !important;text-align: left;margin-bottom: 20px">

                   <h4 style="color: #01B3E4">{{ $value['headline'] }}</h4>
                   <div class="text">{{ $value['details']  }}</div>
                   <div class="text">Experience : {{ $value['experience'] }}</div>
                   <div class="text"><strong><u>Skills</u></strong></div>
                   @php
                   $skillsArray = explode(",",$value['skills_details']);
                   @endphp
                   <div class="" style="padding-left:  25px ;">

                        @foreach($skillsArray as $key_skill =>  $val_skill)
                        <div class="text" style="padding: 5px"> <i class="fa fa-arrow-right" aria-hidden="true"></i> {{ $val_skill }}</div>
                        @endforeach
                    </div>
                </div>
            @endforeach
       </div>
   </div>
   <!-- PROJECT GRID END -->
</section>
<!-- CONTENT END -->
@endsection
