 <!-- FOOTER START -->
 <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-footer">
                <figure class="footer-logo">
                    <img src="{{ asset('public/frontend/assets/images/logos/logo.png') }}" alt="">
                </figure>
                <p>Washla customers has a tremendous opportunity to answer the call of logistic.</p>
            </div>
            <div class="col-lg-3 col-footer">
                <h5>Get In Touch</h5>
                <p>8273 NW 56th ST Miami, Florida,
                    33195 United States</p>
                <ul class="contact">
                    <li><a href="mailto:info@washla.com">info@washla.com</a></li>
                    <li><a href="tel:052-5401-3322"> 052 5401 3322</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-footer">
                <h5>Quick Links</h5>
                <ul class="quick-links left-layer">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('our-team') }}">Team</a></li>
                </ul>
                <ul class="quick-links right-layer">
                    <li><a href="{{ route('faqs') }}">FAQ</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('blog') }}">Blogs</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-footer">
                <h5>Our Newsletter</h5>
                <p>Subscribe to our newsletter to receive the latest news about our services.</p>
                <div class="newsletter mt-2">
                    <form action="#" method="post" name="sign-up">
                        <input type="email" class="input" id="email" name="email" placeholder="Your email address"
                            required>
                        <input type="submit" class="button" id="submit" value="SIGN UP">
                    </form>
                </div>
            </div>
        </div>
        <hr class="footer">
        <div class="bottom-footer">
            <div class="row">
                <div class="col-lg-6">
                    <p class="right">© 2020 Washla all rights reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
