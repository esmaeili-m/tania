 @section('title','contact')
<div>
    <section class="page-title" style="background-image:url(<?php echo asset('home/images/background/bg-page-titlle-1.jpg')?>);">
        <div class="auto-container text-center">

            <h3 class="spaced-text">Keep In Touch</h3>
            <h2 class="page-name">CONTACT US</h2>

            <!--Bread Crumb-->
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>

            <a href="#" class="vertical-link left"><span>OUR&ensp;Services</span></a>
            <a href="#" class="vertical-link right"><span>&ensp;About&ensp;Us</span></a>

        </div>
    </section>
    <section class="contact-us-section">
        <div class="auto-container">

            <!--Info Boxes-->
            <div class="default-info-box">
                <div class="row clearfix">
                    <!--Info Box-->
                    <div class="info-box col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="icon"><span class="flaticon-technology-26"></span></div>
                            {{$contact->phone}}
                        </div>
                    </div>

                    <!--Info Box-->
                    <div class="info-box col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="icon"><span class="flaticon-letter-1"></span></div>
                            {{$contact->email}}
                        </div>
                    </div>

                    <!--Info Box-->
                    <div class="info-box col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="icon"><span class="flaticon-phone"></span></div>
                            {{$contact->phone}}
                        </div>
                    </div>

                </div>
            </div>

            <div class="title-box text-center light margin-bott-60">
                <h3 class="small-text theme_color">KEEP IN TOUCH</h3>
                <h2>CONTACT US</h2>
                <div class="text">
                    This is where you should be!. <br>
                    Here you will find what you want.</div>
            </div>

            <div class="row clearfix">

                <!--Info Column-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        <!--Child Column-->
                        <div class="child-column col-lg-6 col-md-12 col-xs-12">
                            <h3><span class="icon flaticon-location"></span> ADDRESS</h3>
                            <div class="lower">
                                {{$contact->address}}
                            </div>
                        </div>

                        <!--Child Column-->
                        <div class="child-column col-lg-6 col-md-12 col-xs-12">
                            <h3><span class="icon flaticon-technology-23"></span> EMAIL</h3>
                            <div class="lower">
                                {{$contact->email}}
                            </div>
                        </div>

                    </div>

                    <div class="default-social-links clearfix">@if($contact->facebook !== null)
                            <a href="{{$social->facebook}}" class="social-link clearfix"><span class="icon fa fa-facebook-f"></span><span class="txt"></span></a>
                        @endif
                        @if($contact->telegram !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-twitter"></span><span class="txt">tewitter</span></a>
                        @endif

                        @if($contact->Pinterest !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-pinterest"></span><span class="txt">Pinterest</span></a>
                        @endif

                        @if($contact->Dribble !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-dribbble"></span><span class="txt">Dribble</span></a>
                        @endif

                        @if($contact->instagram !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-instagram"></span><span class="txt">instagram</span></a>
                        @endif

                        @if($contact->linkedin !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-linkedin"></span><span class="txt">linkedin</span></a>
                        @endif

                        @if($contact->phone !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-phone"></span><span class="txt">phone</span></a>
                        @endif

                        @if($contact->email !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-envelope"></span><span class="txt">email</span></a>
                        @endif

                        @if($contact->whatsapp !== null)
                            <a href="#" class="social-link clearfix"><span class="icon fa fa-whatsapp"></span><span class="txt">whatsapp</span></a>
                        @endif
{{--                        <a href="#" class="social-link clearfix"><span class="icon fa fa-facebook-f"></span><span class="txt">Facebook</span></a>--}}
{{--                        <a href="#" class="social-link clearfix"><span class="icon fa fa-twitter"></span><span class="txt">Twitter</span></a>--}}
{{--                        <a href="#" class="social-link clearfix"><span class="icon fa fa-pinterest"></span><span class="txt">Pinterest</span></a>--}}
{{--                        <a href="#" class="social-link clearfix"><span class="icon fa fa-dribbble"></span><span class="txt">Dribble</span></a>--}}
                    </div>

                </div>

                <!--Form Column-->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">

                    <!--Contact Form-->
                    <div class="contact-form">
                        <form wire:submit.prevent="createMessage" id="contact-form">
                            <div>
                                @if (session()->has('message'))
                                    <div  class="alert alert-info">
                                        <div style="color:white">
                                            {{ session('message') }}
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input wire:model.lazy="message.name" type="text" name="username" value="" placeholder="Your name">
                            </div>

                            <div class="form-group">
                                <input wire:model.lazy="message.email" type="email" name="email" value="" placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <textarea wire:model.lazy="message.message" name="message" placeholder="Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-six"><span class="icon-left fa fa-envelope"></span> SUBMIT</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>


        </div>

    </section>
</div>
