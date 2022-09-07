<header class="main-header header-style-three">

    <!-- Header Container -->
    <div class="header-container">

        <!--Logo Container-->
        <div class="logo-container padd-top-30 padd-bott-30">
            <div class="auto-container">
                <!-- Logo -->
                <div class="logo text-center">
                    <a href="index-2.html"><img src="images/logo-4.png" alt="Tania"></a>
                </div>
            </div>
        </div>

        <div class="header-upper bg-light-grey">
            <div class="auto-container clearfix">

                <!-- Main Menu -->
                <nav class="main-menu">

                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li class="current dropdown"><a href="/">Home</a>
                            </li>
                            <li><a href="portfolio.html">category</a>
                                <ul>
                                    @foreach(\App\Models\Category::where('parent',null)->orwhere('parent','')->where('status',1)->pluck('name') as $i)
                                        <li><a href="{{route('categories',$i)}}">{{$i}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="/products">products</a></li>
                            <li><a href="/articles">Articles</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->

                <!--Social Links-->
                <div class="upper-right clearfix">
                    <div class="social-links">


                            @if($social->facebook !== null)
                                <a href="{{$social->facebook}}" class="social-link clearfix"><span class="icon fa fa-facebook-f"></span><span class="txt"></span></a>
                            @endif
                            @if($social->telegram !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-twitter"></span><span class="txt"></span></a>
                            @endif

                            @if($social->Pinterest !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-pinterest"></span><span class="txt"></span></a>
                            @endif

                            @if($social->Dribble !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-dribbble"></span><span class="txt"></span></a>
                            @endif

                            @if($social->instagram !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-instagram"></span><span class="txt"></span></a>
                            @endif

                            @if($social->linkedin !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-linkedin"></span><span class="txt"></span></a>
                            @endif

                            @if($social->phone !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-phone"></span><span class="txt"></span></a>
                            @endif

                            @if($social->email !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-envelope"></span><span class="txt"></span></a>
                            @endif

                            @if($social->whatsapp !== null)
                                <a href="#" class="social-link clearfix"><span class="icon fa fa-whatsapp"></span><span class="txt"></span></a>
                            @endif

                     
                    </div>

                    <!--Search Box-->
                    <div class="search-box">
                        <form method="post" action="http://volter.themexriver.com/index.html">
                            <div class="form-group">
                                <input type="search" name="search" value="" placeholder="Search">
                                <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- Header Container End-->

</header>