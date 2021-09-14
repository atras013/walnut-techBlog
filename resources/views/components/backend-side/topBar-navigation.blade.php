<div class="topbar">
    <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>

    <div class="user">
     <img id="user-img" class="user-img" src="{{ asset(Auth()->user()->avatar ) }}" alt="">
  </div>
     <div class="dropdown-menu">
         <div class="user-info">
            <p class="name">{{ Auth()->user()->name }}</p>
            <div class="email-address">{{ Auth()->user()->email }}</div>
         </div>
         <div class="setting"> 
        <a href="{{ route('users.profile.show' , [ 'user'=> auth()->user() ]) }}">
          <ion-icon name="person-circle-outline"></ion-icon>
            <span>پروفایل</span> 
        </a>
        
        
        <a href="{{ route('logout') }}">
           <ion-icon name="exit-outline"></ion-icon>
           <span>خروج</span>
   
        </a>
     </div>
     
    </div>

</div>