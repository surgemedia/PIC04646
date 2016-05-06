<?php
/**
 * Template Name: TID02 - Services Page
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
	<div id="top-section" class="coal-trans-bg  white-font">
		<?php 
			get_component([
				'template' => 'molecule/title-img-content-buttons',
				'vars' => [
							'container',
							'underline text-center',
							get_the_title(),
							get_the_content(),
							get_field('image'),
							get_component([
								'template' => 'atom/button-list',
								'return_string' => true
							]),
							'button-list col-md-6 col-md-offset-3',
							'col-md-6 col-sm-12  col-xs-12',
							'pull-right'

							]
						]);
 		?>
	</div>
	<div class="white-bg">
	<?php 
			/*=============================================
			=            	Page Section       		   
			= @components
				+ molecule/page-section-title
			=============================================*/
			get_component([
				'template' => 'molecule/page-section-title',
				'vars' => [
							'page-section-title container text-center',
							get_field("special_heading", "option"),
							get_field("special_content", "option")
							]
						]);

			get_component([
				'template' => 'molecule/page-section-title',
				'vars' => [
							'page-section-title container text-center second',
							get_field("delivery_heading", "option"),
							get_field("delivery_content", "option")
							]
						]);
	 ?>
	 </div> 
	<?php 
			get_component([
				'template' => 'organism/contact-us',
				'vars' => [	
							'background' => 'http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID02-Image-2.jpg'

							]
						]);
	?>
<?php endwhile; ?>