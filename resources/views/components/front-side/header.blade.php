<header class="header grid">
    <div class="burger">
      <div class="div1"></div>
      <div class="div2"></div>
      <div class="div3"></div>
    </div>
    <a href="#" class="logo">TechBlog</a>
    <nav class="main-nav">
      <ul class="main-nav-list">
        <li><a class="main-nav-link" href="#">خانه</a></li>
        <li><a class="main-nav-link" href="#">تکنولوژی</a></li>
        <li><a class="main-nav-link" href="#">برنامه نویسی</a></li>
        <li><a class="main-nav-link" href="#">اخبار</a></li>
        <li><a class="main-nav-link" href="#"> آموزش</a></li>
      </ul>
    </nav>
   
    
    @if ( Auth::check() && Auth::user()->hasRole() )
            
    <a href="{{ route('admin.index') }}" class="sign-in">ادمین</a>
           
        @elseif ( Auth::check() )

        <a href="/login" class="sign-in">خروج</a>

        
       @else
       <a href="/login" class="sign-in">ورود</a>

      
    @endif
    
  </header>