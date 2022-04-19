<?php
/**
 * 
 * This file is the home page for website.
 * 
 * @package Meg
 * @author Nova Data
 * 
 */
get_header(); ?> 
<main>
    <article class="" id="principalHeader">
        <div>
            <h1 class="font-family-bender font-color-white font-size-100 container-padding">Multiplatform esports games</h1>
        </div>
        <canvas width="200" height="700" id="digits-animated2"></canvas>

        <canvas width="300" height="150" id="container-warning"></canvas>
    </article>

    <section class="topSection container-padding" id="about-us" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
        <h2 class="font-title-sections">&lt;Quem_somos&gt;</h2>
        <p class="font-family-bender font-color-white font-size-24">
            <?= nl2br( carbon_get_post_meta($post->ID, 'crb_ndt_sobre') ); ?>
        </p>
    </section>

    <section class="topSection" id="contents">
        <h2 class="font-title-sections container-padding" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;_Conteúdos&gt;</h2>
        <canvas id="decoration-subtitle-contents" class="decoration-subtitle container-padding" height="100" width="400"></canvas>


        <div class="container-contents">
            <div class="animation-loading">

                <div class="animation-loading-bar">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                
                <div class="progress-animation-loading">
                    <p class="font-family-bender font-color-white font-size-24">0%</p>
                </div>
            </div>
        </div>
    </section>

    <?php  
    $parceiros = carbon_get_post_meta( $post->ID, 'crb_ndt_parceiros');
    // var_dump( $parceiros);
    if( $parceiros ):
    ?>
    <section class="topSection" id="sponsors">
        <h2 class="font-title-sections container-padding" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;Patrocinadores_%&gt;</h2>
        <canvas id="decoration-subtitle-sponsors" class="decoration-subtitle container-padding" height="100" width="400"></canvas>
        

        <div class="sponsors-slide">
            <div class="swiper slide-parceiros-1">
                <div class="swiper-wrapper">
                <?php foreach( $parceiros as $key => $parceiro ): if( $key % 2 == 1 ) continue; ?>
                <div class="swiper-slide">
                    <figure class="sponsors-img">
                        <img src="<?= wp_get_attachment_url($parceiro); ?>" alt="<?= wp_get_attachment_url($parceiro); ?>" />
                    </figure>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper slide-parceiros-2">
                <div class="swiper-wrapper">
                <?php foreach( $parceiros as $key => $parceiro ): if( $key % 2 == 0 ) continue; ?>
                <div class="swiper-slide">
                    <figure class="sponsors-img">
                        <img src="<?= wp_get_attachment_url($parceiro); ?>" alt="<?= wp_get_attachment_url($parceiro); ?>" />
                    </figure>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    
    </section>
    <?php endif; ?>
</main>
<?php get_footer();
