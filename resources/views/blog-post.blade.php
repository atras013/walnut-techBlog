<x-home-master>
  
     @section('content')
       
        <section class="show-post">
            
              <div class="container">
                    
                    <div class="post">
                       <div class="post-container">
                        
                          <div class="post-header">
                              <h3>{{ $post->title }}</h3>
                             
                               <div class="post-second-row">

                              <div class="user-info">
                                  <img  class="user-avatar" src=" {{ $post->user->avatar }} " alt="">
                                  <span class="username">رضا</span>
                                 
                              </div>
                                <p class="date-and-time"> {{ $post->created_at }} </p>
                              
                                
                            </div>
                            <div class="third-row">
                                <img  class="post-image" src="{{ $post->post_image }}" alt="">
                            </div>
                          </div>
                          
                          <div class="post-content-section">
                             

                            <p>{{ $post->body }}</p>
                              


                          </div>
                       
                         <div class="like-and-share">
                            <div class="post-likes">
                                <ion-icon class="likes" name="heart-outline"></ion-icon>

                                <p>2.2k</p>
 
                            </div>
                            <div class="share-to-social-media d-flex justify-content-center align-items-center">
                                <p>اشتراک:</p>
                                <ion-icon name="logo-instagram" class="social-media-logo instagram"></ion-icon>
                                <ion-icon name="logo-twitter" class="social-media-logo twitter "></ion-icon>
                                <ion-icon name="logo-youtube" class="social-media-logo youtube "></ion-icon>
                              </div>
                        </div>

                      </div>  
                         
                         <div class="post-comments">

                          <div class="user-comments-container">
                        <div class="comments-form">
                            <h5 class="comments-header">نظرات</h5>
                            <div class="form-comment">
                              <form method="POST" action="">
                                @csrf
                                <input type="hidden" name="post_id" value="" id="">
                                <div class="form-group">
                                  <textarea placeholder="نظر خود را بنویسید" name="body" class="form-control " rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn  btn-success send-btn">ارسال</button>
                              </form>
                            </div>

                          </div>
                          <div class="user-comments">
                            <div class="user-comments-container">
                            <h5 class="comments-header">نظرات</h5>
                              <div class="user-comments-info d-flex column">
                                <img height="50px " width="50px"  class="user-avatar" src="https://images.unsplash.com/photo-1501854140801-50d01698950b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=840&q=80" alt="">
                                <div class="comments-body">
                                   <div class="comments-author row">
                                     <p class="m-0">رضا یزدانی</p>
                                     <p class="comments-time" > 2 روز پیش! </p>
                                   </div>
                                  
                                  <p class="comments-content">آلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگری  آلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگری آلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگریآلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگdfdffdfdری </p>
                                  <button id="reply-btn" class="reply-btn btn btn-primary">پاسخ</button>
                                  <div class="reply-form">
                                    <form method="POST" action="">
                                      @csrf
                                      <input type="hidden" name="post_id" value="" id="">
                                      <div class="form-group">
                                        <textarea placeholder="نظر خود را بنویسید" name="body" class="form-control " rows="3"></textarea>
                                      </div>
                                      <button type="submit" class="btn  btn-success send-btn">ارسال</button>
                                    </form> 
                                  </div>  

                                  <div class="comments-replies ">
                                   
                                    <img height="50px " width="50px"  class="user-avatar" src="https://images.unsplash.com/photo-1501854140801-50d01698950b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=840&q=80" alt="">
                                
                                  <div class="reply-author row">
                                    <p class="m-0">رضا یزدانی</p>
                                    <p class="comments-time" > 2 روز پیش! </p>
                                    <p class="comments-content">آلفردو جیمز پاچینو، شاگرد fdfdfdfdfddfdfdfdfخلف مدرسه‌‌ی بازیگری  آلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگری آلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگریآلفردو جیمز پاچینو، شاگرد خلف مدرسه‌‌ی بازیگری </p>

                                  </div>
                                    
          
                                </div>
                                 
                              </div>
                                
                                
                              </div>
                             
                          </div>

                        </div>
                        </div>

                        </div>
            
                    

                  
                    </div>
                    <div class="related-section">
                      <div class="left-sidebar">
                    
                          <div class="related-post">
                              <h3 class="related-header" >پست های مرتبط</h3>
                           <a href="#" class="raleted-link">
                             <p class="related-post-title">    
                        راهنمای خرید گوشی‌های شیائومی؛ تفاوت مدل‌ها و سری‌های مختلف چیست؟
                             </p>
                             <p class="related-post-author">
                                    رضا طاهری
                              
                                   </p>
                           </div>
                            </a>
                           
                          
                          </div>
                         
                            
                       </div>

                  </div>
                 
             
               

        </section>
      
      
     @stop
     
     @section('scripts')

      
     <script>
      const navSlide = () => {
       var burger = document.querySelector('.burger');
       var nav  = document.querySelector('.main-nav-list');
       var navLinks = document.querySelectorAll('.main-nav-list li');

       
       burger.addEventListener('click', () => {
            
       

          nav.classList.toggle("nav-active");

          

           navLinks.forEach(( link , index ) => { 
               
               
            if( link.style.animation ) {

             link.style.animation = "";
             }
             else {

               link.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 + 0.2 }s`;

             }
             
             

           });


           burger.classList.toggle("burger-close");
             
           
         
           
       });
     }
     
      navSlide();
    </script>   
     


        <script>
          
           $("#reply-btn").click( function() { 
               
               $(this).next().slideToggle("show");
               
           });

           $(".comment-reply-container .toggle-reply").click( function() {
             
             $(this).next().slideToggle("slow");
        });
        </script>

        
       
     @stop

</x-home-master>

