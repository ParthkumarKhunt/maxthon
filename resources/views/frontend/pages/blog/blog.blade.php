@extends('frontend.layout.app')
@section('section')


    <!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <!-- BLOG GRID START -->
                <div class="col-lg-9">
                    <div class="row image-hover">
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-1.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>CLEANING</h6>
                                    <h4><a href="blog-single.html">The Temporary Ruling Issued</a></h4>
                                    <p class="author">by Roger Smith on June 25, 2020</p>
                                    <p>Let us simplify your life by saving you time and energy so you can make the most
                                        of everything from those quiet.</p>
                                    <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-2.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>CLEAN</h6>
                                    <h4><a href="blog-single.html">The Best Expands California</a></h4>
                                    <p class="author">by Carmen Diaz on June 22, 2020</p>
                                    <p>We offer house cleaning packages that cover regular maintenance, deep cleaning,
                                        one-time services.</p>
                                        <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-3.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>HOUSE</h6>
                                    <h4><a href="blog-single.html">Our Best Temporary Ruling Issued</a></h4>
                                    <p class="author">by Richard Doe on June 21, 2020</p>
                                    <p>delivering the highest quality cleaning and customer satisfaction that meets and
                                        exceeds your expectations.</p>
                                        <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-4.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>BUILDING</h6>
                                    <h4><a href="blog-single.html">The National Wheat For Cleaning</a></h4>
                                    <p class="author">by Jessica Smith on June 21, 2020</p>
                                    <p>Our goal is to provide you with the best house cleaning services that fit your
                                        schedule, professional staff.</p>
                                        <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-5.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>OFFICE</h6>
                                    <h4><a href="blog-single.html">Felling Cleaning, The Best Felling</a></h4>
                                    <p class="author">by Carlos Rivera on June 20, 2020</p>
                                    <p>Regular maintenance cleaning takes much less time than an initial deep cleaning,
                                        and the rate is lower.</p>
                                        <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-preview">
                                <figure class="bp-thumbnail zoom-in">
                                    <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/blog-thumb-6.jpg') }}" alt=""></a>
                                </figure>
                                <div class="bp-caption">
                                    <h6>CLEANING</h6>
                                    <h4><a href="blog-single.html">Best Year Cleaning Houses</a></h4>
                                    <p class="author">by Anthony Reyes on June 19, 2020</p>
                                    <p>Our clients appreciate the meticulous attention to detail we give to their homes
                                        with our comprehensive.</p>
                                        <a class="btn-washla" href="blog-single.html" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PAGINATION START -->
                    <div class="site-pagination mt-4">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <i class="fas fa-arrow-right"></i>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    <!-- PAGINATION END -->
                </div>
                <!-- BLOG GRID END -->

                <!-- ASIDE BAR START -->
                <div class="col-lg-3 spacing-md">
                    <aside>
                        <div class="aside-block">

                            <h4 class="aside-title">Recent Posts</h4>
                            <ul class="list-unstyled">
                                <li class="media">
                                  <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/post-thumb-1.jpg') }}" class="mr-3" alt="..."></a>
                                  <div class="media-body">
                                    <p>June 18, 2020</p>
                                    <h5 class="mt-0 mb-1"><a href="blog-single.html">Ship Orders Crash as Takes</a></h5>
                                  </div>
                                </li>
                                <li class="media my-3">
                                  <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/post-thumb-2.jpg') }}" class="mr-3" alt="..."></a>
                                  <div class="media-body">
                                    <p>June 17, 2020</p>
                                    <h5 class="mt-0 mb-1"><a href="blog-single.html">Oil Traders Are Scrambling</a></h5>
                                  </div>
                                </li>
                                <li class="media">
                                  <a href="blog-single.html"><img src="{{ asset('public/frontend/assets/images/commons/post-thumb-3.jpg') }}" class="mr-3" alt="..."></a>
                                  <div class="media-body">
                                    <p>June 15, 2020</p>
                                    <h5 class="mt-0 mb-1"><a href="blog-single.html">Weighs on Trade on the Largest</a></h5>
                                  </div>
                                </li>
                              </ul>
                        </div>
                        <div class="aside-block">
                            <div class="headline-banner">
                                <h4>Popular tags</h4>
                            </div>
                            <ul class="tags">
                                <li>
                                    <button class="btn-tags">cleaning</button>
                                    <button class="btn-tags">carpet</button>
                                    <button class="btn-tags">office</button>
                                    <button class="btn-tags">buiding</button>
                                    <button class="btn-tags">services</button>
                                    <button class="btn-tags">mordern</button>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- ASIDE BAR END -->
            </div>
        </div>
    </section>
    <!-- CONTENT END -->


@endsection
