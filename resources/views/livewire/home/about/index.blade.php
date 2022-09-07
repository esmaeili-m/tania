@section('title','about us')
<div>
    <section class="page-title" style="background-image:url(images/background/bg-page-titlle-1.jpg);">
        <div class="auto-container text-center">

            <h4 class="small-text"></h4>
            <h3 class="spaced-text">Tania nuts company in the export afghan organic nuts and dry fruit with the best quality and we also supply best saffron And black cumin seeds from afghanistan contact us for more information</h3>
            <h2 class="page-name">ABOUT US</h2>

            <!--Bread Crumb-->
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">About</li>
            </ul>
            <a href="/products" class="vertical-link left"><span>OUR&ensp;Products</span></a>
            <a href=/contact" class="vertical-link right"><span>&ensp;Contact&ensp;Us</span></a>    
        </div>
    </section>
    <section class="our-skills-section style-two extended padd-bott-30">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Heading Column-->
                <div class="heading-column col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="title-box light text-capitalize padd-left-20">
                        <h3 class="small-text theme_color">WHO WE ARE ?</h3>
                        <h2>WE ARE TANIA NUTS COMPANY</h2>
                    </div>
                </div>

                <!--Carousel Column-->
                <div class="carousel-column col-md-6 col-sm-12 col-xs-12 pull-left">
                    <div class="tabs-box style-one light-theme">
                        <!--Tab Buttons-->
                        <ul class="tab-buttons pull-right margin-bott-20 clearfix">
                            <li class="tab-btn active-btn clearfix" data-tab="#tab-one"><span class="btn-count">01.</span><span class="btn-text">Commitment to quality</span></li>
                            <li class="tab-btn clearfix" data-tab="#tab-two"><span class="btn-count">02.</span><span class="btn-text">Market analysis</span></li>
                            <li class="tab-btn clearfix" data-tab="#tab-three"><span class="btn-count">03.</span><span class="btn-text">Business</span></li>
                        </ul>

                        <div class="clearfix"></div>

                        <!--Tabs Content-->
                        <div class="tabs-content">

                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="tab-one">
                                <div class="content-box text-right"> With the utmost dedication to quality, we can offer you products that are competitive in your market and that comply with the highest health and safety standards, produced to your required specification under your own national brand label, or retailer’s private label.</div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-two">
                                <div class="content-box text-right">Due to our widespread geographical locations, we are able to constantly analyze the global dried fruit landscape, quickly identify trends and develop products targeting and fulfilling theseever-present new opportunities.</div>
                            </div>

                            <!--Tab-->
                            <div class="tab" id="tab-three">
                                <div class="content-box text-right">
                                    Every country has a distinct socio-economic fabric, into which are knitted the predominant commercial terms and conditions of trade. We are acutely aware of these, and are able to offer a comprehensive range of terms to suit your specific requirements and drive competitive advantage.
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <br>

            <div class="posts-container">

                <!--Default Post / Style One-->
                @foreach($service as $i)
                @if($i['position'] == 'right')
                <article class="default-post-style style-one left-aligned">
                    <div class="row clearfix">
                        <div class="col-md-7 col-sm-12 col-xs-12 image-column pull-right">
                            <div class="clearfix">
                                <div class="default-image-outer pull-right">
                                    <div class="default-image-box">
                                        <figure class="main-image wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0ms"><img src="{{'storage/'.$i['image']}}" alt=""></figure>
                                        <div class="small-image wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="500ms"><img src="{{'storage/'.$i['image']}}" alt=""></div>
                                        <div class="logo-image"><img src="images/resource/logo-5.png" alt=""></div>
                                    </div>
                                    <div class="post-info"><a href="#" class="theme-btn">BRANDING DESIGN, 26/06/2010</a></div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 content-column pull-left">
                            <div class="default-content-box padd-top-40 text-left">
                                <div class="default-post-title">
                                    <h4>WHAT WE DO</h4>
                                    <h3><span class="post-number">01.</span>{{$i['title']}}</h3>
                                </div>
                                <div class="content-box">
                                    <div class="text">
                                      {!! $i['description'] !!}
                                    </div>
                                </div>

                            </div>
                            <div class="link-box text-left"><a href="/products" class="theme-btn default-read-more">VIEW ALL WORKS</a></div>
                        </div>
                    </div>
                </article>
                @else
                <article class="default-post-style style-one left-aligned">
                            <div class="row clearfix">
                                <div class="col-md-7 col-sm-12 col-xs-12 image-column pull-left">
                                    <div class="clearfix">
                                        <div class="default-image-outer pull-left">
                                            <div class="default-image-box">
                                                <figure class="main-image wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0ms"><img src="{{'storage/'.$i['image']}}" alt=""></figure>
                                                <div class="small-image wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="500ms"><img src="{{'storage/'.$i['image']}}" alt=""></div>
                                                <div class="logo-image"><img src="images/resource/logo-5.png" alt=""></div>
                                            </div>
                                            <div class="post-info"><a href="#" class="theme-btn">PHOTOGRAPHY, 26/06/2010</a></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12 content-column pull-right">
                                    <div class="default-content-box padd-top-40 text-left">
                                        <div class="default-post-title">
                                            <h4>WHAT WE DO</h4>
                                            <h3><span class="post-number">02.</span>{{$i['title']}}</h3>
                                        </div>
                                        <div class="content-box">
                                            <div class="text">
                                                {!! $i['description'] !!}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="link-box text-left"><a href="/products" class="theme-btn default-read-more">VIEW ALL WORKS</a></div>
                                </div>
                            </div>
                        </article>
                @endif
                @endforeach
            </div>

        </div>
    </section>
</div>
