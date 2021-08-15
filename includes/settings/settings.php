<?php


if ( ! function_exists( 'plslider_admin_menu' ) ) {
    function plslider_admin_menu() {
        add_menu_page( 'Product Slider', 'Product Slider', 'manage_options', 'product-slider', 'plslider_menu_func', 'dashicons-align-wide', 55 );
    }
    add_action( 'admin_menu', 'plslider_admin_menu' );
}


if ( ! function_exists( 'plslider_menu_func' ) ) {
    function plslider_menu_func() {
        global $slider_number;
        global $plslider_auto;
        global $plslider_i_seconds;
        global $plslider_products_ids;
        global $pro_img_width;
        global $plslider_show_arrows;
        global $plslider_show_dots;
        global $plslider_dots_style;
        ?>

        <h1>Product Slider Settings</h1>

        <p><strong>Note:</strong> Here is your shortcode for this slideshow <code>[show_devtarik_product_slider]</code></p>

        <form action="" method="post">
            <table class="form-table" role="presentation">    
            
                <tr>
                    <th scope="row"><label for="auto_slide">Auto Slide</label></th>
                    <td>
                        <input type="radio" name="auto_slide" value="yes" <?php if ( $plslider_auto === "yes" ) { echo "checked"; } ?> />
                        <label for="yes">Yes</label>

                        <br />
                        
                        <input type="radio" name="auto_slide" value="no" <?php if ( $plslider_auto === "no" ) { echo "checked"; } ?> />
                        <label for="no">No</label>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="i_seconds">Interval Time (ms)</label></th>
                    <td>
                        <input type="number" name="i_seconds" class="regular-name" value="<?php echo $plslider_i_seconds; ?>" />
                        <p class="description">Choose how many mili seconds (ms) you wanna wait until slide to next slider automatically.</p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="slider_number">Slider Number</label></th>
                    <td>
                        <input type="number" name="slider_number" class="regular-name" value="<?php echo $slider_number; ?>" />
                        <p class="description">Decide how many products (latest products) you want to add to the slider. <br /><strong>Note: You must leave "Custom Sliders (Products IDs)" field empty if you want to add latest products.</strong></p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="products_ids">Custom Sliders (Products IDs)</label></th>
                    <td>
                        <input type="text" name="products_ids" class="regular-name" value="<?php echo $plslider_products_ids; ?>" placeholder='Eg: 65, 20, 45' />
                        <p class="description">Enter the custom products IDs manually which you want to add to the slider. <strong>Remember the format; example: (65, 20, 45).</strong></p>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="pro_img_width">Product Image Width (px)</label></th>
                    <td><input type="number" name="pro_img_width" class="regular-name" value="<?php echo $pro_img_width; ?>" /></td>
                </tr>

                <tr>
                    <th scope="row"><label for="arrows_visibility">Show Arrows</label></th>
                    <td>
                        <input type="radio" name="arrows_visibility" value="yes" <?php if ( $plslider_show_arrows === "yes" ) { echo "checked"; } ?> />
                        <label for="yes">Yes</label>

                        <br />

                        <input type="radio" name="arrows_visibility" value="no" <?php if ( $plslider_show_arrows === "no" ) { echo "checked"; } ?> />
                        <label for="no">No</label>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="dots_visibility">Show Dots</label></th>
                    <td>
                        <input type="radio" name="dots_visibility" value="yes" <?php if ( $plslider_show_dots === "yes" ) { echo "checked"; } ?> />
                        <label for="yes">Yes</label>

                        <br />

                        <input type="radio" name="dots_visibility" value="no" <?php if ( $plslider_show_dots === "no" ) { echo "checked"; } ?> />
                        <label for="no">No</label>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="dots_style">Dots Style</label></th>
                    <td>
                        <input type="radio" name="dots_style" value="circle" <?php if ( $plslider_dots_style === "circle" ) { echo "checked"; } ?> />
                        <label for="circle">Circle</label>

                        <br />

                        <input type="radio" name="dots_style" value="bar" <?php if ( $plslider_dots_style === "bar" ) { echo "checked"; } ?> />
                        <label for="bar">Bar</label>
                    </td>
                </tr>

            </table>

            <p class="submit"><input class="button button-primary" name="plslider_admin_form" type="submit" value="Submit" /></p>
        </form>

        <?php
    }
}


if ( isset( $_REQUEST['plslider_admin_form'] ) ) {
    if ( $_REQUEST['plslider_admin_form'] == 'Submit' ) {
        
        // How many slider?
        update_option( "plslider_num", $_POST['slider_number'] );

        // Yes & No for auto slide
        if ( $_POST['auto_slide'] === "yes" ) {
            update_option( "plslider_auto_slider", "yes" );
        } else if ( $_POST['auto_slide'] === "no" ) {
            update_option( "plslider_auto_slider", "no" );
        } else {
            update_option( "plslider_auto_slider", "yes" );
        }
        
        // Saving Interval time for auto sliding
        update_option( "plslider_i_seconds", $_POST['i_seconds'] );

        // Saving Custom Products IDs
        update_option( "plslider_products_ids", $_POST['products_ids'] );

        // Products Image Width
        update_option( "plslider_product_img_width", $_POST['pro_img_width'] );

        // Arrows Visibility
        update_option( "plslider_show_arrows", $_POST['arrows_visibility'] );

        // Dots Visibility
        update_option( "plslider_show_dots", $_POST['dots_visibility'] );

        // Dots Style
        update_option( "plslider_dots_style", $_POST['dots_style'] );

    }
}