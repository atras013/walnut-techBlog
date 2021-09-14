<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('css/general.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/queries.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
   
    <title>Document</title>
  </head>
  <body>

    <!-- header -->
   
    <x-front-side.header> </x-front-side.header>

    
    
    <!-- main section  -->
    @yield('content')
   
     
    <!-- footer  -->
     
     <x-front-side.footer></x-front-side.footer>
     
     @yield('scripts')
     <script src="{{ asset('js/default.js') }}"></script>
     
  </body>

</html>
