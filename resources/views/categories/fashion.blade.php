@extends('layouts.site')

@section('content')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-shopping-bag bg-pink"></i> Fashion <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Fashion</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">

                {{-- <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Search</h2>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search on the site">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </form>
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Recent Posts</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/upload/blog_square_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="/upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="/upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Advertising</h2>
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="/upload/banner_03.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Instagram Feed</h2>
                        <div class="instagram-wrapper clearfix">
                            <a class="" href="#"><img src="/upload/insta_01.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                            <a href="#"><img src="/upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                        </div><!-- end Instagram wrapper -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Popular Categories</h2>
                        <div class="link-widget">
                            <ul>
                                <li><a href="#">Fahsion <span>(21)</span></a></li>
                                <li><a href="#">Lifestyle <span>(15)</span></a></li>
                                <li><a href="#">Art & Design <span>(31)</span></a></li>
                                <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                <li><a href="#">Clothing <span>(66)</span></a></li>
                                <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                <li><a href="#">Food & Drink <span>(87)</span></a></li>
                            </ul>
                        </div><!-- end link-widget -->
                    </div><!-- end widget -->
                </div><!-- end sidebar --> --}}
                @include('sections.sidebar')
            </div><!-- end col -->

            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="/admin/images/advertisings/{{$advert->image_728_90}}" alt="" width="728" height="90">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis">

                    <div class="portfolio row">
                        @foreach ($posts as $post )
                            <div class="pitem item-w1 item-h1">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="/posts/{{$post->slug}}" title="">
                                            <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">

                                        @foreach ($post->categories as $category)
                                            <span @if($category->id==1) class="color-aqua" @elseif ($category->id==3) class="color-red" @elseif ($category->id==4) class="color-yellow" @elseif ($category->id==6) class="color-grey" @else class="color-green" @endif>
                                                <a href="{{strtolower($category->name)}}" title="">{{$category->name}}</a>
                                            </span>
                                        @endforeach
                                        <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                        <small><a href="blog-author.html" title="">By: Jessica</a></small>
                                        <small><a href="blog-category-01.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        @endforeach
                    </div><!-- end portfolio -->
                </div><!-- end page-wrapper -->
                <hr class="invis">
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection



