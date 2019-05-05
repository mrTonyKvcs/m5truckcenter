<!DOCTYPE html>
<!--[if lt IE 9]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if !IE] -->
<html lang='en'>
    <!-- <![endif] -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@hasSection('title') @yield('title') @else 0-24 KAMION SZERVIZ ÉS ALKATRÉSZ- M5 TRUCK CENTER @endif</title>

        {{-- Styles --}}
        @hasSection('description')
            @yield('description')
        @else
            <meta name='description' content='@M5 Truck Center alkatrész kereskedelem, 0-24 kamion szervíz'>
        @endif
        <meta name="keywords" content="kamion alkatrész, alkatrész kereskedelem, pótkocsi alkatrész, kamion szervíz, 0-24 kamion mentés és szervíz">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 Months">
        <meta name="author" content="M5 Truck Center">
        <meta name="copyright" content="M5 Truck Center">
        <meta name="distribution" content="global">
        <meta name="language" content="HU">
        <meta name="language" content="EN">

        <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
        <link href='/assets/images/m5_logo.png' rel='shortcut icon' type='image/x-icon'>
        <link href='/assets/images/m5_logo.png' rel='apple-touch-icon-precomposed'>
        {{-- / required stylesheets --}}
        <link href="/assets/stylesheets/bootstrap/bootstrap.min.css" media="all" id="bootstrap" rel="stylesheet" type="text/css" />
        <link href="/assets/stylesheets/jednotka_red.css" media="all" id="colors" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <!--[if lt IE 9]>
            <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
            <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
        <![endif]-->
    </head>
    <body class='homepage'>
        {{--<div id='wrapper'>--}}
            <header id='header'>
                @include('partials.navbar')
            </header>
            <div id='main' role='main'>
                @yield('content')
            </div>
            <footer id='footer'>
                @include('partials.footer')
            </footer>
        {{--</div>--}}
        {{-- / required javascripts --}}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123893088-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-123893088-1');
        </script>
        <script src="/assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/modernizr/modernizr.custom.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        {{-- <script src="/assets/javascripts/plugins/retina/retina.min.js" type="text/javascript"></script> --}}
        <script src="/assets/javascripts/plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/isotope/jquery.isotope.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/flexslider/jquery.flexslider.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/countdown/countdown.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/nivo_lightbox/nivo-lightbox.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/plugins/cycle/jquery.cycle.all.min.js" type="text/javascript"></script>
        <script src="/assets/javascripts/jednotka.js" type="text/javascript"></script>
    </body>
</html>
