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

       <div class="container mt-5 mb-5">

<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="contact-title">
            <h3>Ask Your Question</h3>
          
        </div>
        <br/>
        <div id="alertDiv">

        </div>
        <form id="career-form-add" method="post" >
            @csrf
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                        <lable>Your full Name *</lable>
                            <input id="form_name" type="text" name="name" class="form-control custom-form" placeholder="Enter your full name" required="required" data-error="Enter your full name.">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <lable>Your Email *</lable>
                            <input id="form_email" type="email" name="email" class="form-control custom-form" placeholder="Enter your email" required="required" data-error="Enter your email.">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <lable>Your mobile number</lable>
                            <input id="form_phone" type="tel" name="phone" class="form-control custom-form onlyNumber" placeholder="Enter your moblie number">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                        <lable>Attach your resume (Only .pdf files)*</lable>
                            <input id="form_file" type="file" name="file" accept="application/pdf, application/vnd.ms-excel" class="form-control custom-form">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                        <lable>Leave your message ( Maxlength 240 characters )</lable>
                            <textarea id="form_message" name="message" class="form-control message-form custom-form" placeholder="*Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12 btn-send">
                        <p><input type="submit" class="btn btn-washla" value="Send message"></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
   </div>
   <!-- PROJECT GRID END -->
</section>
<!-- CONTENT END -->
@endsection
