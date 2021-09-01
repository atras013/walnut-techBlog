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
      <nav class="navigation">
        
           <ul>
               
               <li>
                   <a href="#">
                   <ion-icon class="icon" name="logo-apple"></ion-icon>
                   <span class="title"><h2>brand Name</h2></span>
                   </a>
                </li>
                 
               <li>
                   <a href="#">
                   <ion-icon class="icon" name="home-outline"></ion-icon>
                   <span class="title"><h2>داشبورد</h2></span>
                   </a>
               </li>
               
               <li >
                <div class="collapse">
                  <ion-icon class="icon" name="pencil-outline"></ion-icon>
                  <span class="title"><h2>پست</h2></span>
                  <ion-icon class="arrow-icon" name="chevron-forward-outline"></ion-icon>
                </div> 
                 <div class="collapse__menu">
                          
                         <a href="#">
                            <ion-icon class="icon" name="create-outline"></ion-icon>
                            <p>پست جدید</p>
                         </a>
                    
                 </div>
            </li>
               <li >
                <div class="collapse">
                  <ion-icon class="icon" name="pencil-outline"></ion-icon>
                  <span class="title"><h2>پست</h2></span>
                  <ion-icon class="arrow-icon" name="chevron-forward-outline"></ion-icon>
                </div> 
                 <div class="collapse__menu">
                          
                         <a href="#">
                            <ion-icon class="icon" name="create-outline"></ion-icon>
                            <p>پست جدید</p>
                         </a>
                    
                 </div>
            </li>
               <li >
                <div class="collapse">
                  <ion-icon class="icon" name="pencil-outline"></ion-icon>
                  <span class="title"><h2>پست</h2></span>
                  <ion-icon class="arrow-icon" name="chevron-forward-outline"></ion-icon>
                </div> 
                 <div class="collapse__menu">
                          
                         <a href="#">
                            <ion-icon class="icon" name="create-outline"></ion-icon>
                            <p>پست جدید</p>
                         </a>
                    
                 </div>
            </li>
               <li >
                <div class="collapse">
                  <ion-icon class="icon" name="pencil-outline"></ion-icon>
                  <span class="title"><h2>پست</h2></span>
                  <ion-icon class="arrow-icon" name="chevron-forward-outline"></ion-icon>
                </div> 
                 <div class="collapse__menu">
                          
                         <a href="#">
                            <ion-icon class="icon" name="create-outline"></ion-icon>
                            <p>پست جدید</p>
                         </a>
                    
                 </div>
            </li>
           
               <li>
                   <a href="#">
                      <ion-icon class="icon" name="chatbox-ellipses-outline"></ion-icon>
                      <span class="title"><h2>نظرها</h2></span>
                    </a>
                </li>
               
               

           </ul>
        
      </nav>
      <main class="main">
       <div class="topbar">
           <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>

           <div class="user">
            <img id="user-img" class="user-img" src="images/users/customer-1.jpg" alt="">
         </div>
            <div class="dropdown-menu">
                <div class="user-info">
                   <p class="name">نیما امیدپور</p>
                   <div class="email-address">nima@gmail.com</div>
                </div>
                <div class="setting"> 
               <a href="">
                  <ion-icon name="shield-half-outline"></ion-icon>
                   <span>امنیت</span> 
               </a>
               <a href="">
                  <ion-icon name="settings-outline"></ion-icon>
                  <span>تنظیمات</span> 
               
               </a>
               <a href="">
                  <ion-icon name="exit-outline"></ion-icon>
                  <span>خروج</span>
          
               </a>
            </div>
            
           </div>

       </div>

       </main>
    </div>
      <script src="{{ asset('js/admin.js') }}"></script>
    
</body>
</html>