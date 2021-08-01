<?php
    while ( $plslider_slider->have_posts() ) : $plslider_slider->the_post();
    $product = wc_get_product( $post->ID );
?>
    
    <div class="col-8 col-sm-10 slider justify-content-center">
        <div class="contents mr-1">

            <h2><?php the_title(); ?></h2>
            <p class="details text-secondary"><?php echo wp_trim_words( get_the_content(), 15, ' more...' ); ?></p>
            <p class="price">Only @ <?php echo $product->get_price(); ?></p>

        </div>

        <div class="image ml-1 d-flex align-items-center"><?php the_post_thumbnail(); ?></div>
    </div>

<?php endwhile; ?>