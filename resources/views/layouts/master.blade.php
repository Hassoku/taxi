<!DOCTYPE html>
<html lang="zxx">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <title>Erika - Portfolio | CV | Resume - Html Template</title>
      
      <!-- Loading Bootstrap -->
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Loading Template CSS -->
      <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
      <link href="{{asset('assets/css/style-magnific-popup.css')}}" rel="stylesheet">

      <!-- Awsome Fonts -->
      <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>




      <!-- Font Favicon -->
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
      
   </head>
   <body id="app">

        @include('partials.header')

            @yield('content')
        @include('partials.footer')
          <!-- Load JS here for greater good =============================-->
         <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
         <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('assets/js/jquery.scrollTo-min.js')}}"></script>
         <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
         <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
         <script src="{{asset('assets/js/plugins.js')}}"></script>
         <script src="{{asset('assets/js/custom.js')}}"></script>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
               <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

   </body>
   @yield('scripts')
</html>
