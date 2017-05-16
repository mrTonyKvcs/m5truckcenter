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
    <title>M5 Truck Center</title>

    {{-- Styles --}}
    
    <title>Home | Jednotka - Multipurpose Template</title>
    <meta content='blog, business, clean, multipurpose template, twitter bootstrap 3, responsive' name='keywords'>
    <meta content='Jednotka is multipurpose Twitter Bootstrap 3 template which is suitable for any type of business or online project. ' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    
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
    <div id='wrapper'>
      <header id='header'>
        @include('partials.navbar')
      </header>
      <div id='main' role='main'>
        @yield('content')
      </div>
      <footer id='footer'>
        @include('partials.footer')
      </footer>
    </div>
    {{-- / required javascripts --}}
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
