
<?php while (have_posts()) : the_post(); ?>
<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			get_component([ 
					'template' => 'atom/image-backing',
					'vars' => [get_field("default_background", "option")] ]);

 ?>
 	<article id="blog-content" class="white-bg">
 	<div class="container">
 		<div class="col-md-10 col-md-offset-1">
 		<h1 class="underline dark text-center">In the Kitchen</h1>
 		<a class="btn" href="/in-the-kitchen/">Back to list</a>
 		<header>
 			<span class="cat"><?php echo get_the_category()[0]->name ?></span>
 			<h2><?php the_title(); ?></h2>
 			<small><?php the_date("M d, Y","Posted on ", " by "); ?><?php the_author(); ?></small>
 		</header>
 		<div class="content">
 			<img src='<?php echo getFeaturedUrl(get_the_id())?>' width="600px" alt="">
 			<?php the_content(); ?>
 		</div>
 		<footer>
 			<a class="btn" href="#">Back to list</a>
 		</footer>
 		</div>
 		</div>
 		<p id="simple-contact" class="text-center">
 		<?php echo get_field('blog_footer_text','option'); ?>
 		</p>
 	</article>

<?php endwhile; ?>