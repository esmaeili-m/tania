 @section('title','article')
<div>
    <section class="page-title" style="background-image:url(<?php echo asset('home/images/background/bg-page-titlle-1.jpg') ?>);">
        <div class="auto-container text-center">

            <h3 class="spaced-text">OUR LATEST NEWS AND ARTICLES</h3>
            <h2 class="page-name">OUR ARTICLES</h2>

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
                    <div class="blog-posts-outer default-blog-section no-padd-bottom no-padd-top style-two">
                        <!--Default Blog Post / Style One-->
                        @foreach($articles as $i)
                        <article class="default-post-style blog-post style-one left-aligned">
                            <div class="row clearfix">
                                <div class="col-md-7 col-sm-12 col-xs-12 image-column">
                                    <figure class="blog-image"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12 content-column padd-top-10">
                                    <div class="default-content-box wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                                        <div class="default-post-title">
                                            <h3><a href="{{route('articles.show',$i['title'])}}">{{$i['title']}}</a></h3>
                                        </div>
                                        <div class="content-box">
                                            <div class="default-post-info"><a href="#"></a>{{$i['created_at']->format('Y-m-d')}}</div>
                                            <div class="text margin-bott-30">
                                                {!! substr($i['description'],0,300) !!}
                                            </div>
                                        </div>
                                        <div class="link-box"><a href="{{route('articles.show',$i['title'])}}" class="theme-btn read-more">READ MORE</a></div>

                                    </div>
                                </div>
                            </div>
                        </article>

                        <hr>
                       @endforeach

                    <!--Default Blog Post / Style One-->
                    </div>
                    {{$articles->links()}}

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
                                <!--News Block-->

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

                        <!--Archives Widget-->
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
