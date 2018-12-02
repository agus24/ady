<!DOCTYPE html>
<html lang="en-US">
<head>

    <!-- Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">

    <meta name="author" content="ExplicitConcepts">
    <!-- description -->
    <meta name="description" content="We are ExplicitConcepts Agency. We have experience in web development allows us to create truly Templates in many categories like PSD Templates, HTML Templates, WordPress Themes, Unbounce Themes and Instapage Theme.">
    <!-- keywords -->
    <meta name="keywords" content="unbounce, unbounce landing page, instapage, instapage landing page, landing page, web design, PSD template, responsive web design, website designed, free web design, flat web design, site template, web de, website, web development">

    <!-- Stylesheets
    ============================================= -->
    <link href="css/css-assets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i" rel="stylesheet">

    <!-- Favicon
    ============================================= -->
    <link rel="shortcut icon" href="{{ asset('images/general-elements/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{asset("images/general-elements/favicon/apple-touch-icon.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/general-elements/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/general-elements/favicon/apple-touch-icon-114x114.png')}}">

    <style>
        .button-bona {
            text-transform: uppercase;
            font-weight: bold;
            background-color: black;
            color: white;
        }
        .button-bona:hover {
            background-color: #eeeeee;
            box-shadow: 0 3px 14px 4px rgba(0, 0, 0, 0.22);
            color: black;
        }
    </style>
    <!-- Title
    ============================================= -->
    <title>SMP BONAVITA</title>
</head>

<body class="device-lg boxed">
    <div id="full-container">
        <header id="header">
            <div id="header-bar-1" class="header-bar">
                <div class="header-bar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hb-content">
                                    <a class="logo logo-header text-white" href="#">
                                        {{-- <img src="images/files/logo-header.png" data-logo-alt="images/files/logo-header-alt.png" alt=""> --}}
                                        <h3><span class="colored">SMP BONAVITA</span></h3>
                                    </a><!-- .logo end -->
                                    <div class="hb-meta">
                                    </div><!-- .hb-meta end -->
                                </div><!-- .hb-content end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div><!-- .header-bar-wrap -->
            </div><!-- #header-bar-1 end -->
        </header><!-- #header end -->
        <section id="banner">
            <div class="banner-parallax" data-banner-height="750">
                <img src="images/files/parallax-bg/img-1.jpg" alt="">
                <div class="overlay-colored color-bg-heading opacity-60"></div><!-- .overlay-colored end -->
                <div class="slide-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">

                                <div class="banner-center-box text-white text-center">
                                    <h1 style="text-transform:uppercase;font-size:100px;font-family:sans-serif;letter-spacing: 30px;line-height: 130px;">SMP<bR>Bonavita</h1>
                                    <div class="cta-subscribe cta-subscribe-1 box-form">
                                        <div class="box-content">
                                            <div class="cs-notifications">
                                                <div class="cs-notifications-content"></div>
                                            </div><!-- .cs-notifications end -->
                                        </div><!-- .box-content end -->
                                    </div><!-- .box-form end -->
                                </div><!-- .banner-center-box end -->
                            </div><!-- .col-md-10 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div><!-- .slide-content end -->
            </div><!-- .banner-parallax end -->
        </section><!-- #banner end -->

        <!-- Content
        ============================================= -->
        <section id="content">
            <div id="content-wrap">
                <!-- === Intro Features =========== -->
                <div id="intro-features" class="flat-section">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 md-text-center">
                                    <img src="images/files/person-img-1.jpg" alt="">
                                </div><!-- .col-md-6 end -->
                                <div class="col-md-6">
                                    <div class="section-title style-2 mt-80">
                                        <span>Perekrutan</span>
                                        <h2>
                                            Bergabunglah dengan kami
                                        </h2>
                                        <p class="description">
                                            Kami membutuhkan bantuan anda dalam berbagai bidang. Menciptakan sesuatu yang berkualitas demi masyarakat luas dan demi mencerdaskan masa depan bangsa.
                                        </p>
                                    </div>
                                </div><!-- .col-md-6 end -->
                            </div><!-- .row end -->
                            <br>
                            <div class="pricing-table">
                                <div class="row">
                                    @foreach(App\Recruitment::all() as $value)
                                        <div class="col-md-6 col-sm-6">
                                            <div class="pt-column featured">
                                                <div class="pt-column-header">
                                                    <div class="title"> &nbsp;
                                                    </div>
                                                    <div class="price">
                                                        <h1><span>{{ $value->divisi }}</span></h1>
                                                        <span class="period">{{ $value->jabatan  }}</span>
                                                    </div><!-- .price end -->
                                                </div>
                                                {!! $value->kriteria !!}<br>
                                                <div class="pt-column-footer">
                                                    <button onclick="document.querySelector('#recruitment_id').value = {{ $value->id }};document.querySelector('#hiddenContent').style.display = 'block'" class="btn white small rounded hover-colorful">Lamar Sekarang</button>
                                                </div><!-- .pt-column-footer end -->
                                            </div><!-- .pt-column end -->
                                        </div>
                                    @endforeach
                                </div><!-- .row end -->
                            </div>
                        </div><!-- .container end -->
                    </div><!-- .section-content end -->
                </div><!-- .flat-section end -->
            </div><!-- #content-wrap -->
        </section><!-- #content end -->

    <section class="flat-section" id="hiddenContent" style="display:none">
        <div class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form" action="{{ url('recruit') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="recruitment_id" id="recruitment_id">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cv</label>
                                <input type="file" name="cv" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Surat Lamaran</label>
                                <input type="file" name="suratLamaran" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="button-bona">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Footer
        ============================================= -->
        <footer id="footer">

            <div id="footer-bar-1" class="footer-bar">

                <div class="footer-bar-wrap">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="fb-row">
                                    <div class="copyrights-message">2018 - 2019 © <a href="https://themeforest.net/user/morad?ref=morad"><span class="colored">Morad</span></a>. All Rights Reserved.</div>
                                    <ul class="social-icons animated x4 grey hover-colorful icon-only">
                                        <li><a class="si-facebook" href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="si-twitter" href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="si-instagramorange" href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                                    </ul><!-- .social-icons end -->
                                </div><!-- .fb-row end -->

                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->

                </div><!-- .footer-bar-wrap -->

            </div><!-- #footer-bar-1 end -->

        </footer><!-- #footer end -->
    </div>
    <!-- External JavaScripts
    ============================================= -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jRespond.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/simple-scrollbar.min.js')}}"></script>
    <script src="{{asset('js/superfish.js')}}"></script>
    <script src="{{asset('js/scrollIt.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/simple-scrollbar.min.js')}}"></script>
    <script src='{{asset('js/functions.js')}}'></script>
</body>
</html>
