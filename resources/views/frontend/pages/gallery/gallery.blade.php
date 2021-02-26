@extends('frontend.layout.app')
@section('section')

 <!-- CONTENT START -->
 <section>
    @if(count($gallary) <= 0 )
    <div class="container mt-5 mb-5" style="">
        <div class="grid">
            <h3 class="has-error"  >Oops !!!! No gallery photo available right now</h3>
        </div>
    </div>
    @else
    <!-- PROJECT GRID START -->
    <div class="container mt-5 mb-5">
        <div class="grid">
            <div class="filter-container">
                <ul class="filter">
                 <li class=".house active" data-filter="*">All</li>
                @foreach($submenu as $key => $value)
                    <li class="" data-filter="{{  ".".str_replace(' ', '-',$value['name'])  }}">  {{ $value->name }} </a></li>
                 @endforeach
                </ul>
            </div>


            <div class="grid" id="kehl-grid">
                <div class="grid-sizer"></div>

                @foreach($gallary as $key => $value)
                    <div class="grid-box {{  str_replace(' ', '-',$value['cat_name'])  }}">
                        <a class="image-popup-vertical-fit" href="{{asset('public/upload/galleryimage/'.$value->image)}}">
                            <div class="image-mask"></div>
                            <img  src=" {{asset('public/upload/galleryimage/'.$value->image) }}" alt="{{  str_replace(' ', '-',$value['cat_name'])  }}" />
                            <h3>{{ $value->name }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- PROJECT GRID END -->
    <br/>
    <br/>
    <br/>

    @endif

</section>
<!-- CONTENT END -->
{{--
 <!-- CONTENT START -->
 <section>
    <!-- PROJECT GRID START -->
   <div class="container mt-5 mb-5">
       <div class="filter-container">
           <ul class="filter">
            <li class=".house active" data-filter="*">All</li>
           @foreach($submenu as $key => $value)
               <li class="" data-filter="{{  ".".str_replace(' ', '-',$value['name'])  }}">  {{ $value->name }} </a></li>
            @endforeach
           </ul>
       </div>


       <div class="grid" id="kehl-grid">
           <div class="grid-sizer"></div>
            @foreach($gallary as $key => $value)
            <div class="grid-box {{  str_replace(' ', '-',$value['cat_name'])  }}">
                <a class="image-popup-vertical-fit" href="{{asset('public/upload/galleryimage/'.$value->image)}}">
                    <div class="image-mask"></div>
                    <img style="height: 255px" src=" {{asset('public/upload/galleryimage/'.$value->image) }}" alt="" />
                    <h3>{{ $value->name }}</h3>
                </a>
            </div>
            @endforeach


       </div>
   </div>
   <!-- PROJECT GRID END -->
</section>
<!-- CONTENT END --> --}}
@endsection
