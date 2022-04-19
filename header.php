<?php
/**
 * 
 * This file is the footer for website.
 * 
 * @package Meg
 * @author Nova Data
 * 
 */
?> <!DOCTYPE html>

<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/css.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/config/slick.css" />
        <link rel="stylesheet" href="<?= esc_url( get_template_directory_uri() ); ?>/css/config/slick-theme.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <?php wp_head(); ?>
        <?php 
            $banner = grab_post_thumbnail_url( $post->ID ) ?? get_template_directory_uri().'/assets/background/bgTemp.png';
        ?>
        <style>
            .video-header {
                background-image: url(<?= $banner; ?>)
            }
        </style>
        <title><?php bloginfo('name'); wp_title('|'); ?></title>
    </head>

    <body <?php body_class(); ?>>
        <header id="header">
            <div class="video-header">

            </div>
            <div class="container-header">

                <div class="container-nav-header">
                    <div id="nav-principal">
                        <?php include_once __DIR__ . '/templates/header/menu.php'; ?>
                    </div>
                </div>


                <div class="logo-site">
                    <img id="img-logo" src="<?= esc_url( get_template_directory_uri() ); ?>/assets/full-logo.png" alt="Logo Meg Latan" />
                </div>

                <div class="container-header-info">
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


                <div class="container-animation-header">

                    <div>
                        <div class="container-animation-radar">
                            <div class="animation-radar">
                                <div class="radar">
                                    <img class="grade" src="<?= get_template_directory_uri(); ?>/assets/img/radar.png" alt="">
                                    <div class="cursor-radar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="graphics">
                            <div class="container-graphic">
                                <div class="animationCircle1"></div>
                                <p>40°</p>
                            </div>

                            <div class="container-graphic">
                                <div class="animationCircle2"></div>
                                <p>70</p>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="animation-bar-point">
                            <div class="barLine"></div>
                            <div class="barLineFull"></div>
                            <div class="group-bar-point">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="animation-group-bar">
                            <div class="bar">
                                <div class="status-bar"></div>
                            </div>

                            <div class="bar">
                                <div class="status-bar"></div>
                            </div>

                            <div class="bar">
                                <div class="status-bar"></div>
                            </div>

                            <div class="bar">
                                <div class="status-bar"></div>
                            </div>

                            <div class="bar">
                                <div class="status-bar"></div>
                            </div>

                        </div>

                        <div class="animation-graphic">
                            <canvas id="graphic" height="100" width="200" style="border: 1px solid rgba(0, 255, 255, 0.25);"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </header>