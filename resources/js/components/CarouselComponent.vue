<template>
   <div class="carousel-images">
       <div class="container">
           <h2>Fotos</h2>
           <slick ref="slick" :options="slickOptions">
                <a href="/images/a-luta-da-tecnologia.jpg"><img src="/images/a-luta-da-tecnologia.jpg" alt=""></a>
                <a href="/images/3-2-1-tecnologia.jpg"><img src="/images/3-2-1-tecnologia.jpg" alt=""></a>
                <a href="/images/corrida-de-drones.jpg"><img src="/images/corrida-de-drones.jpg" alt=""></a>
                <a href="/images/coworking-paulista.jpg"><img src="/images/coworking-paulista.jpg" alt=""></a>
                <a href="/images/coworking-vila-olimpia.jpg"><img src="/images/coworking-vila-olimpia.jpg" alt=""></a>
                <a href="/images/desenvolvimento-de-habilidades-de-lideranca.jpg"><img src="/images/desenvolvimento-de-habilidades-de-lideranca.jpg" alt=""></a>
                <a href="/images/drone-em-acao.jpg"><img src="/images/drone-em-acao.jpg" alt=""></a>
                <a href="/images/game-dev-lab.jpg"><img src="/images/game-dev-lab.jpg" alt=""></a>
                <a href="/images/impressora-laser.jpg"><img src="/images/impressora-laser.jpg" alt=""></a>
                <a href="/images/innovation-lab.jpg"><img src="/images/innovation-lab.jpg" alt=""></a>
                <a href="/images/mais-tecnologia-na-pista.jpg"><img src="/images/mais-tecnologia-na-pista.jpg" alt=""></a>
                <a href="/images/o-importante-e-inovar.jpg"><img src="/images/o-importante-e-inovar.jpg" alt=""></a>
                <a href="/images/preparacao-de-um-vencedor.jpg"><img src="/images/preparacao-de-um-vencedor.jpg" alt=""></a>
                <a href="/images/programacao-de-drones.jpg"><img src="/images/programacao-de-drones.jpg" alt=""></a>
                <a href="/images/projeto-e-lancamento-de-minifoguetes.jpg"><img src="/images/projeto-e-lancamento-de-minifoguetes.jpg" alt=""></a>
                <a href="/images/que-venca-a-tecnologia.jpg"><img src="/images/que-venca-a-tecnologia.jpg" alt=""></a>
                <a href="/images/robo-pronto-para-o-desafio.jpg"><img src="/images/robo-pronto-para-o-desafio.jpg" alt=""></a>
                <a href="/images/robos-em-combate.jpg"><img src="/images/robos-em-combate.jpg" alt=""></a>
                <a href="/images/sala-de-aula.jpg"><img src="/images/sala-de-aula.jpg" alt=""></a>
                <a href="/images/so-robo-campeao.jpg"><img src="/images/so-robo-campeao.jpg" alt=""></a>
            </slick>
       </div>
   </div>
</template>

<script>
    import Slick from 'vue-slick';

    
    export default {
        
       components: { Slick },
           
            data() {
                return {
                    slickOptions: {
                        autoplay: true,
                        autoplaySpeed: 3000,
                        slidesToShow: 1,
                        infinite: true,
                        accessibility: true,
                        adaptiveHeight: false,
                        arrows: true,
                        dots: true,
                        speed: 800,
                        fade: true,
                        cssEase: 'linear',
                        draggable: true,
                        edgeFriction: 0.30,
                        swipe: true,
                        customPaging : function(slider, i) {
                            return `<a>${(i + 1)} / ${slider.slideCount}</a>`
                        },
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    arrows: false
                                }
                            }
                        ]
                    },
                };
            },

            // All slick methods can be used too, example here
            methods: {
                next() {
                    this.$refs.slick.next();
                },

                prev() {
                    this.$refs.slick.prev();
                },

                reInit() {
                    // Helpful if you have to deal with v-for to update dynamic lists
                    this.$nextTick(() => {
                        this.$refs.slick.reSlick();
                    });
                },
            },
    }
</script>