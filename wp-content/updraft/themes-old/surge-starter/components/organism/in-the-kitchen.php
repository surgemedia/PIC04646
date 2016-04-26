	<section id="in-the-kitchen" class="container">
	<h1 class="underline dark text-center">In the Kitchen</h1>
		<?php if (!have_posts()) : ?>
	  <div class="alert alert-warning">
	    <?php _e('Sorry, no results were found.', 'sage'); ?>
	  </div>
	  <?php get_search_form(); ?>
	<?php endif; ?>
	<?php while (have_posts()) : the_post(); ?>
			<?php 
	get_component([
		'template' => 'molecule/link-img-text-title-button',
		'vars' => [
					'col' => 'col-md-4',
					'class' => 'blog-item text-center',
					'img' => 'http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID01-CANAPES.jpg',
					'title' => 'lorem salad',
					'subtitle' => 'larger text',
					'href' => get_permalink()
					]
				]);
 	?>
	<?php endwhile; ?>
	<?php the_posts_navigation(); ?>
	 </section> 