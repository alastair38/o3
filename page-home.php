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



					<a href="#about-pathways" class="waves-effect red lighten-2 btn-large waves-circle waves-light btn-floating"><i class="mdi mdi-chevron-down"></i></a>
				</div>
			</div>
			<div id="about-pathways" class="row center"  >
				<div class="col s12 white-text" style="font-size: 2em; padding: 3em 3em 2em 3em; font-weight: 100;">
						Here at Ironed Out we're crowdsourcing images of people living with dementia to provide the media and public with an alternative to those stereotypical stock images. With your help we can go from this...
				</div>

				<div class="col s4">
						<img style="border-radius: 50%; width: 200px; height: 200px;" src="http://i.dailymail.co.uk/i/pix/2012/05/07/article-2140884-12F97CF7000005DC-966_472x479.jpg">
				</div>
				<div class="col s4">
						<img style="border-radius: 50%; width: 200px; height: 200px;" src="https://www.alzinfo.org/wp-content/uploads/2015/03/alzheimers-lady-300x226.jpg">
				</div>
				<div class="col s4" >
						<img style="border-radius: 50%; width: 200px; height: 200px;" src="http://travel.nationalgeographic.com/u/TvyamNb-BivtNwcoxtkc5xGBuGkIMh_nj4UJHQKupr-MR-UKHbMPCSEd88_jIABEf_JY3hPCbG1S/">
				</div>
					<a href="#your-say" style="margin-top: 3rem;" class="waves-effect red lighten-2 btn-large waves-circle waves-light btn-floating"><i class="mdi mdi-chevron-down"></i></a>
			</div>
			<div id="your-say" class="row center">
				<div class="col s12 white-text" style="font-size: 2em; padding: 3em; font-weight: 100;">
						...to something a bit more like this!
				</div>

				<?php


				$args = array( 'posts_per_page' => 3, 'post_type'=> 'post' );

				$myposts = get_posts( $args );

				foreach ( $myposts as $post ) : setup_postdata( $post );
				$image = get_field('your_image');
				echo '<div class="col s4" style="position: relative;"><a href="' . get_the_permalink() . '"><img style="border-radius: 50%; width: 200px;" src="' . $image[sizes][thumbnail] . '" /></a></div>';
				?>

				<?php endforeach;
				wp_reset_postdata();?>


			</div>
			<div class="col s12 center" style="padding: 2rem 0;">

						<a class="btn-large" href="/form">Click here to add your images</a>
			</div>
</main>









<?php get_footer(); ?>
