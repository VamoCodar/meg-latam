<?php
/**
 * 
 * This file is the template footer content.
 * 
 * @package meg
 * @author Nova Data
 * 
 */
?>
<footer id="directors">
    <section class="topSection" id="contact">
        <h2 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" class="font-title-sections container-padding">&lt;_Contato#&gt;</h2>
        <canvas id="decoration-subtitle-contact" class="decoration-subtitle container-padding" height="100" width="400"></canvas>

        <div class="grid-contact container-padding">
            <div class="info-contact" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
                <?php  
                $discord = carbon_get_post_meta(5, 'crb_ndt_contact_discord'); 
                if( $discord ):
                ?>
                <div>
                    <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/discord.png" alt="Discord" />
                    <a class="font-family-bender font-color-white font-size-24"><strong><?php echo $discord; ?></strong></a>
                </div>
                <?php endif; ?>

                <?php  
                $email = carbon_get_post_meta(5, 'crb_ndt_contact_email'); 
                if( $email ):
                ?>
                <div>
                    <a href="mailto:<?php echo $email; ?>" class="font-family-bender font-color-white font-size-24"><strong><?php echo $email; ?></strong></a>
                </div>
                <?php endif; ?>

                <?php  
                $endereco = carbon_get_post_meta(5, 'crb_ndt_contact_address'); 
                if( $endereco ):
                ?>
                <div>
                    <p class="font-family-bender font-color-white font-size-24"><?php echo $endereco; ?></p>
                </div>
                <?php endif; ?>

                <div class="contact-list-icones">
                    <ul>
                    <?php  
                    $whatsapp = carbon_get_post_meta(5, 'crb_ndt_contact_whatsapp'); 
                    if( $whatsapp ):
                    ?>
                        <li>
                            <a href="<?= $whatsapp; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/whatssap.png" alt="Whatssap" />
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php  
                    $youtube = carbon_get_post_meta(5, 'crb_ndt_contact_youtube'); 
                    if( $youtube ):
                    ?>
                        <li>
                            <a href="<?= $youtube; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/youtube.png" alt="Youtube" />
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php  
                    $facebook = carbon_get_post_meta(5, 'crb_ndt_contact_facebook'); 
                    if( $facebook ):
                    ?>
                        <li>
                            <a href="<?= $facebook; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/facebook.png" alt="Facebook" />
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php  
                    $twitter = carbon_get_post_meta(5, 'crb_ndt_contact_twitter'); 
                    if( $twitter ):
                    ?>
                        <li>
                            <a href="<?= $twitter; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/twitter.png" alt="Twitter" />
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php  
                    $instagram = carbon_get_post_meta(5, 'crb_ndt_contact_instagram'); 
                    if( $instagram ):
                    ?>
                        <li>
                            <a href="<?= $instagram; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/instagram.png" alt="Instagram" />
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php  
                    $twitch = carbon_get_post_meta(5, 'crb_ndt_contact_twitch'); 
                    if( $twitch ):
                    ?>
                        <li>
                            <a href="<?= $twitch; ?>">
                                <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/icones/twitch.png" alt="Twitch" />
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="form-contact" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
                
                <?= do_shortcode('[contact-form-7 id="20" title="Formulário de contato"]'); ?>
                
            </div>
        </div>

        <canvas width="200" height="700" id="digits-animated"></canvas>
    </section>

    <div class="directors-achievement">
        <div class="directors-line">
            <div class="directors-circle">
                <div class="directors-small-circle"></div>
            </div>
        </div>
        <p  class="font-family-bender font-color-blue-white font-size-14" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="300">
            Realização
        </p>
    </div>


    <div class="containerImgDirectors container-padding" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
        <figure>
            <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/realizacao/player1.png" alt="Player 1" />
            <img src="<?= esc_url( get_template_directory_uri() ); ?>/assets/realizacao/good to game.png" alt="GTG Good to Game" />
        </figure>
    </div>
</footer>
<style>
    .toastify {
        font-family: 'Bender';
    }
    .wpcf7-response-output {
        display: none;
    }
</style>
<script>
    
    var wpcf7Elms = document.querySelectorAll( '.wpcf7' );
    
    wpcf7Elms.forEach( function( elm ) {
        elm.addEventListener( 'wpcf7mailsent', function( event ) {
            Toastify({
                text: "Email enviado com sucesso",
                className: "info",
                close: true,
                style: {
                    background: "#01bd04",
                }
            }).showToast();
        }, false );

        elm.addEventListener( 'wpcf7invalid', function( event ) {
            Toastify({
                text: "Preencha todos os campos corretamente",
                className: "info",
                close: true,
                style: {
                    background: "#db0864",
                }
            }).showToast();
        }, false );
        
        elm.addEventListener( 'wpcf7mailfailed', function( event ) {
            Toastify({
                text: 'Erro no envio do email!',
                className: "info",
                close: true,
                style: {
                    background: "#db0864",
                }
            }).showToast();
        }, false );

        
    } );

</script>