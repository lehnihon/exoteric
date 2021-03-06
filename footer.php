<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>
		
		<?php	do_action( 'quark_after_woocommerce' ); ?>
			<?php get_template_part( 'newsletter' ); ?>

			<ul class="redes_sociais_bot">
				<li class="youtube"><a target="_blank" href="#"></a></li>
				<li class="instagram"><a target="_blank" href="#"></a></li>
				<li class="twitter"><a target="_blank" href="#"></a></li>
				<li class="facebook"><a target="_blank" href="#"></a></li>
			</ul>	
	</div> <!-- /#maincontentcontainer -->

	<div id="footercontainer">

		<footer class="site-footer" role="contentinfo">
			<div class="row">
				<div class="col grid_4_of_12">
					<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo_exoteric.png"; ?>" alt="" /><br/><br/>
					<h5>Massagem no Centro de São Paulo</h5>
					<p>
						A Clínica de Massagens Exóticas é uma clínica de massagem no Centro de São Paulo.<br/>
						Somos especializados em massagens terapêuticas, tântricas, Mix Massagem, Shiatsu, Quick Massagem, Acumputura e todos os tipos de massagem.<br/>
						Também oferecemos Curso de Massagem.
					</p>
				</div>		
				<div class="col grid_6_of_12">
					<div class="row">
						<div class="col grid_6_of_12">	
							<h5>Massagens</h5>
							<ul>
							    <?php

							        $args = array( 'post_type' => 'product', 'product_cat' => 'massagens', 'orderby' => 'rand' );
							        $loop = new WP_Query( $args );

							        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
							    ?>
					                <li>   
					                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
					                        <?php the_title(); ?>                                    
					                    </a>
					                  
					                </li>
							    <?php endwhile; ?>
							    <?php wp_reset_query(); ?>
							</ul>
						</div>
						<div class="col grid_6_of_12">	
							<h5>Cursos</h5>
							<ul>
							    <?php

							        $args = array( 'post_type' => 'product',  'product_cat' => 'cursos', 'orderby' => 'rand' );
							        $loop = new WP_Query( $args );

							        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
							    ?>
					                <li>   
					                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
					                        <?php the_title(); ?>                                    
					                    </a>
					                  
					                </li>
							    <?php endwhile; ?>
							    <?php wp_reset_query(); ?>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col grid_6_of_12">	
							<h5>Psicoterapia</h5>
							<ul>
							    <?php

							        $args = array( 'post_type' => 'product',  'product_cat' => 'psicoterapia', 'orderby' => 'rand' );
							        $loop = new WP_Query( $args );

							        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
							    ?>
					                <li>   
					                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
					                        <?php the_title(); ?>                                    
					                    </a>
					                  
					                </li>
							    <?php endwhile; ?>
							    <?php wp_reset_query(); ?>
							</ul>
						</div>
						<div class="col grid_6_of_12">	
							<h5>Estética</h5>
							<ul>
							    <?php

							        $args = array( 'post_type' => 'product',  'product_cat' => 'estetica', 'orderby' => 'rand' );
							        $loop = new WP_Query( $args );

							        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
							    ?>
					                <li>   
					                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
					                        <?php the_title(); ?>                                    
					                    </a>
					                  
					                </li>
							    <?php endwhile; ?>
							    <?php wp_reset_query(); ?>
							</ul>
						</div>
					</div>

				</div>
				<div class="col grid_2_of_12">
					<h5>Atendimento</h5>
					<ul> 
		                <li>   
		                    <a href="<?php echo esc_url( home_url( '/' ))."/localizacao/"; ?>">Localização</a>
		                </li>
		                <li>   
		                    <a href="<?php echo esc_url( home_url( '/' ))."/sobre/"; ?>">Contato</a>
		                </li>
		                <li><a>11 3203-1478</a></li>
		                <li><a>11 98937-2110</a></li>	           
					</ul>
				</div>
			</div>

		</footer> <!-- /.site-footer.row -->


	</div> <!-- /.footercontainer -->
	<div id="formas-pgto">
		<footer class="site-footer row" style="padding:20px; 0">
			<div class="col grid_12_of_12">
				<h5 style="color:#505050">Formas de Pagamento</h5>
				<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/formas_pgto.jpg"; ?>" alt="" />
			</div>
		</footer>
	</div>
	<div id="copyrightcontainer">
		<p>
			<strong>© Copyright 2015 - Clínica Massagens Exóticas</strong>
		</p>
	</div>
</div> <!-- /.#wrapper.hfeed.site -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>

$(function() {
    $('.menu-drop-header').on('click',function(e){
        e.preventDefault();
        if ( $(this).next('.menu-drop').is( ":hidden" ) ) {         
            $(this).next('.menu-drop').slideDown( "slow" );
        }else{
            $(this).next('.menu-drop').slideUp( "slow" );
        }
    });
});

</script>
<?php wp_footer(); ?>

</body>

</html>
