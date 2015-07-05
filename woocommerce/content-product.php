<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;
?>
<?php
if($woocommerce_loop['loop'] % 3 == 0):
?>
	<div class="row">	
<?php endif ?>  

    <div class="col grid_4_of_12">    
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID ); else echo '<img src="'.woocommerce_placeholder_img_src().'" />'; ?>	                                           
        </a>
        <h4><?php the_title(); ?></h4>
        <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="saiba-mais">
        	saiba+
        </a>
    </div>
<?php 
// Increase loop count
$woocommerce_loop['loop']++;
if($woocommerce_loop['loop'] % 3 == 0): 
?>
	</div>
<?php endif ?>

