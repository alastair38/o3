<?php get_header();
$title = single_cat_title("", false);
?>



<main class="container">

		<div class="row" role="main">

		    <div class="col s12">
					<header>
						<h1 class="page-title center">About 03</h1>
					</header>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'blog' ); ?>

				<?php endwhile; ?>

					<?php// joints_page_navi(); ?>

				<?php else : ?>

					<?php // get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>


			</div> <!-- end row -->

		</main> <!-- end main -->



<?php get_footer(); ?>
