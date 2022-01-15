@extends('layouts.site')


@section('content')
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    {{-- <li class="breadcrumb-item"><a href="#">Blog</a></li> --}}
                                    <li class="breadcrumb-item active">{{$post->title}}</li>

                                </ol>

                                @foreach ($post->categories as $category)
                                    <span @if($category->id==1) class="color-aqua" @elseif ($category->id==3) class="color-red" @elseif ($category->id==4) class="color-yellow" @elseif ($category->id==6) class="color-grey" @else class="color-green" @endif>

                                        <a href="//category/{{$category->slug}}" title="">{{$category->name}}</a>
                                    </span>
                                @endforeach

                                <h3>{{$post->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                    <small><i class="fa fa-eye"></i> {{$post->view}}</small>
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="https://telegram.me/share/url?url=http://jorenvanhocht.be&text=abduhalimsdjalkdjsaklj" class="tw-button btn btn-primary"><i class="fa fa-telegram"></i><span class="down-mobile">Share on Telegram</span></a></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?text=share-words&amp;url=http://jorenvanhocht.be" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="/admin/images/posts/{{$post->image}}" alt="no" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">
                                <div class="pp">

                                    <p>{!!$post->body!!}</p>

                                </div><!-- end pp -->


                            </div><!-- end content -->

                            <div class="blog-title-area">
                                {{-- <div class="tag-cloud-single">
                                    <span>Tags</span>
                                    @foreach ($post->tags as $tag )
                                        <small><a href="#" title="">{{$tag->name}}</a></small>
                                    @endforeach

                                </div><!-- end meta --> --}}
                     <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="https://telegram.me/share/url?url=http://jorenvanhocht.be&text=abduhalimsdjalkdjsaklj" class="tw-button btn btn-primary"><i class="fa fa-telegram"></i><span class="down-mobile">Share on Telegram</span></a></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="https://twitter.com/intent/tweet?text=share-words&amp;url=http://jorenvanhocht.be" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="/admin/images/advertisings/{{$advert->image_728_90}}" height="90" width="728" alt="" >
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                            <div class="custombox prevnextpost clearfix">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                @if (isset($pre_post))
                                                <a href="/posts/{{$pre_post->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between text-right">
                                                        <img src="/admin/images/posts/{{$pre_post->image}}" alt="" class="img-fluid float-right">
                                                        <h5 class="mb-1">{{$pre_post->title}}</h5>
                                                        <small>Prev Post</small>
                                                    </div>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                @if (isset($next_post))
                                                <a href="/posts/{{$next_post->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="/admin/images/posts/{{$next_post->image}}" alt="" class="img-fluid float-left">
                                                        <h5 class="mb-1">{{$next_post->title}}</h5>
                                                        <small>Next Post</small>
                                                    </div>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">



                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                @foreach ($relateds as $like )

                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="/posts/{{$like->slug}}" title="">
                                                    <img src="/admin/images/posts/{{$like->image}}" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="/posts/{{$like->slug}}" title="">{{$like->title}}</a></h4>
                                                @foreach ($like->categories as $category)
                                                    <a href="/category/{{$category->slug}}" title="">{{$category->name}}</a>
                                                @endforeach
                                                <small><a href="blog-category-01.html" title="">{{$like->created_at->format('d M, Y')}}</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->


                                @endforeach

                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div>
                                @comments(['model' => $post])
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        @include('sections.sidebar')
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection

