@extends('frontend.layout.app')
@section('section')
<!-- CONTENT START -->
<section>
    <!-- CONTACT BOX START -->
    <div class="bg-wrapper contact-wrapper mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cw-box">
                        <figure class="cw-icon">
                            <img src="images/icons/placeholder.png" alt="">
                        </figure>
                        <p>8273 NW 56th ST Miami, Florida,</p>
                        <p>33195 United States</p>
                    </div>
                </div>
                <div class="col-lg-4 spacing-m-center">
                    <div class="cw-box">
                        <figure class="cw-icon">
                            <img src="images/icons/telephone.png" alt="">
                        </figure>
                        <p>718-825-3320</p>
                        <p>212-632-4120</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cw-box">
                        <figure class="cw-icon">
                            <img src="images/icons/email.png" alt="">
                        </figure>
                        <p>info@washla.com</p>
                        <p>sales@washla.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT BOX END -->

    <!-- CONTACT FORM START -->

    <div class="container mt-5 mb-5">

        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact-title">
                    <h3>Get in Touch With Us</h3>
                    <p>World’s leading non-asset- based supply chain management companies, we design and implement industry-leading. We specialise in intelligent & effective search and believes business.</p>
                </div>
                <br/>
                <form id="contact-form" method="post" action="http://quickdevs.com/templates/washla/contact.php">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control custom-form" placeholder="*Name" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control custom-form" placeholder="*Email address" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone" class="form-control custom-form" placeholder="*Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control message-form custom-form" placeholder="*Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12 btn-send">
                                <p><input type="submit" class="btn btn-washla" value="Send message"></p>
                            </div>
                            <div class="col-sm-12">
                                <p class="required">
                                    * These fields are required.
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTACT FORM END -->

    <!-- MAP START -->
    <div class="bottom-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.3397474091507!2d72.8072058149358!3d21.218372085895975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f1ea763694b%3A0x88876be9064466f8!2sMaxthon%20Technologies!5e0!3m2!1sen!2sin!4v1610426713117!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- MAP END -->
</section>
<!-- CONTENT END -->
@endsection
