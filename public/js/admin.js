const toggle = document.querySelector(".toggle");
         const main = document.querySelector(".main");
         const navigation = document.querySelector(".navigation");
         toggle.addEventListener("click", () => { 

               main.classList.toggle("close-main");
               navigation.classList.toggle("close-side-nav");
               

                 

                      
         }) ;

         const mainMenu = document.getElementsByClassName("collapse");
          var i;
          for(i= 0 ; i < mainMenu.length ;i++) {
             
             mainMenu[i].addEventListener("click" , function() { 
                 
                 //change background of main Menu that clicked
                 const main = this;
                 main.classList.toggle("change-background");

                 const collapseMenu = this.nextElementSibling;
                 
                 collapseMenu.classList.toggle("show-menu");
                    
                  const last =  this.lastElementChild;
                   
                  last.classList.toggle("turn");  
                 
             });
              
          };

          //dropdown-menu

          const userImage = document.getElementById("user-img");
          
          const dropdownMenu = document.querySelector(".dropdown-menu"); 
          userImage.addEventListener("click", function() { 
           
            dropdownMenu.classList.toggle("show");
             
          });

       