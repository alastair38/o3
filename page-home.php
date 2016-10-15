<?php
/*
Template Name: Home Page
*/

get_header(); ?>


	<main id="gettingStarted">

			<div class="row center">
				<div class="col s12">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'parts/loop', 'page-home' ); ?>


						<?php endwhile; endif; ?>



					<a href="#about-o3" class="btn-large waves-circle waves-light btn-floating"><i class="mdi mdi-chevron-down"></i></a>
				</div>
			</div>
			<div id="about-o3" class="row"  >
				<div class="col about-text s12">
					The premise of O3 is that neuroscience research should be aligned with a set of ethically grounded goals for human development, health and well-being. This alignment drives the need for an integrated approach to a distinctive set of global problems. The major goal of O3 is to initiate a global research consortium, organized across key international sites, to identify and to tackle the most pressing international challenges at the intersection of neuroscience, ethics and social science.
				</div>



				<div class="col s12 center">

							<a class="btn-large waves-light" href="<?php echo get_permalink( get_option('page_for_posts' ) );?>">Learn More About O3</a>
				</div>


			</div>


				<!-- <?php


				//$args = array( 'posts_per_page' => 3, 'post_type'=> 'post' );

				//$myposts = get_posts( $args );

				//foreach ( $myposts as $post ) : setup_postdata( $post );
				//$image = get_field('your_image');
				//echo '<div class="col s4" style="position: relative;"><a href="' . get_the_permalink() . '"><img style="border-radius: 50%; width: 200px;" src="' . $image[sizes][thumbnail] . '" /></a></div>';
				//?>

				//<?php //endforeach;
				wp_reset_postdata();?>
 -->


</main>









<?php get_footer(); ?>
