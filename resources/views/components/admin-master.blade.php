<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
      <!-- Side navBar  -->
      <x-backend-side.side-navigation></x-backend-side.side-navigation>
      <main class="main">
      
      <!-- Top navBar  -->
      <x-backend-side.topBar-navigation></x-backend-side.topBar-navigation>
        

       </main>
    </div>
      <script src="{{ asset('js/admin.js') }}"></script>
    
</body>
</html>