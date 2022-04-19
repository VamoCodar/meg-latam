<?php
/**
 * This file is the tournament page for website.
 * 
 * @package Meg
 * @author Nova Data
 */
get_header(); ?> 
<main>
    <?php 
    $fases = carbon_get_post_meta( $post->ID, 'crb_ndt_step' );
    if( $fases ):
    ?>
    <section class="topSection container-padding" id="general-championship">
        <h2 class="font-title-sections" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;Campeonato_Geral&gt;</h2>
        <canvas id="decoration-subtitle-general-championship" class="decoration-subtitle container-padding" height="100" width="400"></canvas>

        <div class="general-championship-container">
            <?php 
            foreach( $fases as $key => $fase ):
            ?>
            <div class="font-family-bender container-phase">
                <div>
                    <h3 class="font-size-16">fase #<?= $fase['step_number']; ?></h3>
                    <p class="font-size-40 font-color-white"><?= $fase['step_title']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="general-championship-arrows">
            <div class="swiper general-championship-arrows-carrossel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                    <div class="swiper-slide">
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php 
    $modalidades = carbon_get_post_meta( $post->ID, 'crb_ndt_modality' );
    if( $modalidades ):
    ?>
    <section class="topSection container-padding" id="modalities">
        <h2 class="font-title-sections" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;_Modalidades&gt;</h2>


        <div class="grid-contents-modalities">
            <div class="contents-left">
                <div class="animation-arrow">
                    <div class="arrow">

                    </div>
                    <div class="container-line">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="lineSelect"></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>

            <div class="modalities-container">
            <?php 
            foreach( $modalidades as $key => $modalidade ):
            ?>
                <div class="item" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="500" data-aos-delay="<?= ($key+1) * 150; ?>">
                    <div class="background">
                        <div>
                            <figure>
                                <img src="<?= esc_url( wp_get_attachment_url($modalidade['modality_image']) ); ?>" alt="<?= $modalidade['modality_name']; ?>" />
                            </figure>
                            <figure>
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/modalidades/0.png" alt="" />
                            </figure>
                        </div>
                    </div>
                    <div class="content">  
                        <figure>
                            <img src="<?= esc_url( wp_get_attachment_url( $modalidade['modality_icon'] ) ); ?>" alt="Icone <?= $modalidade['modality_name']; ?>"></img>
                        </figure>
                        <canvas height="300" width="100" id="<?= $key+1; ?>-digits"></canvas>
                        <p class="font-size-18 font-family-bender font-color-blue-white">_<?= $modalidade['modality_name']; ?></p>
                    </div>
                    <div class="lines">
                        <figure>
                            <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/modalidades/lines.png" alt='' />
                        </figure>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

            <div class="contents-right">
                <div class="animation-arrow">
                    <div class="arrow">

                    </div>
                    <div class="container-line">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="lineSelect"></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php 
    $brackets = carbon_get_post_meta( $post->ID, 'crb_ndt_brackets' );
    if( $brackets ):
    ?>
    <section class="topSection" id="brackets">
        <h2 class="font-title-sections container-padding" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;_Brackets&gt;</h2>
        <canvas id="decoration-subtitle-brackets" class="decoration-subtitle container-padding" height="100" width="400"></canvas>

        <div class="brackets-slide">
            <div class="swiper slide-parceiros-1">
                <div class="swiper-wrapper">
                    <?php foreach( $brackets as $key => $bracket ): if( $key % 2 == 1 ) continue; ?>

                    <div class="swiper-slide">
                        <figure class="brackets-img">
                        <img src="<?= wp_get_attachment_url($bracket); ?>" alt="<?= 'image-'.$key ?>" />
                        </figure>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <div class="swiper slide-parceiros-2">
                <div class="swiper-wrapper">
                    
                    <?php foreach( $brackets as $key => $bracket ): if( $key % 2 == 0 ) continue; ?>
                    <div class="swiper-slide">
                        <figure class="brackets-img">
                        <img src="<?= wp_get_attachment_url($bracket); ?>" alt="<?= 'image-'.$key ?>" />
                        </figure>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="topSection container-padding" id="prize-pool">
        <h2 class="font-title-sections" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">&lt;_Prize Pool&gt;</h2>

        <div class="container-prize-pool" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
            <?php 
            $prize_pool = carbon_get_post_meta($post->ID, 'crb_ndt_prize_pool');
            echo $prize_pool;
            ?>
            <!-- <div class="value-award-prize-pool">
                    <p class="font-size-100 font-color-white font-family-bender">R$</p>

                    <p class="font-size-200 font-color-white font-family-bender">250.000</p>

                    <p class="font-size-100 font-color-blue-white font-family-bender">Em premiações</p>
                
            </div>

            <div class="p-prize-pool" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="500">
                <p class="font-family-bender font-color-white font-size-24">
                    *Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor.
                </p>
            </div> -->
        </div>

        <canvas width="300" height="150" id="container-warning"></canvas>
    </section>

</main>
<?php get_footer();