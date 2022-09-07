@section('title','products')
<div>
    
    <div class="links-bar">
        <div class="auto-container">
            <div class="outer-container">

                <!--Bread Crumb-->
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Portfolio</li>
                </ul>
                <!--Back Home-->
                <div class="back-link"><a href="/">back to Home</a></div>

                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix anim-3-all">
                        <li class="active filter" data-role="button" data-filter="{{$position == 1 ? 'all' : '.all'}}">All</li>
                        @foreach(\App\Models\Category::where('parent',null)->orwhere('parent','')->pluck('name') as $i)
                        <li class="filter" data-role="button" data-filter=".{{$i}}">{{$i}}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
    @if($position == 1)
    <section class="gallery-section fullwidth no-padd-bottom no-padd-top">
        <div class="outer-container">

            <div class="filter-list clearfix">
                  @foreach($post as $i)
                <div class="column mix mix_all {{$i['category']}} branding col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="default-gallery-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="{{route('home.category',$i['name'])}}">View Details</a></h3>
                                        <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="caption-box visible-caption">
                                <h4><a href="{{route('home.category',$i['name'])}}">{{$i['name']}}</a></h4>
                                <div class="cat-link"><a href="{{route('home.category',$i['name'])}}">{{$i['category']}}</a></div>

                                <div class="add-fav"><a href="{{route('home.category',$i['name'])}}"><span class="icon fa fa-heart-o"></span>125</a></div>

                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach
            </div>
        </div>
    </section>
    @elseif($position==2)
    <section class="gallery-section sortable-masonry mixed-gallery-section">
        <div class="auto-container">
            <div class="items-container row clearfix">
                @foreach($post as $i)
                <div class="column small-block all {{$i['category']}}">
                    <!--Default Portfolio Item-->
                    <div class="default-gallery-item">
                        <div class="inner-box text-center">
                            <!--Image Box-->
                            <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="inner-content">
                                    <div class="content">
                                        <h3><a href="{{route('home.category',$i['name'])}}">View Details</a></h3>
                                        <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="caption-box">
                                <h4><a href="{{route('home.category',$i['name'])}}">{{$i['name']}}</a></h4>
                                <div class="cat-link"><a href="{{route('home.category',$i['name'])}}">{{$i['category']}}</a></div>

                                <div class="add-fav"><a href="{{route('home.category',$i['name'])}}"><span class="icon fa fa-heart-o"></span>125</a></div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @elseif($position == 3)
        <section class="gallery-section">
            <div class="auto-container">

                <div class="filter-list clearfix">
                    @foreach($post as $i)
                    <div class="column mix mix_all all {{$i['category']}} col-md-4 col-sm-6 col-xs-12">
                        <!--Default Portfolio Item-->
                        <div class="default-gallery-item">
                            <div class="inner-box text-center">
                                <!--Image Box-->
                                <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="inner-content">
                                        <div class="content">
                                            <h3><a href="{{route('home.category',$i['name'])}}">View Details</a></h3>
                                            <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="caption-box style-two">
                                    <h4><a href="{{route('home.category',$i['name'])}}">{{$i['name']}}</a></h4>
                                    <div class="cat-link"><a href="{{route('home.category',$i['name'])}}">{{$i['category']}}</a></div>

                                    <div class="add-fav"><a href="{{route('home.category',$i['name'])}}"><span class="icon fa fa-heart-o"></span>125</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>

            </div>
        </section>
    @elseif($position == 4)
        <section class="gallery-section">
            <div class="auto-container">

                <div class="filter-list clearfix">
                    @foreach($post as $i)
                        <div class="column mix mix_all all {{$i['category']}} col-md-6 col-sm-6 col-xs-12">
                            <!--Default Portfolio Item-->
                            <div class="default-gallery-item">
                                <div class="inner-box text-center">
                                    <!--Image Box-->
                                    <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                                    <div class="overlay-box">
                                        <div class="inner-content">
                                            <div class="content">
                                                <h3><a href="{{route('home.category',$i['name'])}}">View Details</a></h3>
                                                <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="caption-box style-two">
                                        <h4><a href="{{route('home.category',$i['name'])}}">{{$i['name']}}</a></h4>
                                        <div class="cat-link"><a href="{{route('home.category',$i['name'])}}">{{$i['category']}}</a></div>

                                        <div class="add-fav"><a href="{{route('home.category',$i['name'])}}"><span class="icon fa fa-heart-o"></span>125</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
     @endif
</div>
