<div>
    <header class="main-header header-style-one">

        <!-- Header Container -->
        <div class="header-container">


            <div class="auto-container clearfix">

                <!-- Logo -->
                <div class="logo">
                    <a href="index-2.html"><img src="{{asset('home/images/logo.png')}}" alt="Volter"></a>
                </div>

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
                                    @foreach(\App\Models\Category::where('status',1)->pluck('name') as $i)
                                        <li><a href="portfolio.html">{{$i}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="blog.html">products</a></li>
                            <li class="dropdown"><a href="blog.html">Articles</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->

            </div>
        </div><!-- Header Container End-->

    </header>
</div>
