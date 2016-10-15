
	<article class="card">
		 <div class="card-content">
<h2><?php the_title()?></h2>
<?php the_excerpt();

 echo '<a class="btn" href="'. get_the_permalink() .'">Details</a>';


 ?>
			 <?php get_template_part( 'parts/content', 'share' ); ?>
		 </div>

	 </article>
