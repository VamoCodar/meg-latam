<?php
/**
 * Get the products and format
 * 
 * @param Array $products
 * @param String $img_size
 * 
 * @return Array $data 
 */
function formatProducts( $products, $img_size = 'full') {

    $data = [];
    foreach( $products as $product ) { setup_postdata( $product );

        if( $product->is_type( 'variable' ) ){
            $price = $product->get_variation_sale_price( 'min', true );
            $regular_price = $product->get_variation_regular_price( 'max', true );
        } else {
            $price = $product->price;
            $regular_price = $product->regular_price;
        }
       
        $data[] = [
            'ID' => $product->get_id(),
            'name' => $product->name,
            'price' => $price,
            'regular_price' => $regular_price, 
            'description' => $product->description,
            'url' => $product->get_permalink(),
            'date' => $product->get_date_created( $product->ID ),
            'short_description' => wp_trim_words( strip_tags( $product->get_short_description( $product->ID ), '<p>'), 30, ''),
            'price_html' => $product->get_price_html( $product->ID ),
            'thumbnail' => wp_get_attachment_image_src( get_post_thumbnail_id( $product->post->ID ), $img_size )[0],
            'product_type' => $product->product_type,
        ];
    }

    return $data;

}

function ndt_template_card( $item ) { ?>

<div class="card--produto swiper-slide">
    <a href="<?php echo esc_url( $item['url'] ); ?>" class="link--produto">
        <div class="produto--foto">
            <?php  
            $productLimitDate = date('d/m/Y', strtotime("{$item['date']} +20 days"));
            if( $item['date'] < $productLimitDate ):
            ?>
                <div class="icone--novo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icones/icone-novo.svg">
                </div>
            <?php endif ?>
            <img src="<?php echo esc_url( $item['thumbnail'] ); ?>">
        </div>
        <div class="produto--informacoes">
            <?php
            //check offers 
            $parcel = intval($item['price']) / 4;
            if ( $item['price'] < $item['regular_price'] ) :
                // discount = 100 * (original_price - discounted_price) / original_price
                $percentageOffer = round( 100 * ( $item['regular_price'] - $item['price'] ) / $item['regular_price'] ) ;
            ?>
                <span class="valor--antigo"><?php echo 'R$ ' . $item['regular_price']; ?></span>
                <p class="valor"><?php echo 'R$ ' . number_format( $item['price'], 2, ',', ''); ?><span class="desconto--porcentagem"><?php echo $percentageOffer . '% OFF'; ?></span></p></p>
                <span class="valor--parcelamento"><?php echo '4x R$ ' . number_format( $parcel, 2, ',', '')  . ' sem juros'; ?></span>
            <?php 
            else:  
            ?>    
                <span class="valor--antigo"></span>
                <p class="valor"><?php echo 'R$ ' . number_format( $item['price'], 2, ',', ''); ?><span class="desconto--porcentagem"></span></p>
                <span class="valor--parcelamento"><?php echo '4x R$ ' . number_format( $parcel, 2, ',', '') . ' sem juros'; ?></span>
            <?php endif; ?>
            <div class="texto--produto">
                <p>
                    <?php echo $item['short_description']; ?>
                </p>
            </div>
        </div>
    </a>

</div>

<?php
}


/**
 * Takes all products categories and return in array
 */
function get_array_category_product() {
    //get all categories
    $product_categories = get_terms( 'product_cat', [
        'orderby'    => 'name',
        'order'      => 'asc',
        'hide_empty' => true,
    ]);

    //create array to store categories
    $allCategories = [];

    //the first loop populate the array with only the parent categories
    foreach( $product_categories as $key => $category ){
        
        if( $category->parent == 0 ){
            if( $category->slug == 'sem-categoria') {
                continue;
            }
            $allCategories[ $key ]['term_id'] = $category->term_id;
            $allCategories[ $key ]['name'] = $category->name;
            $allCategories[ $key ]['slug'] = $category->slug;
            $allCategories[ $key ]['parent'] = $category->parent;
        }
        return $allCategories;
    }
}


function ndt_get_variations_array( $product ) {
    
    foreach( $product->get_variation_attributes() as $taxonomy => $terms_slug ){
        // To get the attribute label (in WooCommerce 3+)
        $taxonomy_label = wc_attribute_label( $taxonomy, $product );
    
        // Setting some data in an array
        $variations_attributes_and_values[$taxonomy_label] = [];
        foreach($terms_slug as $term){
            
            // Getting the term object from the slug
            $term_obj  = get_term_by('slug', $term, $taxonomy);
            $variations_attributes_and_values[$taxonomy_label][] = [
                'ID' => $term_obj->term_id, // The ID  <==  <==  <==  <==  <==  <==  HERE
                'name' => $term_obj->name, // The Name
                'slug' => $term_obj->slug, // The Slug
                'taxonomy' => $term_obj->taxonomy, // The Taxonomy
            ];
    
            // Setting the terms ID and values in the array
        }
    }

    return $variations_attributes_and_values;
}

/*
function ndt_get_variations_array( $product ) {
    
    foreach( $product->get_variation_attributes() as $taxonomy => $terms_slug ){
        // To get the attribute label (in WooCommerce 3+)
        $taxonomy_label = wc_attribute_label( $taxonomy, $product );
    
        // Setting some data in an array
        $variations_attributes_and_values[$taxonomy] = array('label' => $taxonomy_label);
        foreach($terms_slug as $term){
            
            // Getting the term object from the slug
            $term_obj  = get_term_by('slug', $term, $taxonomy);
    
            $term_id   = $term_obj->term_id; // The ID  <==  <==  <==  <==  <==  <==  HERE
            $term_name = $term_obj->name; // The Name
            $term_slug = $term_obj->slug; // The Slug
            $term_taxonomy = $term_obj->taxonomy; // The Taxonomy
            // $term_description = $term_obj->description; // The Description
    
            // Setting the terms ID and values in the array
            echo '<pre>';
            print_r(
                
            );
        }
    }
}
*/