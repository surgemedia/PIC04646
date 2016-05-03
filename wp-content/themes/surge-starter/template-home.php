<?php
/**
 * Template Name: TID01 - Home
 */
?>

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
					'vars' => [getFeaturedUrl(get_the_id())] ]);

 ?>
	<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			get_component([ 'template' => 'organism/panel-menu' ]);
	 ?>
	<?php 
			/*=============================================
			=            	Online Shop Menu       		   
			= @components
				+ molecule/page-section-title
				+ molecule/link-img-text
			=============================================*/
			get_component([ 'template' => 'organism/shop-menu' ]);
	 ?>
	<?php 
			/*=============================================
			=            	How to order       		   
			= @components
				+ molecule/transparent-box
				+ atom/single-button
			=============================================*/
			get_component([ 'template' => 'organism/how-to-order' ]);
	 ?>
	<?php 
			/*=============================================
			=            	Testimonials      		   
			= @components
				+ molecule/img-text
			=============================================*/
			get_component([ 'template' => 'organism/testimonials',
							'vars' => [	
							'class' => 'white-bg'

							]
						]);
	 ?>
	<?php 
			/*=============================================
			=            	Our Clients      		   
			= @components
				+ molecule/img-text
			=============================================*/
			get_component([ 'template' => 'organism/our-clients' ]);
	 ?>

<?php endwhile; ?>
