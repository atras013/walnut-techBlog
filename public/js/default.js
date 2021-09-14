var heroSection = document.getElementById("hero");
 
        
           if(matchMedia('screen and (max-width:1000px)').matches) {

             heroSection.classList.add("carousel","js-flickity"); 

             var flkty = new Flickity( '.main-gallery', {
             cellAlign: 'left',
             // options
            contain: true,
            
            });
       } 
        

      window.onresize = function() {  
       
      
           if(matchMedia('screen and (max-width:1000px)').matches) {

             heroSection.classList.add("main-gallery","js-flickity"); 

             var flkty = new Flickity( '.main-gallery', {
             cellAlign: 'right',
             // options
            contain: true,
            
            });
       } 
      }
     
       //burger menu 

       

       
      const navSlide = () => {
        var burger = document.querySelector('.burger');
        var nav  = document.querySelector('.main-nav-list');
        var navLinks = document.querySelectorAll('.main-nav-list li');

        
        burger.addEventListener('click', () => {
             
          alert('hello');

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
    