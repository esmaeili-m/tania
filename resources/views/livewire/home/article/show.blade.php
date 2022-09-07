@section('title',$article['title'])
<div>
    <section class="page-title" style="background-image:url(<?php echo asset('home/images/background/bg-page-titlle-1.jpg') ?>);">
        <div class="auto-container text-center">

            <h3 class="spaced-text">OUR LATEST NEWS AND ARTICLES</h3>
            <h2 class="page-name">{{$article['title']}}</h2>

            <!--Bread Crumb-->
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Blog</li>
            </ul>

            <a href="/products" class="vertical-link left"><span>OUR&ensp;PRODUCTS</span></a>
            <a href="/contact" class="vertical-link right"><span>&ensp;Contact&ensp;Us</span></a>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                    <div class="blog-posts-outer default-blog-section no-padd-bottom no-padd-top style-two blog-details">

                        <!--Default Blog Post / Blog Details-->
                        <article class="default-post-style blog-post blog-details style-one left-aligned">

                            {!! $article['description'] !!}

                        </article>

                        <!--Author Details-->
{{--                        <div class="author-details">--}}
{{--                            <div class="inner-content">--}}
{{--                                <figure class="author-thumb"><img class="img-circle" src="images/resource/author-thumb.jpg" alt=""></figure>--}}
{{--                                <div class="text">--}}
{{--                                    <p>The adjectives you hear describing CK Euphoria most often include  exotic, romantic, sexy, seductive, and sensual. The woody, oriental scent has notes of pomegranate lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>--}}
{{--                                    <strong>JOHN DOE</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!--Comments Container-->--}}
{{--                        <div class="comments-container">--}}
{{--                            <div class="normal-title">--}}
{{--                                <h3>COMMENT (2)</h3>--}}
{{--                            </div>--}}

{{--                            <!--Commment Box-->--}}
{{--                            <div class="comment-box">--}}
{{--                                <div class="inner">--}}
{{--                                    <figure class="image"><img src="images/resource/author-thumb-2.jpg" alt=""></figure>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="author-title">Martha LUIS</h3>--}}
{{--                                        <div class="text">The adjectives you hear describing CK Euphoria most often include  exotic, romantic, sexy, seductive, and sensual. lorem ipsum dolorado</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!--Commment Box-->--}}
{{--                            <div class="comment-box">--}}
{{--                                <div class="inner">--}}
{{--                                    <figure class="image"><img src="images/resource/author-thumb-3.jpg" alt=""></figure>--}}
{{--                                    <div class="content">--}}
{{--                                        <h3 class="author-title">JOHN LUIS</h3>--}}
{{--                                        <div class="text">The adjectives you hear describing CK Euphoria most often include  exotic, romantic, sexy, seductive, and sensual. lorem ipsum dolorado</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </div>--}}

{{--                        <!--Comment Form-->--}}
{{--                        <div class="comments-form-outer">--}}
{{--                            <div class="normal-title">--}}
{{--                                <h3>SUBMIT YOUR MESSAGE</h3>--}}
{{--                            </div>--}}

{{--                            <form method="post" action="http://volter.themexriver.com/index.html">--}}
{{--                                <div class="row clearfix">--}}

{{--                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">--}}
{{--                                        <input type="text" name="name" value="" placeholder="Your name" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">--}}
{{--                                        <input type="email" name="email" value="" placeholder="Your Email" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <textarea name="message" placeholder="Your Message" required></textarea>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">--}}
{{--                                        <button type="button" class="theme-btn btn-style-four">SUBMIT YOUR MESSAGE</button>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </form>--}}

{{--                        </div>--}}

                    </div>
                </div>

                <!--Sidebar-->
                <div class="sidebar-outer col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                    <aside class="sidebar">

                        <!--Search Widget-->
                        <div class="sidebar-widget search-widget">
                            <form method="post" action="http://volter.themexriver.com/index.html">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="SEARCH">
                                    <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!--Links Widget-->
                        <div class="sidebar-widget links-widget">
                            <ul>
                                @foreach(\App\Models\Category::where('status',1)->pluck('name') as $i)
                                    <li><a href="#">{{$i}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <!--Links Widget-->
                        <div class="sidebar-widget social-widget">
                            <div class="widget-inner">
                                <h3>LATEST POST</h3>
                                <hr>
                                <!--News Block-->
                                @foreach(\App\Models\Post::where('status',1)->get() as $i)
                                    <div class="news-block twitter">
                                        <div class="icon-box"><span class="fa fa-product-hunt"></span></div>
                                        <div class="post-content">
                                            <a href="#">{{$i['name']}}</a>
                                            <div class="time">{{$i['created_at']}}</div></div>
                                    </div>
                            @endforeach
                            </div>

                        </div>

                        <!--Links Widget-->
                        <div class="sidebar-widget popular-tags">
                            <div class="widget-inner">
                                <h3> OUR ARTICLES </h3>
                                <hr>

                                <div class="tags-list">
                                    @foreach(\App\Models\Article::where('status',1)->pluck('title') as $i)
                                        <a href="{{route('articles.show',$i)}}">{{$i}}</a>
                                    @endforeach
                                </div>

                            </div>

                        </div>

                        <!--Links Widget-->
                        <div class="sidebar-widget archives-widget">
                            <div class="widget-inner">
                                <h3>pages</h3>
                                <hr>

                                <ul>
                                    <li><a href="/">HOME</a></li>
                                    <li><a href="#">PRODUCTS</a></li>
                                    <li><a href="/about">ABOUT US</a></li>
                                    <li><a href="/contact">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>


                    </aside>
                </div>


            </div>
        </div>
    </div>
</div>
