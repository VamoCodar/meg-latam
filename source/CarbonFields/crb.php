<?php

use Carbon_Fields\Container;

use Carbon_Fields\Field;



add_action( 'carbon_fields_register_fields', 'crb_ndt_fields' );

function crb_ndt_fields() {

    

    Container::make( 'post_meta', __( 'Página' ) )

        ->where( 'post_id', '=', '5')  

        ->add_tab( __( 'Quem Somos' ), array(

            Field::make( 'textarea', 'crb_ndt_sobre', __( 'Conteudo' ) )

            ->set_rows( 6 )

            ->set_attribute( 'placeholder', 'Digite o conteúdo' ),

        ) )

        ->add_tab( __( 'Parceiro' ), array(

            Field::make( 'media_gallery', 'crb_ndt_parceiros', __( 'Galeria' ) )

            ->set_type( array( 'image' ) )

            ->set_help_text( 'Anexe as imagens dos parceiros' ),

        ) )

        ->add_tab( __( 'Contato' ), array(

            Field::make( 'text', 'crb_ndt_contact_discord', __( 'Discord' ) )

            ->set_attribute( 'placeholder', 'Digite a url do discord' ),

            Field::make( 'text', 'crb_ndt_contact_email', __( 'Email' ) )

            ->set_attribute( 'placeholder', 'Digite o email para contato' ),

            Field::make( 'text', 'crb_ndt_contact_address', __( 'Endereço' ) )

            ->set_attribute( 'placeholder', 'Digite o endereço' ),

            Field::make( 'text', 'crb_ndt_contact_whatsapp', __( 'Whatsapp URL' ) )

            ->set_attribute( 'placeholder', 'Insira a URL do whatsapp (opcional)' ),

            Field::make( 'text', 'crb_ndt_contact_youtube', __( 'Youtube URL' ) )

            ->set_attribute( 'placeholder', 'Digite a URL do youtube (opcional)' ),

            Field::make( 'text', 'crb_ndt_contact_twitter', __( 'Twitter URL' ) )

            ->set_attribute( 'placeholder', 'Digite a URL do Twitter (opcional)' ),

            Field::make( 'text', 'crb_ndt_contact_facebook', __( 'Facebook URL' ) )

            ->set_attribute( 'placeholder', 'Digite a URL do facebook (opcional)' ),

            Field::make( 'text', 'crb_ndt_contact_instagram', __( 'Instagram URL' ) )

            ->set_attribute( 'placeholder', 'Digite a URL do instagram (opcional)' ),

            Field::make( 'text', 'crb_ndt_contact_twitch', __( 'Twitch URL' ) )

            ->set_attribute( 'placeholder', 'Digite a URL do twitch (opcional)' ),

        ) )

        ->add_tab( __( 'Avisos' ), array(

            Field::make('complex', 'crb_ndt_notifications', 'Notificações')

            ->set_layout('tabbed-vertical')

            ->add_fields(array(

                Field::make('text', 'notification_title', __('Titulo'))
                ->set_attribute( 'placeholder', 'Insira o título da notificação' ),
                Field::make('textarea', 'notification_description', __('Descrição'))
                ->set_attribute( 'placeholder', 'Insira a as informações da notificação' )

            ))
            ->set_header_template( '
                <% if (notification_title) { %>
                    <%- notification_title %>
                <% } else { %>
                    Vazio
                <% } %>
            ' )

        ) );



    

    Container::make( 'post_meta', __( 'Página' ) )

        ->where( 'post_id', '=', '8')  

        ->add_tab( __( 'Fases' ), array(

            Field::make('complex', 'crb_ndt_step', 'Fases')

            ->set_layout('tabbed-vertical')

            ->add_fields(array(

                Field::make('text', 'step_number', __('Número da fase'))

                ->set_attribute( 'type', 'number' )

                ->set_attribute( 'placeholder', 'Insira o numero da fase' ),

                Field::make('text', 'step_title', __('Titulo'))

                ->set_attribute( 'placeholder', 'Insira o titulo da fase' )

            ))

            ->set_header_template( '

                <% if (step_number) { %>

                    Fase #<%- step_number %>

                <% } else { %>

                    Vazio

                <% } %>

            ' )

        ) )

        ->add_tab( __( 'Modalidades' ), array(

            Field::make('complex', 'crb_ndt_modality', 'Modalidades')

            ->set_layout('tabbed-vertical')

            ->add_fields(array(

                Field::make('text', 'modality_name', __('Nome'))

                ->set_attribute( 'placeholder', 'Insira o nome da modalidade' ),

                Field::make('image', 'modality_image', __('Imagem'))

                ->set_help_text( 'Anexe o background da modalidade' ),

                Field::make('image', 'modality_icon', __('Icone'))

                ->set_help_text( 'Anexe o icone da modalidade' )

            ))

        ) )

        ->add_tab( __( 'Brackets' ), array(

            Field::make( 'media_gallery', 'crb_ndt_brackets', __( 'Galeria' ) )

            ->set_type( array( 'image' ) )

            ->set_help_text( 'Anexe as imagens em brackets' ),

        ) )

        ->add_tab( __( 'Prize Pool' ), array(

            Field::make( 'rich_text', 'crb_ndt_prize_pool', __( 'Prize Pool' ) )

        )

    );



}



add_action( 'after_setup_theme', 'crb_load' );

function crb_load() {

    \Carbon_Fields\Carbon_Fields::boot();

}

