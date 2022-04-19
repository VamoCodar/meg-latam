<?php

/**

 * 

 * This file is the footer for website.

 * 

 * @package Meg

 * @author Nova Data

 * 

 */

include_once __DIR__ . '/templates/footer/footer.php';

?>



<?php wp_footer(); ?>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/configMobile.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/configGlobal.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animations/decorationSubTitle.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animation.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animation-arrow.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animations/graphic-bar.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animations/digits.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animations/warning.js"></script>

<script src="<?= esc_url( get_template_directory_uri() ); ?>/js/animations/loading.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>



    let swiperParceiros1= new Swiper('.slide-parceiros-1',{

        slidesPerView:1,

        spaceBetween:20,

        loop:true,

        autoplay:

            {delay:2500,

                reverseDirection:true,

                disableOnInteraction:false,

            },

        breakpoints:{

            320: {slidesPerView: 2,}

            ,768:{slidesPerView:4},

            1024:{slidesPerView:4}

    }});

        

    let swiperParceiros2=new Swiper('.slide-parceiros-2',

        {slidesPerView:1,

        spaceBetween:20,

        loop:true,

        autoplay:{

            delay:2500,

            disableOnInteraction:false,

        },

        breakpoints:{

            320:{slidesPerView:2,},

            768:{slidesPerView:4},

            1024:{slidesPerView:4}

    }});



    let swiperGeneralChampionshipArrows= new Swiper('#general-championship .general-championship-arrows .swiper',{

        slidesPerView:1,

        spaceBetween:20,

        loop:true,

        autoplay:

            {delay:20,

                reverseDirection:true,

                disableOnInteraction:false,

            },

        breakpoints:{

            320: {slidesPerView: 10,}

            ,768:{slidesPerView:14},

            1024:{slidesPerView:18}

    }});



</script>

</body>

</html>