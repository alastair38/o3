
<article id="post-<?php the_ID(); ?>" class="col s12 white-text center" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="screen-reader-text"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
	<?php the_post_thumbnail( 'full', array( 'class' => 'responsive-img' ) );?>
	<div class="entry-content" itemprop="articleBody">
	<?php the_content(); ?>
</div>


</article> <!-- end article -->
