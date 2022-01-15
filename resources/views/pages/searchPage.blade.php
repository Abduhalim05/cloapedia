@extends('layouts.site')

@section('content')
        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-search bg-grey"></i> Search <small class="hidden-xs-down hidden-sm-down">Here some topics for your search!</small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Search-results</li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="portfolio row">
                            @if(count($posts)>0)

                                 @foreach ($posts as $post )

                                <div class="pitem item-w1 item-h1">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="/posts/{{$post->slug}}" title="">
                                                <img src="/admin/images/posts/{{$post->image}}" alt="" height="460px" width="800px" >
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                             @foreach ($post->categories as $category)
                                                <span @if($category->id==1) class="color-aqua" @elseif ($category->id==3) class="color-red" @elseif ($category->id==4) class="color-yellow" @elseif ($category->id==6) class="color-grey" @else class="color-green" @endif>

                                                    <a href="/category/{{$category->name}}" title="">{{$category->name}}</a>
                                                </span>
                                             @endforeach
                                            <h4><a href="/posts/{{$post->slug}}" title=""><div class="context">{{$post->title}}</div></a></h4>
                                            <small><a href="blog-author.html" title="">By: Jessica</a></small>
                                            <small><a href="blog-category-01.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                                @endforeach
                            @else

                                <h4> Your search - <big> {{$key}} </big>- did not match any documents. </h4>

                            @endif
                            </div><!-- end portfolio -->
                        </div><!-- end page-wrapper -->
                        <hr class="invis">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@endsection
