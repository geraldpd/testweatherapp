<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Weather App Landing page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/iconfont.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>

        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
        <style>
            .forecast-temp {
                font-size: 7rem !important;
            }
            .text-orange {
                color: #fc6a42 !important
            }
            #place-info {
                margin-top: 40px;
            }
        </style>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed white no-background">
                <div class="container">

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#brand">
                            <h4 class="logo logo-display">Test <span class="text-orange">Weather</span> App</h4>
                            <h4 class="logo logo-scrolled">Test <span class="text-orange">Weather</span> App</h4>
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                </div>
            </nav>

            <!--Home Sections-->

            <section style="background-color: #648cff;" >
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6" style="margin-bottom: 110px;">
                                <div class="home_text">
                                    <h1 class="text-white">Check the the city weather!</h1>
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="cities">
                                        <option value="">Select a City</option>
                                        <option value="Tokyo"> Tokyo </option>
                                        <option value="Yokohama"> Yokohama </option>
                                        <option value="Kyoto"> Kyoto </option>
                                        <option value="Osaka"> Osaka </option>
                                        <option value="Sapporo"> Sapporo </option>
                                        <option value="Nagoya"> Nagoya </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 result-div">

                                <div id="place-info">
                                    <h1 class="text-white">Test <span class="text-orange">Weather</span> App</h1>
                                </div>
                            </div>

                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
        </div>

        <!-- JS includes -->
        <script src="{{ asset('assets/js/vendor/jquery-1.11.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.collapse.js') }}"></script>
        <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="{{ asset('scripts/search.js') }}"></script>

    </body>
</html>
