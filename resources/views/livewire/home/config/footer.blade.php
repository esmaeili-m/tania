<footer class="main-footer">
    <div class="upper-part">

        <div class="auto-container">
            <div class="logo"><a href="#"><img src="images/logo-2.png" alt=""></a></div>
            <div class="text">Tania nuts company in the export afghan organic nuts and dry fruit with the best quality and we also supply best saffron And black cumin seeds from afghanistan contact us for more information</div>
            <div class="footer-social-links clearfix">
                @if($social->facebook !== null)
                <a href="{{$social->facebook}}" class="social-link clearfix"><span class="icon fa fa-facebook-f"></span><span class="txt">Facebook</span></a>
                @endif
                @if($social->telegram !== null)
                    <a href="#" class="social-link clearfix"><span class="icon fa fa-twitter"></span><span class="txt">Twitter</span></a>
                    @endif

                @if($social->Pinterest !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-pinterest"></span><span class="txt">Pinterest</span></a>
                    @endif

                @if($social->Dribble !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-dribbble"></span><span class="txt">Dribble</span></a>
                        @endif

                    @if($social->instagram !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-instagram"></span><span class="txt">instagram</span></a>
                            @endif

                        @if($social->linkedin !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-linkedin"></span><span class="txt">linkedin</span></a>
                                @endif

                            @if($social->phone !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-phone"></span><span class="txt">phone</span></a>
                                    @endif

                                @if($social->mail !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-envelope"></span><span class="txt">mail</span></a>
                                        @endif

                                    @if($social->whatsapp !== null)
                <a href="#" class="social-link clearfix"><span class="icon fa fa-whatsapp"></span><span class="txt">whatsapp</span></a>
                                            @endif

            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="text"><span class="theme_color">TANIA</span> &copy; 2022 All Right Reserved Taina <br>Made with love by <a target="_blank" href="https://startwebone.com/">startwebone</a></div>
        </div>
    </div>

</footer>