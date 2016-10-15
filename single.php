<?php

get_header(); ?>

<main class="container">

	<div class="row">

		<div class="col s12" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
				<?php previous_post_link('<span class="col s5 posts_link">%link</span>'); ?>
				<?php next_post_link('<span class="col s5 posts_link right">%link</span>'); ?>




		</div>

		<?php //get_sidebar(); ?>
	<?php endwhile; ?>

	<?php endif; ?>

</div> <!-- end row -->


</main> <!-- end main -->

<?php get_footer(); ?>
