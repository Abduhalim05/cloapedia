@extends('layouts.site')

@section('content')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-user-md bg-grey"></i> Health <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Health</li>
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
                        @foreach ($posts as $post )
                            <div class="pitem item-w1 item-h1">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="/posts/{{$post->slug}}" title="">
                                            <img src="/admin/images/posts/{{$post->image}}" alt="" width="800" height="460">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        @foreach ($post->categories as $category)
                                            <span @if($category->id==1) class="color-aqua" @elseif ($category->id==3) class="color-red" @elseif ($category->id==4) class="color-yellow" @elseif ($category->id==6) class="color-grey" @else class="color-green" @endif>

                                                <a href="/{{strtolower($category->name)}}" title="">{{$category->name}}</a>
                                            </span>
                                         @endforeach

                                        <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                        <small><a href="blog-author.html" title="">By: Jessica</a></small>
                                        <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        @endforeach

                    </div><!-- end portfolio -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                {{-- <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row --> --}}
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection


