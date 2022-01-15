<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Recent Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            @foreach ($recents as $post )
                                <a href="/posts/{{$post->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 {{$loop->last ? 'last-item' : '' }} justify-content-between">
                                        <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">{{$post->title}}</h5>
                                        <small>{{$post->created_at->format('d M, Y')}}</small>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Posts</h2>
                    <div class="blog-list-widget">
                        <div class="list-group">
                            @foreach($PPs as $post )
                                <a href="/posts/{{$post->slug}}" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 {{$loop->last ? 'last-item' : '' }} justify-content-between">
                                        <img src="/admin/images/posts/{{$post->image}}" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">{{$post->title}}</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>
                            @endforeach


                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <h2 class="widget-title">Popular Categories</h2>
                    <div class="link-widget">
                        <ul>
                            @foreach ($PCs as $cat )

                            <li><a href="/category/{{$cat->slug}}">{{ $cat->name }} <span> {{$cat->posts_count }} </span></a></li>
                            @endforeach

                            {{-- <li><a href="#">Lifestyle <span>(15)</span></a></li>
                            <li><a href="#">Art & Design <span>(31)</span></a></li>
                            <li><a href="#">Health Beauty <span>(22)</span></a></li>
                            <li><a href="#">Clothing <span>(66)</span></a></li>
                            <li><a href="#">Entertaintment <span>(11)</span></a></li>
                            <li><a href="#">Food & Drink <span>(87)</span></a></li> --}}
                        </ul>
                    </div><!-- end link-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis1">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="widget">
                    <div class="footer-text text-center">
                        <a href="/"><img src="/images/flogo.png" alt="" class="img-fluid"></a>
                        <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
                        <div class="social">
                            <a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.google.com/" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.pinterest.com/" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div>

                        <hr class="invis">

                        {{-- <div class="newsletter-widget text-center">
                            <form class="form-inline">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <button type="submit" class="btn btn-primary">Subscribe <i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div><!-- end newsletter --> --}}
                    </div><!-- end footer-text -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <div class="copyright">&copy; Cloapedia. Design: <a href="http://html.design">HTML Design</a>.</div>
            </div>
        </div>
    </div><!-- end container -->
</footer><!-- end footer -->
