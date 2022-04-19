<?php
/**
 * 
 * This file is the template form newsletter.
 * 
 * @package Lemi
 * @author Nova Data
 * 
 */
?>
<!-- <div class="container--personalizado">
    <div class="secao--newsletter--wrapper">
        <div class="titulo" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
            <h3>Aproveite nossas promoções!</h3>
            <p>Cadastre seu e-mail e receba ofertas exclusivas</p>
        </div>
        <div class="formulario" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
            <div class="input--box">
                <input type="text" id="nome--newsletter" name="nome--newsletter"
                    placeholder="Digite seu nome">
            </div>
            <div class="input--box">
                <input type="email" id="email--newsletter" name="email--newsletter"
                    placeholder="Digite seu e-mail">
            </div>
            <div class="btn--container">
                <button type="submit" name="submit--newsletter" id="submit--newsletter"
                    class="btn--newsletter">QUERO RECEBER</button>
            </div>
        </div>
    </div>
</div> -->
<?= do_shortcode('[contact-form-7 id="145" title="Newsletter"]'); ?>