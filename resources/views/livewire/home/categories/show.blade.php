@section('title','products')
<div class="sidebar-page-container">
   <div class="auto-container">
      <div class="row clearfix">

         <!--Content Side-->
         <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
            <div class="blog-posts-outer default-blog-section no-padd-bottom no-padd-top style-two blog-details">

               <!--Default Blog Post / Blog Details-->
               <article class="default-post-style blog-post blog-details style-one left-aligned">

                  {!! $post['description'] !!}

               </article>

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
<div>

   @if($position == 1)
      <section class="gallery-section fullwidth no-padd-bottom no-padd-top">
         <div class="outer-container">

            <div class="filter-list clearfix">
               @foreach($posts as $i)

                  <div class="column mix mix_all all {{$i['category']}}  col-lg-3 col-md-4 col-sm-6 col-xs-12">

                     <div class="default-gallery-item">
                        <div class="inner-box text-center">
                           <!--Image Box-->
                           <figure class="image-box"><img src="{{'/storage/'. $i['image']}}" alt=""></figure>
                           <div class="overlay-box">
                              <div class="inner-content">
                                 <div class="content">
                                    <h3><a href="#">View Details</a></h3>
                                    <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                 </div>
                              </div>
                           </div>

                           <div class="caption-box visible-caption">
                              <h4><a href="#">{{$i['name']}}</a></h4>
                              <div class="cat-link"><a href="#">{{$i['category']}}</a></div>

                              <div class="add-fav"><a href="#"><span class="icon fa fa-heart-o"></span>125</a></div>

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
               @foreach($posts as $i)
                  <div class="column small-block all {{$i['category']}}">
                     <!--Default Portfolio Item-->
                     <div class="default-gallery-item">
                        <div class="inner-box text-center">
                           <!--Image Box-->
                           <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                           <div class="overlay-box">
                              <div class="inner-content">
                                 <div class="content">
                                    <h3><a href="#">View Details</a></h3>
                                    <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                 </div>
                              </div>
                           </div>

                           <div class="caption-box">
                              <h4><a href="#">{{$i['name']}}</a></h4>
                              <div class="cat-link"><a href="#">{{$i['category']}}</a></div>

                              <div class="add-fav"><a href="#"><span class="icon fa fa-heart-o"></span>125</a></div>

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
               @foreach($posts as $i)
                  <div class="column mix mix_all all {{$i['category']}} col-md-4 col-sm-6 col-xs-12">
                     <!--Default Portfolio Item-->
                     <div class="default-gallery-item">
                        <div class="inner-box text-center">
                           <!--Image Box-->
                           <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                           <div class="overlay-box">
                              <div class="inner-content">
                                 <div class="content">
                                    <h3><a href="#">View Details</a></h3>
                                    <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                 </div>
                              </div>
                           </div>

                           <div class="caption-box style-two">
                              <h4><a href="#">{{$i['name']}}</a></h4>
                              <div class="cat-link"><a href="#">{{$i['category']}}</a></div>

                              <div class="add-fav"><a href="#"><span class="icon fa fa-heart-o"></span>125</a></div>

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
               @foreach($posts as $i)
                  <div class="column mix mix_all all {{$i['category']}} col-md-6 col-sm-6 col-xs-12">
                     <!--Default Portfolio Item-->
                     <div class="default-gallery-item">
                        <div class="inner-box text-center">
                           <!--Image Box-->
                           <figure class="image-box"><img src="{{'storage/'. $i['image']}}" alt=""></figure>
                           <div class="overlay-box">
                              <div class="inner-content">
                                 <div class="content">
                                    <h3><a href="#">View Details</a></h3>
                                    <a class="arrow lightbox-image" href="{{'storage/'. $i['image']}}" title="{{$i['name']}}"><span class="icon flaticon-cross"></span></a>
                                 </div>
                              </div>
                           </div>

                           <div class="caption-box style-two">
                              <h4><a href="#">{{$i['name']}}</a></h4>
                              <div class="cat-link"><a href="#">{{$i['category']}}</a></div>

                              <div class="add-fav"><a href="#"><span class="icon fa fa-heart-o"></span>125</a></div>

                           </div>
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>

         </div>
      </section>
   @else
   @endif
</div>

