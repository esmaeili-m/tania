
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
                                        <li><a href="{{route('categories',$i)}}">{{$i}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown"><a href="/products">products</a></li>
                            <li><a href="/articles">Articles</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->

            </div>
        </div><!-- Header Container End-->

    </header>

