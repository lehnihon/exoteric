<?php
/**
 * The template for displaying an archive page for Categories.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content row" role="main">

		<div class="col grid_12_of_12">

			<?php if ( have_posts() ) : ?>

				<h1 class="entry-title"><?php echo single_cat_title( '', false ); ?></h1>
				<p>Conheça as masssagistas da Clínica Massagens Exóticas.</p><br/>

				<?php $i = 0; ?>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( $i % 3 == 0 ) : ?>
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
				    <?php $i++; ?>
					<?php if ( $i % 3 == 0 ) : ?>
						</div>
					<?php endif ?>
				<?php endwhile; ?>
				<?php if ( $i % 3 != 0 ) : ?>
					</div>
				<?php endif ?>

				<?php quark_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12 -->

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
