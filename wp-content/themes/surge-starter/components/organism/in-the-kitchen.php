	<section id="in-the-kitchen" class="container">
	<h1 class="underline dark text-center"><?php echo $vars['title'];?></h1>
		<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>
	<?php while (have_posts()) : the_post(); ?>
			<?php 
			$category=get_the_category()[0];
	get_component([
		'template' => 'molecule/link-img-text-title-button',
		'vars' => [
					'col' => 'col-md-4',
					'class' => 'blog-item text-center',
					'img' => getFeaturedUrl(get_the_id()),
					'title' => $category->name,
					'subtitle' => get_the_title(),
					'href' => get_permalink()
					]
				]);
 	?>
	<?php endwhile; ?>
	<?php the_posts_navigation(); ?>
	 </section> 