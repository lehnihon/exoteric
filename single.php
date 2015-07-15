<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" role="main">
		<div class="row">
			<div class="col grid_8_of_12">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template( '', true );
					}
					?>

					<?php quark_content_nav( 'nav-below' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div> <!-- /.col.grid_8_of_12 -->
		<div class="col grid_3_of_12 sidebar-background">

			<div role="complementary">
				<h4 class="sidebar-title">Terapeutas</h4>
				<?php
				$args = array(  'offset'=> 0, 'category_name' => 'terapeutas' );

				$myposts = get_posts( $args );
				$i = 0;
				foreach ( $myposts as $post ) : setup_postdata( $post );
				?>				
					<div class="row">
						<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
					</div>
				<?php 
				endforeach; 
				wp_reset_postdata();?>
			</div> <!-- /#secondary.widget-area -->

		</div> <!-- /.col.grid_4_of_12 -->
		</div>
	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
