<?php

/*
Template Name: Users
*/

get_header(); ?>



	<main class="container">
			<div class="row" role="main">
				<header class="article-header">


					<h1 class="page-title center"><?php the_title(); ?></h1>


				</header> <!-- end article header -->
				<?php
	$args = array(
	);

	// The Query
	$user_query = new WP_User_Query( array( 'role__not_in' => 'Administrator' ) );

	// User Loop
	if ( ! empty( $user_query->results ) ) {
		foreach ( $user_query->results as $user ) {?>

			<div class="col s6 m4 l3">
				<article class="card">
					 <div class="card-image waves-effect waves-block waves-light">
						 <?php echo '<img class="activator" src="' . get_field('user_image', 'user_' . $user->ID . '') . '" />' ?>
					 </div>
					 <div class="card-content">
						 <h3 class="card-title activator grey-text text-darken-4"><?php echo $user->display_name; ?><i class="mdi mdi-chevron-up right"></i></h3>
						 <p>
							 <?php

							 the_field('work_title', 'user_' . $user->ID . ''); ?>
						 </p>

						 <?php //get_template_part( 'parts/content', 'share' ); ?>
					 </div>
					 <div class="card-reveal">
						 <span class="card-title grey-text text-darken-4">Biography<i class="mdi mdi-close right"></i></span><br />
						 <?php echo get_user_meta($user->ID, 'description', true);?>
						 <?php

						  ?>

					 </div>
				 </article>

			</div>
	<?php	}
	} else {
		echo 'No users found.';
	}
	?>


		</div> <!-- end #main -->

			<?php // get_sidebar(); ?>

	</main> <!-- end main -->



<?php get_footer(); ?>
