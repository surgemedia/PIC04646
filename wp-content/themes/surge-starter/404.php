
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
							'It looks like you took <br>a wrong turn to the kitchen',
							'Sorry, but the page you were trying to view does not exist.'
							]
						]);
	 ?>
	 </div> 