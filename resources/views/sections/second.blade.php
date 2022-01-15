
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua"><a href="/category/{{ $categories[0]['slug'] }}" title="">{{ $categories[0]['name'] }}</a></h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @foreach ($categories[0]['posts'] as $item)
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="/posts/{{$item->slug}}" title="">
                                    <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="/posts/{{$item->slug}}" title="">{{ $item->title }}</a></h4>
                                <p>{{$item->description}}</p>
                                <small><a href="/category/lifestyle" title="">Lifestyle</a></small>
                                <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}
                                </a></small>
                                <small><a href="/posts/{{$item->slug}}" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                        <hr class="invis">
                        @break($loop->iteration==2)
                        @endforeach

                        <!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-pink"><a href="/category/{{ $categories[5]['slug'] }}" title="">{{ $categories[5]['name'] }}</a></h3>
                </div><!-- end title -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        @foreach ( $categories[5]['posts'] as $item )
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="/posts/{{$item->slug}}" title="">
                                        <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="/posts/{{$item->slug}}" title=""> {{ $item->title }} </a></h4>
                                    <small><a href="/category/{{ $categories[5]['slug'] }}" title="">{{ $categories[5]['name'] }}</a></small>
                                    <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                                @break($loop->iteration==3)

                        @endforeach

                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        @foreach ( $categories[5]['posts'] as $item )
                            @if ($loop->iteration == 1 || $loop->iteration == 2 || $loop->iteration == 3)
                                @continue
                            @else
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="/posts/{{$item->slug}}" title="">
                                        <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="/posts/{{$item->slug}}" title=""> {{ $item->title }} </a></h4>
                                    <small><a href="/category/{{ $categories[5]['slug'] }}" title="">{{ $categories[5]['name'] }}</a></small>
                                    <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            @endif

                            @break($loop->iteration==6)
                        @endforeach
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="/admin/images/advertisings/{{$adverPhoto->image_728_90}}" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row -->
        <hr class="invis1">

        <div class="row">
            <div class="col-lg-9">
                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-green"><a href="/category/{{ $categories[1]['slug'] }}" title="">{{ $categories[1]['name'] }}</a></h3>
                    </div><!-- end title -->
                    @foreach ($categories[1]['posts'] as $item )

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="/posts/{{$item->slug}}" title="">
                                    <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="/posts/{{$item->slug}}" title="">{{$item->title}}</a></h4>
                            <p>{{$item->description}}</p>
                            <small><a href="/category/travel" title="">Travel</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @break($loop->iteration==4)
                    @endforeach
                </div><!-- end blog-list -->

                <hr class="invis">

                <div class="blog-list clearfix">
                    <div class="section-title">
                        <h3 class="color-red"><a href="/category/{{ $categories[3]['slug'] }}" title="">{{ $categories[3]['name'] }}</a></h3>
                    </div><!-- end title -->

                    @foreach ($categories[3]['posts'] as $item )

                    <div class="blog-box row">
                        <div class="col-md-4">
                            <div class="post-media">
                                <a href="/posts/{{$item->slug}}" title="">
                                    <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                </a>
                            </div><!-- end media -->
                        </div><!-- end col -->

                        <div class="blog-meta big-meta col-md-8">
                            <h4><a href="/posts/{{$item->slug}}" title="">{{$item->title}}</a></h4>
                            <p>{{$item->description}}</p>
                            <small><a href="/category/travel" title="">Travel</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">by Boby</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @break($loop->iteration==4)
                    @endforeach

                </div><!-- end blog-list -->
            </div><!-- end col -->

            <div class="col-lg-3">
                <div class="section-title">
                    <h3 class="color-yellow"><a href="/category/{{ $categories[6]['slug'] }}" title="">{{ $categories[6]['name'] }}</a></h3>
                </div><!-- end title -->
                @foreach ($categories[6]['posts'] as $item)
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="/posts/{{$item->slug}}" title="">
                                <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="/posts/{{$item->slug}}" title="">{{$item->title}}</a></h4>
                            <small><a href="/category/architecture" title="">Architecture</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @break($loop->iteration==3)
                @endforeach

                <div class="section-title">
                    <h3 class="color-grey"><a href="/category/{{ $categories[2]['slug'] }}" title="">{{ $categories[2]['name'] }}</a></h3>
                </div><!-- end title -->

                @foreach ($categories[2]['posts'] as $item)
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="/posts/{{$item->slug}}" title="">
                                <img src="/admin/images/posts/{{$item->image}}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="/posts/{{$item->slug}}" title="">{{$item->title}}</a></h4>
                            <small><a href="/category/architecture" title="">Architecture</a></small>
                            <small><a href="/posts/{{$item->slug}}" title="">{{$item->created_at->format('d M, Y')}}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">
                    @break($loop->iteration==3)
                @endforeach
                {{-- <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_07.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">Opened the doors of the Istanbul spa center</a></h4>
                        <small><a href="blog-category-01.html" title="">Spa</a></small>
                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_08.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">2017 trends in health tourism</a></h4>
                        <small><a href="blog-category-01.html" title="">Health</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">

                <div class="blog-box">
                    <div class="post-media">
                        <a href="single.html" title="">
                            <img src="upload/blog_09.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="single.html" title="">Experience the effects of miraculous stones</a></h4>
                        <small><a href="blog-category-01.html" title="">Beauty</a></small>
                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box --> --}}
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="banner-spot clearfix">
                    <div class="banner-img">
                        <img src="/admin/images/advertisings/{{$adverPhoto->image_728_90}}" alt="" class="img-fluid">
                    </div><!-- end banner-img -->
                </div><!-- end banner -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
