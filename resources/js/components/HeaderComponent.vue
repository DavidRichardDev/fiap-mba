<template>
    <div class="container">
        <header>
            <ul>
                <li>
                    <a class="logo" href="" title="">
                        <img src="/images/logo.png" alt="">
                    </a>
                </li>
                <li><a href="" title="">Conceito</a></li>
                <li><a href="" title="">Fotos</a></li>
                <li><a href="" title="">Notícias</a></li>
                <li><a href="" title="">Fale Conosco</a></li>
                <li>
                    <button>Login</button>
                </li>
            </ul>
            <div class="bar">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                <ul>
                     <li><a href="" title="">Conceito</a></li>
                    <li><a href="" title="">Fotos</a></li>
                    <li><a href="" title="">Notícias</a></li>
                    <li><a href="" title="">Fale Conosco</a></li>
                    <li>
                        <button>Login</button>
                    </li>
                </ul>
            </div>
        </header>
     </div>
</template>

<script>
    export default {

        
        mounted() {
            // var menumobile = (menu) => {
            //     menu.classList.toggle("change");
            //     console.log('teste');
            // }
            var menu_mobile = document.querySelector('header .bar');
            menu_mobile.addEventListener("click", function(event) {  
                // event.target.classList.toggle("change");
                menu_mobile.classList.toggle("change");
            });

            var menu = document.querySelector('header ul');
            console.log(menu);
             menu.addEventListener("mouseover", function( event ) {   
                // highlight the mouseover target
                // event.target.style.color = "orange";
                // event.target.style.after.width = "200px"
                console.log(event.target.after.width);

                // reset the color after a short delay
                // setTimeout(function() {
                // event.target.style.color = "";
                // }, 500);
            }, false);

           

            // document.querySelectorAll('header ul li').addEventListener('mouseover', function() {
            //     console.log(this);
            // });
            
        }
        
    }
</script>
