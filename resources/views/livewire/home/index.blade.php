@section('title','home')

<div>
    <section class="main-slider style-one">
        <!--Slider COntainer-->
        <div class="slider-container">
            <ul class="slider-style-one">
                <!--Slide Item-->
                @foreach($sliders as $i )

                <li class="slide-item" style="background-image:url(<?php echo 'storage/'. $i['image'] ?>);" data-bg-position="center top">
                    <div class="auto-container">
                        <div class="content-container">
                            <div class="content-box">
                                <div class="content color-white">
                                    <div class="{{$i['position']}}">
                                        <h3 class="spaced-text-small wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">{{$i['name']}}</h3>
                                        <h2 class="bigger-title wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">{{$i['title']}}</h2>
                                        <div class="text light-text wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="1000ms">
                                               {{$i['description']}}
                                        </div>
                                        <div class="link-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="1500ms"><a href="#" class="theme-btn btn-style-one">ORDER NOW</a></div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="other-page-link">
            <a class="theme-btn" href="#">CONTACT US</a>
        </div>

    </section>
    <section class="features-section">
        <div class="auto-container">
            <div class="text-portion">
                <div class="row clearfix">

                    <!--Heading Column-->
                    <div class="heading-column col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="title-box">
                            <h3 class="small-text theme_color">WHO WE ARE ?</h3>
                            <h2>WE ARE TANIA NUTS COMPANY</h2>
                        </div>
                    </div>

                    <!--Carousel Column-->
                    <div class="carousel-column col-md-6 col-sm-12 col-xs-12 pull-left">
                        <div class="text-carousel-outer">
                            <ul class="text-carousel">
                                <li class="slide-item"><div class="text text-right"> With the utmost dedication to quality, we can offer you products that are competitive in your market and that comply with the highest health and safety standards, produced to your required specification under your own national brand label, or retailer’s private label..</div></li>
                                <li class="slide-item"><div class="text text-right">Due to our widespread geographical locations, we are able to constantly analyze the global dried fruit landscape, quickly identify  trends and develop products targeting and fulfilling theseever-present new opportunities.</div></li>
                                <li class="slide-item"><div class="text text-right">Every country has a distinct socio-economic fabric, into which are knitted the predominant commercial terms and conditions of trade. We are acutely aware of these, and are able to offer a comprehensive range of terms to suit your specific requirements and drive competitive advantage.</div></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="features-container">
                    <div class="clearfix">
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-1"></span></div>
                                <h3>Dry fruit packaging for export</h3>
                                <div class="text">
                                    Protection of product features and quality
                                    Product protection from pollution
                                    Protection of smell, taste, color 
                                </div>
                            </div>
                        </div>
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-1"></span></div>
                                <h3>Quality Assurance</h3>
                                <div class="text">All our products are available to you with the best quality and in the shortest time</div>    <br>
                            </div>
                        </div>
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-1"></span></div>
                                <h3>Necessary contracts</h3>
                                <div class="text">Set up all the necessary contracts.</div>  <br> <br>
                            </div>
                        </div>
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-2"></span></div>
                                <h3>fast sending</h3>
                                <div class="text">Fast delivery of the product with full preservation of its quality and features.</div> <br>
                            </div>
                        </div>
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-2"></span></div>
                                <h3>Safe shopping</h3>
                                <div class="text">Easy and safe shopping experience with tania nuts.</div> <br>
                            </div>
                        </div>
                        <!--Icon Column-->
                        <div class="column default-icon-column col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon flaticon-cup-2"></span></div>
                                <h3>Product hygiene</h3>
                                <div class="text">In terms of health, rest assured that all our products have health approval.</div>   <br>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Image Section-->
                <div class="default-image-section">
                    <figure class="image-box wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0ms">
                        <img src="{{asset('home/images/142.jpg')}}"  alt="">
                        <div class="link-box text-center"><a href="#" class="theme-btn btn-style-two">WORK WITH US ?</a></div>
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <section class="our-skills-section">
        <div class="auto-container">

            <div class="title-box text-center">
                <h3 class="small-text theme_color">Our team services</h3>
                <h2>THE BEST WE CAN DO</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, nostrud exerci tation ullamcorper delgado consectuerer.</div>
            </div>

            <div class="posts-container">

                <!--Default Post / Style One-->
                @foreach($service as $i)
                    @if($i['position']=='right')
                <article class="default-post-style style-one left-aligned">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 image-column">
                            <div class="clearfix">
                                <figure class="image-outer">
                                    <div class="image-box wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="0ms">
                                        <img src="{{'storage/'. $i['image']}}" alt="">
                                        <div class="logo-image wow zoomInStable" data-wow-duration="1500ms" data-wow-delay="500ms"><img src="images/resource/logo-1.png" alt=""></div>
                                    </div>
                                    <div class="post-info"><a href="#" class="theme-btn">BRANDING DESIGN, 26/06/2010</a></div>
                                </figure>

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 content-column">
                            <div class="default-content-box">
                                <div class="default-post-title">
                                    <h4>OUR SERVICES</h4>
                                    <h3><span class="post-number">01.</span>{{$i['title']}}</h3>
                                </div>
                                <div class="content-box">
                                    <div class="text">
                                      {!! $i['description'] !!}
                                    </div>
                                    <div class="link-box"><a href="#" class="theme-btn btn-style-one">VIEW ALL WORKS</a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </article>
                    @else
                        <article class="default-post-style style-one right-aligned">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 col-xs-12 image-column pull-right">
                                    <div class="clearfix">
                                        <figure class="image-outer pull-right">
                                            <div class="image-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
                                                <img src="{{'storage/'. $i['image']}}" alt="">
                                            </div>
                                            <div class="post-info"><a href="#" class="theme-btn">PHOTOGRAPHY, 26/06/2010</a></div>

                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 content-column pull-left">
                                    <div class="default-content-box text-right">
                                        <div class="default-post-title">
                                            <h4>OUR SERVICES</h4>
                                            <h3><span class="post-number">02.</span> {{$i['title']}}</h3>
                                        </div>
                                        <div class="content-box">
                                            <div class="text">
                                                {!! $i['description'] !!}
                                            </div>
                                            <div class="link-box"><a href="/post" class="theme-btn btn-style-one">VIEW ALL WORKS</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        @endif
                @endforeach
            </div>

        </div>
    </section>
    <section class="our-work-section">
        <div class="auto-container">
            <div class="title-box text-center">
                <h3 class="small-text theme_color">OUR PORTFOLIO</h3>
                <h2>BEAUTIFUL WORKS</h2>
                <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit diam, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</div>
            </div>

            <!--Portflio Carousel Outer-->
            <div class="portfolio-carousel-outer">
                <ul class="portfolio-carousel">
                    @foreach($posts as $i)
                    <li class="slide-item">
                        <!--Default Portfolio Item-->
                        <article class="default-portfolio-item">
                            <div class="item-inner">
                                <figure class="image-box">
                                    <a href="{{'storage/'. $i['image']}}" class="lightbox-image" title="Image Caption Here"><img src="{{'storage/'. $i['image']}}"  alt=""></a>
                                </figure>
                                <div class="item-cat">{{$i['title']}}</div>
                            </div>
                        </article>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>
    <section class="default-blog-section">
        <div class="auto-container">
            <div class="title-box text-center">
                <h3 class="small-text">OUR ARTICLES</h3>
                <h2>Our latest news and articles</h2>
            </div>

            <!--Default Blog Post / Style One-->
            @foreach($article as $i)
                @if($counter !==1)
            <article class="default-post-style blog-post style-one left-aligned">
                <div class="row clearfix">
                    <div class="col-md-7 col-sm-12 col-xs-12 image-column">
                        <div class="clearfix">
                            <figure class="blog-image wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms"><img src="{{'storage/'. $i['image2']}}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 content-column padd-top-50">
                        <div class="default-content-box wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="default-post-title">
                                <h3><a href="#">{{$i['title']}}</a></h3>
                            </div>
                            <div class="content-box">
                                <div class="default-post-info"><a href="#">{{$i['created_at']->format('Y-m-d')}}</a></div>
                                <div class="text">
                                   {!! substr($i['description'],0,120) !!}
                                </div>
                            </div>
                            <div class="link-box"><a href="#" class="theme-btn read-more">READ MORE</a></div>

                        </div>
                    </div>
                </div>
            </article>
                    @else

                    <article class="default-post-style blog-post style-one right-aligned">
                        <div class="row clearfix">
                            <div class="col-md-7 col-sm-12 col-xs-12 image-column pull-right">
                                <div class="clearfix">
                                    <figure class="blog-image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="0ms"><img src="{{'storage/'. $i['image2']}}" alt=""></figure>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 content-column padd-top-50">
                                <div class="default-content-box text-right wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                                    <div class="default-post-title">
                                        <h3><a href="#">{{$i['title']}}</a></h3>
                                    </div>
                                    <div class="content-box">
                                        <div class="default-post-info"><a href="#">{{$i['created_at']->format('Y-m-d')}}</a></div>
                                        <div class="text">
                                            {!! substr($i['description'],0,120) !!}
                                        </div>
                                    </div>
                                    <div class="link-box"><a href="#" class="theme-btn read-more">READ MORE</a></div>

                                </div>
                            </div>
                        </div>
                    </article>
                @endif
                <?php
                    $counter++
                ?>
            @endforeach
            <!--Default Blog Post / Style One-->
        </div>

        <div class="link-box text-center padd-right-20"><a href="#" class="theme-btn btn-style-one">GO TO OUR BLOG</a></div>
    </section>
    <div class="scroll-to-top"><span class="icon fa fa-long-arrow-up"></span></div>

</div>
