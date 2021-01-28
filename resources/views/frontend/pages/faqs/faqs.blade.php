@extends('frontend.layout.app')
@section('section')

 <!-- CONTENT START -->
 <section>
    <!-- FAQ START -->
    <div class="container mt-5 mb-5">
        <div class="layer-title">
            <h2>Frequently Asked Questions</h2>
            <p class="strong">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, <br/>by injected humour, or randomised words which don't look even slightly believable.</p>
        </div>
        <ul class="accordion">                             
        @php 
        $i=0;
        @endphp
        @foreach($faqs as $value)  
        @php 
        $i++;
        @endphp
    
            <li>
                <a> {{ $i }}) {{ $value->question}}</a>
                <p>{!! $value->answer !!}</p>
            </li>
            @endforeach   
        </ul> <!-- / accordion -->
    </div>
    <!-- FAQ END -->

    <!-- FAQ BOX START -->
    <div class="container mt-5 mb-5">
        <div class="section-heading">
            <div class="row">
                <div class="col-10 col-md-6 mx-auto text-center">
                    <h5 class="subtitle">GET IN</h5>
                    <h2>Touch With Us</h2>
                    <p>Washla is a global community of practice that facilitates dialogue, information exchange
                        and use of information.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="faq-box">
                    <div class="fb-circle">
                        <div class="fb-icon"><img src="{{ asset('public/frontend/assets/images/icons/phone-contact.png') }}" alt=""></div>
                    </div>
                    <h5>Contact Us</h5>
                    <p><a href="tel:052-4263-1496"> 052 4263 1496</a></p>
                    <p><a href="tel:052-5401-3322"> 052 5401 3322</a></p>
                    <p class="link"><a href="tel:052-4263-1496"> Call Us</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-box">
                    <div class="fb-circle">
                        <div class="fb-icon"><img src="{{ asset('public/frontend/assets/images/icons/life-saver.png') }}" alt=""></div>
                    </div>
                    <h5>Need Help?</h5>
                    <p><a href="mailto:info@washla.com"> info@washla.com</a></p>
                    <p><a href="mailto:info@washla.com"> suport@washla.com</a></p>
                    <p class="link"><a href="mailto:info@washla.com">Email Us</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-box">
                    <div class="fb-circle">
                        <div class="fb-icon"><img src="{{ asset('public/frontend/assets/images/icons/clock.png') }}" alt=""></div>
                    </div>
                    <h5>Working Hours</h5>
                    <p>Monday - Friday 8:30 to 18:00</p>
                    <p>Saturday - 9:00 to 14:00</p>
                    <p class="link"><a href="#"> Visit Our Office</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ BOX END -->

    <!-- MAP START -->
    <div class="bottom-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d167616.99483399244!2d-74.08279002518668!3d40.67646407501496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a560db693e3%3A0xb05e8b0bdf854b54!2sGowanus%2C+Brooklyn%2C+Nueva+York%2C+EE.+UU.!5e0!3m2!1ses-419!2sdo!4v1560863423970!5m2!1ses-419!2sdo" class="map-iframe-alt"></iframe>
    </div>
    <!-- MAP END -->
</section>
<!-- CONTENT END -->

@endsection
