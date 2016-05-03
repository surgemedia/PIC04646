<div class="container">
<section id="panel-menu" class="row">
	
	<?php

			// check if the repeater field has rows of data
			if( have_rows('panels') ):
	
			 	// loop through the rows of data
			    while ( have_rows('panels') ) : the_row();
			        // display a sub field value 
									
							get_component([
								'template' => 'molecule/transparent-box',
								'remove_tags' => ['p'],
								'vars' => [
											'col-md-5 col-sm-12',
											'trans-box text-center',
											'icon-'.get_sub_field('icon'),
											get_sub_field('title'),
											NULL,
											get_component([
												'template' => 'atom/button-list',
												'return_string' => true
												])
											]
										]);
						
		  endwhile;

			else :

			    // no rows found

			endif;

			?>





</section>
</div>