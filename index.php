<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header( 'shop' ); ?>

	<div id="primary" class="site-content" role="main">
		<div id="bannercontainer" class="row">
			<div class="col grid_12_of_12 efeito-cinza">
				<?php 
				    echo do_shortcode("[metaslider id=28]"); 
				?>	
			</div>			
		</div> <!-- /#bannercontainer -->
	</div> <!-- /#primary.site-content.row -->
	<div id="secondary">
		<div class="site-content">
			<h3>MASSAGENS</h3>
			<div class="row">
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			    ?>
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
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div id="tertiary">
		<div class="site-content">
			<h3>Terapeutas</h3>
			<?php
			$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category_name' => 'terapeutas' );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<?php
				if($i % 3 == 0):
				?>
					<div class="row">	
				<?php endif ?>  

					<div class="col grid_4_of_12">
						<?php if ( has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail(); ?>
							</a>
						<?php endif; ?>
						<h4><?php the_title();?></h4>
	                    <a href="<?php the_permalink(); ?>" class="saiba-mais">
	                    	saiba+
	                    </a>
	            	</div>

	            <?php 
	            $i++;
	            if($i % 3 == 0): 
	            ?>
					</div>
				<?php endif ?>
			<?php 
			endforeach; 
			wp_reset_postdata();?>
		</div>
	</div>
	<div id="quaternary">
		<div class="site-content">
			<h3>ESTÉTICA</h3>
			<div class="row">
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			    ?>
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
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div id="quinary">
		<div class="site-content">
			<h3>CURSOS</h3>
			<div class="row">
			    <?php

			        $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'categoria', 'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			    ?>
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
			    <?php endwhile; ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'newsletter' ); ?>

	<ul class="redes_sociais_bot">
		<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCNkHrw4ujO_bUW7nmrPF1TA"></a></li>
		<li class="instagram"><a target="_blank" href="https://instagram.com/henjioficial"></a></li>
		<li class="twitter"><a target="_blank" href="https://twitter.com/henjioficial"></a></li>
		<li class="facebook"><a target="_blank" href="https://www.facebook.com/henjioficial"></a></li>
	</ul>	
<?php get_footer(); ?>
