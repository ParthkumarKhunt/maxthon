<!-- TOP HEADER START -->
<div class="top-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="top-contact text-left">
                    <li class="phone"><span class="tel-no"><a href="tel:123-456-7890"> +123-456-7890</a></span>
                    </li>
                    <li class="email"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right">
                <div class="top-social">
                    <ul class="social-list">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="m-0"><a class="btn quote-btn" href="contact.html" role="button">GET A
                                QUOTE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TOP HEADER END -->

<!-- NAV START -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('public/frontend/assets/images/logos/logo.png') }}" alt=""></a>

        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="menu-icon-bar"></span>
            <span class="menu-icon-bar"></span>
            <span class="menu-icon-bar"></span>
        </button>

        <div id="main-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li><a href="{{ route('home') }}" class="nav-item nav-link last-link-item">Home</a></li>
                <li><a href="{{ route('services') }}" class="nav-item nav-link last-link-item">Services</a></li>
                <li><a href="{{ route('gallery') }}" class="nav-item nav-link last-link-item">Gallery</a></li>
                <li><a href="{{ route('blog') }}" class="nav-item nav-link last-link-item">Blog</a></li>
                <li><a href="{{ route('about-us') }}" class="nav-item nav-link last-link-item">About us</a></li>
                <li><a href="{{ route('career') }}" class="nav-item nav-link last-link-item">Career</a></li>
                <li><a href="{{ route('contact-us') }}" class="nav-item nav-link last-link-item">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAV END -->
