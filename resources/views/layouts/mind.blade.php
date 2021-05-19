<!doctype html>
<!-- <html lang="{{ config('app.locale') }}"> -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>eiMan-Mind Map</title>

        <meta name="description" content="eiMan">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <!-- <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}"> -->
        <!-- <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}"> -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
        <link rel="icon" href="{{ asset('mind/media/favicons/favicon.png') }}" type="image/x-icon">

        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/bower_components/bootstrap/css/bootstrap.min.css') }}">
        <!-- waves.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/pages/waves/css/waves.min.css') }}" media="all">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/icon/themify-icons/themify-icons.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/icon/icofont/css/icofont.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/icon/font-awesome/css/font-awesome.min.css') }}">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('mind/css/style.css') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet"> -->
        <!-- Google font-->     
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"> -->
     

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
  
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    </head>
    <body themebg-pattern="theme1">
       
<!-- Pre-loader start -->
<!-- <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div> -->
  <!-- Pre-loader end -->

       
        @yield('content')
           

        <script type="text/javascript" src="{{ asset('mind/bower_components/jquery/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/popper.js/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- waves js -->
        <script src="{{ asset('mind/pages/waves/js/waves.min.js') }}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset('mind/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
        <!-- modernizr js -->
        <!-- <script type="text/javascript" src="{{ asset('mind/bower_components/modernizr/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/modernizr/js/css-scrollbars.js') }}"></script> -->
        <!-- i18next.min.js -->
        <script type="text/javascript" src="{{ asset('mind/bower_components/i18next/js/i18next.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('mind/bower_components/jquery-i18next/js/jquery-i18next.min.js') }}"></script>
        <!-- <script type="text/javascript" src="{{ asset('mind/js/common-pages.js') }}"></script> -->
        
        @yield('js_after')

        



    </body>
</html>
