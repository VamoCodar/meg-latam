<?php

/**

 * 

 * This file is the template desktop menu.

 * 

 * @package meg

 * @author Nova Data

 * 

 */

?>

<div class="nav-logo">
    <a href="<?= site_url(); ?>">
        <img height="64" width="46.6" src="<?= esc_url( get_the_custom_brand() ); ?>" alt="Logo // Meg Latan" />
    </a>

    <ul class="option-idiom">

    <?php echo do_shortcode('[gtranslate]'); ?>

    </ul>

</div>

<nav>

    <div id="btn-nav-mobile-header">

        <button id="navbar-mobile" class="container-icon-navbarMobile" aria-expanded="false">

            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>

    </div>

    <ul id="nav-header" class="nav-header font-size-16">

        <?php 

            wp_nav_menu([

                'theme_location' => 'menu_navbar_ndt',

                'container' => '',

                'add_li_class' => '',

                'fallback_cb' => false,

                'items_wrap' => '%3$s',

            ]); 

        ?>

        <li>

            <a href="#">//inscrição</a>

        </li>

    </ul>

</nav>
<style>
.notification {
    z-index: 10000;
    position: fixed;
    bottom: 20px;
    right: 20px;
}

.notification .notification-container {
    opacity: 0;
    visibility: hidden;
    transition: all ease-in .1s;
    width: 0px;
    height: 0vh;
    margin-bottom: 10px;
    background: rgba(0, 255, 255, 0.2);
    border: 3px solid #00FFFFcc;
    backdrop-filter: blur(2px);
}

.notification .notification-container.active {
    visibility: visible;
    width: 462px;
    height: 70vh;
    overflow: hidden;
    opacity: 1;
    transform: translateY(0px);
}

@media( max-width: 1370px ){
    .notification .notification-container.active {
        visibility: visible;
        width: 360px;
        height: 70vh;
        opacity: 1;
        transform: translateY(0px);
    }
}

.notification-container .tl {
    point-events: none; 
    position: absolute; 
    top: 10px; 
    left: 10px;
}
.notification-container .bl {
    point-events: none; 
    position: absolute; 
    bottom: 10px; 
    left: 10px;
    transform: rotate(270deg);
}
.notification-container .tr {
    point-events: none; 
    position: absolute; 
    top: 10px; 
    right: 10px;
    transform: rotate(90deg);
}
.notification-container .br {
    point-events: none; 
    position: absolute; 
    bottom: 10px; 
    right: 10px;
    transform: rotate(180deg);
}

.notification .toggle-notification {
    background: transparent;
    border: none;
    cursor: pointer;
    display: block;
    margin-left: auto;
    filter: brightness(4) contrast(200%);
}
.notification .toggle-notification img {
    max-width: 50px;
    filter: drop-shadow(1px 1px 10px #00FFFFcc);
}

.notification .notification-container .content {
    padding: 2rem .5rem 1.8rem 2rem;  
    margin-right: 1.5rem;
    margin-top: 1rem;
    margin-bottom: 1.2rem;
    overflow-y: auto;
    max-height: 80%;
    scrollbar-color: #00FFFF;
    scrollbar-width: thin; 
}

.notification .notification-container .content h1{   
    font-family: 'Bender';
    color: #00FFFF;
    font-style: normal;
    
    font-weight: 700;
    font-size: 1.5rem;
    line-height: 2;
    margin-bottom: 1rem;
    /* identical to box height */
    text-transform: uppercase;
}

.notification .notification-container .content h2{   
    font-family: 'Bender';
    color: #00FFFF;
    font-style: normal;
    font-weight: 700;
    font-size: 1.125rem;
    line-height: 1.2;
    /* identical to box height */
    text-transform: uppercase;
}

.notification .notification-container .content p{   
    font-family: 'Bender';
    color: #FFFFFF;
    font-style: normal;
    margin-left: 1.5rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
    font-weight: 700;
    font-size: 1.125rem;
    line-height: 1.2;
    /* identical to box height */
    text-transform: uppercase;
}

.notification .notification-container .content::-webkit-scrollbar {
    width: 6px;               /* width of the entire scrollbar */
    margin-right: 10px; 
    padding: 1rem 0;
}

.notification .notification-container .content::-webkit-scrollbar-track {
    margin-right: 10px; 
    background: transparent;        /* color of the tracking area */
}

.notification .notification-container .content::-webkit-scrollbar-thumb {
    background-color: #00FFFF;    /* color of the scroll thumb */
    margin-right: 10px;       
    scrollbar-color: #00FFFF;  
}
</style>

<div class="notification">
    <div class="notification-container">
        <img class="tl" src="<?= get_template_directory_uri(); ?>/assets/icones/corner.svg">
        <img class="tr" src="<?= get_template_directory_uri(); ?>/assets/icones/corner.svg">
        <img class="bl" src="<?= get_template_directory_uri(); ?>/assets/icones/corner.svg">
        <img class="br" src="<?= get_template_directory_uri(); ?>/assets/icones/corner.svg">

        <?php  
            $notifications = carbon_get_post_meta(5, 'crb_ndt_notifications');        
        ?>
        <div class="content">
            <h1>&lt;Comunicados&gt;</h1>
            
            <?php  
            if( $notifications ) :
                foreach( $notifications as $key => $notification ) :
            ?>
                <h2><?= esc_html($notification['notification_title']); ?></h2>
                <p><?= esc_html($notification['notification_description']); ?></p>
            <?php 
                endforeach;
            else: ?>
                <p style="margin:0 auto">&lt;Nenhum aviso!&gt;</p>
            <?php
            endif;
            ?>

        </div>
    </div>
    <button class="toggle-notification">
        <img src="<?= get_template_directory_uri(); ?>/assets/icones/warning.svg" alt="notification" title="Notification">
    </button>
</div>

<script>
    buttonNotch = document.querySelector('.toggle-notification');
    containerNotch = document.querySelector('.notification-container');
    
    if( buttonNotch ){
        buttonNotch.addEventListener('click', function() {
            containerNotch.classList.toggle('active');
        })
    }
    
</script>

<style>

    .option-idiom a.active {

        color: #FFF !important;

    }

</style>

<script>

    

    const optionIdiom = document.querySelectorAll('.option-idiom a');

    

    // optionIdiom[0].classList.add('active');    

    function changeColor ( event ) {

        optionIdiom.forEach( item => {

            item.classList.remove('active');

        })

        

        event.currentTarget.classList.add('active');

    }

    

    optionIdiom.forEach( item => {

        item.addEventListener('click', changeColor)

    })

    



</script>