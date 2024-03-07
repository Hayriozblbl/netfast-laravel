<body class="defult-home">

    <!--Full width header Start-->
    <div class="full-width-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="flaticon-email"></i><a href="mailto:{{ GeneralSiteSettings('site_email')}}">{{ GeneralSiteSettings('site_email')}}</a></li>
                                <li><i class="flaticon-call"></i><a href="tel:{{ GeneralSiteSettings('site_phone')}}">{{ GeneralSiteSettings('site_phone')}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li class="opening"> <i class="flaticon-clock"></i> @lang('frontend.top_header')</li>
                                 <li><a href="{{GeneralSiteSettings('site_twitter_url') }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{GeneralSiteSettings('site_youtube_url') }}"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="{{GeneralSiteSettings('site_linkedin_url') }}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="/lang/en">EN</a></li>
                                <li><a href="/lang/tr" target="_blank">TR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">
            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="{{route('frontend.index')}}"><img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="rs-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu pr-65">
                                        <ul class="nav-menu">

                                            <li><a href="{{route('frontend.index')}}">@lang('frontend.home')</a></li>


                                            <li class="menu-item-has-children">
                                                <a href="#">@lang('frontend.bilgi_merkezi')</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('frontend.about')}}">@lang('frontend.hakkimizda')</a></li>
                                                    <li><a href="{{asset('uploads/Catalog/Netfast-Bilisim-Urun-Katalogu.pdf')}}" target="_blank">@lang('frontend.urun_katalogu')</a></li>
                                                    <li><a href="{{route('frontend.announcements')}}">@lang('frontend.duyurular')</a></li>
                                                    <li><a href="{{route('frontend.gallery')}}">@lang('frontend.videolar')</a></li>
                                                    <li><a href="{{route('frontend.events')}}">@lang('frontend.etkinlikler')</a></li>
                                                    <li><a href="{{route('frontend.nereden-alinir')}}">@lang('frontend.nereden_alinir')</a></li>
                                                    <li><a href="https://b2b.netfast.com.tr/">@lang('frontend.arizali_urun_gonderimi')</a></li>


                                                </ul>
                                            </li>

                                            <li><a href="{{route('frontend.teknik-dokumanlar')}}">@lang('frontend.teknik_dokumanlar')</a></li>
                                            <li><a href="{{route('frontend.sss')}}">@lang('frontend.sss')</a></li>
                                            <li><a href="https://b2b.netfast.com.tr/">@lang('frontend.bayi_giris_portali')</a></li>

                                            <li><a href="{{URL('/blog')}}">Blog</a></li>

                                            <li><a href="{{route('frontend.contact')}}">@lang('frontend.iletisim')</a></li>



                                        </ul>
                                        <!-- //.nav-menu -->
                                    </nav>
                                </div>
                                <!-- //.main-menu -->
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <span id="nav-close" class="humburger">
                        <span class="dot1"></span>
                        <span class="dot2"></span>
                        <span class="dot3"></span>
                        <span class="dot4"></span>
                        <span class="dot5"></span>
                        <span class="dot6"></span>
                        <span class="dot7"></span>
                        <span class="dot8"></span>
                        <span class="dot9"></span>
                    </span>
                </div>
                <div class="canvas-logo">
                    <a href="{{route('frontend.index')}}"><img src="{{asset('uploads/settings/')}}/{{GeneralSiteSettings('site_logo') }}" alt="{{ GeneralSiteSettings('site_title') }}"></a>
                </div>
                <div class="offcanvas-text">
                    <p>Consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
                </div>
                <div class="canvas-contact">
                    <ul class="contact">
                        <li><i class="flaticon-location"></i> 374 William S Canning Blvd, Fall River MA 2721, USA</li>
                        <li><i class="flaticon-call"></i><a href="tel:+880155-69569">(+880)155-69569</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
                        <li><i class="flaticon-clock"></i>10:00 - 17:00</li>
                    </ul>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>
    <!--Full width header End-->
