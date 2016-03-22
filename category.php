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
				
				<div class="row">
					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-fatima'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>	
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-giselia-kumagai'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-esther-luiza'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>
				</div>
			
				<div class="row">
					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-antonia-gabrielle'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>	
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-roseli'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-stefany-shorrayla'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>
				</div>

				<div class="row">
					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-pamela'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>	
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-tatiane-dantes'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-cristina-digiorgi'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>
				</div>

				<div class="row">
					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'quiroprata-walfrido-p-cunha'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>	
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
					endforeach; 
					wp_reset_postdata();
					?>

					<?php 
					$args = array( 'posts_per_page' => 1,  'category_name' => 'terapeutas','name' => 'terapeuta-marcos'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
					?>
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
					endforeach; 
					wp_reset_postdata();
					?>

					
				</div>

			<?php else : ?>

				<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12 -->

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
