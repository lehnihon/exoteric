<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>
	<div class="col grid_4_of_12 sidebar-background">

		<div role="complementary">
			<h4 class="sidebar-title">Terapeutas</h4>
			<?php
			$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category_name' => 'terapeutas' );

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
