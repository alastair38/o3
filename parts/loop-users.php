
<div class="col s4">
	<article class="card medium">
		 <div class="card-image waves-effect waves-block waves-light">
			 <?php
			 $your_image = get_field('your_image');
			 if($your_image) {
				 echo '<img src="' . $your_image[url] . '" class="activator"/>';
			 }
				?>
		 </div>
		 <div class="card-content">
			 <span class="card-title activator grey-text text-darken-4"><?php echo get_user_meta($user->ID, 'description', true); ?><i class="mdi mdi-chevron-up right"></i></span>
			 <p>
			<?php
		$image_url = get_attachment_link($your_image[id]);
								echo '<a class="btn" href="'. get_the_permalink() .'">Details</a>';
?>
			 <?php get_template_part( 'parts/content', 'share' ); ?>
		 </div>
		 <div class="card-reveal">
			 <span class="card-title grey-text text-darken-4">Description<i class="mdi mdi-close right"></i></span>
			 <?php echo get_user_meta($user->ID, 'description', true);?>
		 </div>
	 </article>

</div>
