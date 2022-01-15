<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            @foreach ($posts as $post )



            <div class="left-side">
                <div  class="masonry-box post-media" >
                        <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                @foreach ($post->categories as $category)
                                    <span @if($category->id==1) class="bg-aqua" @elseif ($category->id==3) class="bg-red" @elseif ($category->id==4) class="bg-yellow" @elseif ($category->id==6) class="bg-grey" @else class="bg-green" @endif>

                                        <a href="/category/{{$category->slug}}" title="">{{$category->name}}</a>
                                    </span>
                                @endforeach
                                <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>

                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->
            @break($loop->first)

            @endforeach

            <div class="center-side">
            @foreach ($posts as $post )

            @if(!$loop->first)

                <div class="masonry-box {{ $loop->iteration!=2 ? 'small-box' : '' }} post-media">
                        <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                @foreach ($post->categories as $category)
                                    <span @if($category->id==1) class="bg-aqua" @elseif ($category->id==3) class="bg-red" @elseif ($category->id==4) class="bg-yellow" @elseif ($category->id==6) class="bg-grey" @else class="bg-green" @endif>

                                        <a href="/category/{{$category->slug}}" title="">{{$category->name}}</a>
                                    </span>
                                @endforeach
                                <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                @if($loop->iteration==1 || $loop->iteration==2 || $loop->iteration==5)
                                <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>

                                @endif
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                @break($loop->iteration==4)
            @endif
            @endforeach
            </div><!-- end center-side -->

            @foreach ($posts as $post )
            @if($loop->last)
            <div class="right-side">
                <div  class="masonry-box post-media" >
                        <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid">
                        <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                @foreach ($post->categories as $category)
                                <span @if($category->id==1) class="bg-aqua" @elseif ($category->id==3) class="bg-red" @elseif ($category->id==4) class="bg-yellow" @elseif ($category->id==6) class="bg-grey" @else class="bg-green" @endif>

                                    <a href="/category/{{$category->slug}}" title="">{{$category->name}}</a>
                                </span>
                            @endforeach
                                <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
                                <small><a href="single.html" title="">{{$post->created_at->format('d M, Y')}}</a></small>

                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->
            @endif

            @endforeach

        </div><!-- end masonry -->
    </div>
</section>
