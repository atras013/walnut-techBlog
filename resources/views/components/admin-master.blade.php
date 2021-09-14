<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @yield('title')
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
     <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="admin-container">
      <!-- Side navBar  -->
      <x-backend-side.side-navigation></x-backend-side.side-navigation>
      <main class="main">
      
      <!-- Top navBar  -->
      <x-backend-side.topBar-navigation></x-backend-side.topBar-navigation>
          
         @yield('content')

        
         
       </main>
    </div>
      <script src="{{ asset('js/admin.js') }}"></script>
       @yield('script')
</body>
</html>

