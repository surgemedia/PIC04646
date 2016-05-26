<?php
/**
 * Template Name:  Simple Form Page
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
					'vars' => [
										getFeaturedUrl(get_the_id()),
										
									] 
					]);

 ?>
	<div id="top-section" class="coal-trans-bg  white-font">
		<?php 
			$swap_title;
			if(strlen(get_field('title')) <= 0){ $swap_title = get_the_title(); } else { $swap_title = get_field('title'); };
			get_component([
				'template' => 'molecule/title-img-content-buttons',
				'remove_tags' => ['img','h1'],
				'vars' => [
							'container',
							'underline text-center',
							$swap_title,
							apply_filters('the_content',get_the_content()),
							NULL,
							get_component([
								'template' => 'atom/button-list',
								'return_string' => true
							]),
							'button-list col-md-6 col-md-offset-3',
							'col-md-12 col-sm-12  col-xs-12',
							'pull-right'

						]
				]);
			unset($swap_title);
 		?>
	</div>
<?php endwhile; ?>
