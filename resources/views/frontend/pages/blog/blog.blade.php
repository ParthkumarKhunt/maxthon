@extends('frontend.layout.app')
@section('section')


    <!-- CONTENT START -->
    <section>
        <div class="container mt-5 mb-5">
            <!-- BLOG GRID START -->
            @if(!$blog->isEmpty())
            <div class="row blog-grid">
            @foreach($blog as $key => $value)
                <div class="col-md-6 col-lg-4">
                    <div class="news-preview">
                        <figure class="np-thumbnail">
                            <a href="blog-single.html"><img src="{{ asset('public/upload/blog/'.$value->image) }}" alt=""></a>
                            <!-- <div class="post-date">
                                <h3>12</h3>
                                <p>Nov</p>
                            </div> -->
                        </figure>
                        <div class="np-caption box-shadow">
                            <p class="categorie">{{ $value->name }}</p>
                            <h4><a href="blog-single.html">{{ $value->title }}</a></h4>
                            <p>{{ $value->description }}</p>
                            <div class="media">
                            
                                <img src="{{ asset('public/upload/blog/'.$value->profile_image) }}" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="author">{{ $value->firstname }} {{ $value->lastname }}</h5>
                                    <p class="profession">{{ $value->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            @endif
            <!-- BLOG GRID END -->

            <!-- PAGINATION START -->
            <!-- <div class="site-pagination mt-4">
                <nav aria-label="Page navigation example">
                  <ul class= "pagination">
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
            </div> -->
            <!-- PAGINATION START -->
        </div>
    </section>
    <!-- CONTENT END -->


@endsection
