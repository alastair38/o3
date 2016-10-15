<?php $title = get_the_title();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title center" itemprop="headline"><?php echo $title; ?></h1>
  </header> <!-- end article header -->

    <section class="entry-content col s12" itemprop="articleBody">
		<?php the_content();?>

		</section> <!-- end article section -->
	
</article> <!-- end article -->
