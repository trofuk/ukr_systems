<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Vision" content="Vision Onepage or Multiconcept template ">
        <title>Українські Системи та Блокчейн Рішення</title>
        <!--    favicon-->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <!-- plugins -->
        <link href="{{ asset('assets/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">      
        <link href="{{ asset('assets/vendor/bower_components/flexslider/flexslider.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link href="{{ asset('assets/vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css">
        <link rel='stylesheet' type="text/css" href="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/animate.css') }}">
        <link href="{{ asset('assets/vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/revolution/css/revulation.css') }}">
        <!--main css file-->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="70">

        @yield('loader')
        @yield('top_bar')
        @yield('slider')
        @yield('clients')
        @yield('menu')
        @yield('stocks')
        @yield('business')
        @yield('services')
        @yield('acordian')
        @yield('video')
        @yield('expert')
        @yield('testimonial')
        @yield('contact')
        @yield('footer')

        @yield('content')
        
        <!-- jQuery plugins-->
        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bower_components/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bower_components/flexslider/jquery.flexslider-min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.custom.97074.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/vendor/dzsparallaxer/dzsparallaxer.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
        <script src="{{ asset('assets/js/cube-awesome-work.js') }}" type="text/javascript"></script> 
        <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owl-carousel/wow.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bower_components/masonry/dist/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/revolution/js/revulation.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/lettering-js/jquery.lettering.js') }}"></script>
        <script src="{{ asset('assets/vendor/lettering-js/jquery.textillate.js') }}"></script>
        <!-- contact js -->
        <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/js/contact.js') }}"></script>
        <script src="{{ asset('assets/js/mailchimp.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
    </body>
</html>
