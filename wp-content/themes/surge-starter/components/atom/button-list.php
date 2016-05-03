<ul class='list-inline'>
			<?php

			// check if the repeater field has rows of data
			if( have_rows('links') ):

			 	// loop through the rows of data
			    while ( have_rows('links') ) : the_row();
			        // display a sub field value ?>
						<li><a href="<?php the_sub_field('href') ?>" class="btn"><span><?php echo get_sub_field('1st_line') ?></span><span><?php echo get_sub_field('2nd_line') ?></span></a></li>
		  <?php endwhile;

			else :

			    // no rows found

			endif;

			?>

			<!-- <li><a href="" class="btn"><span>Download</span><span>Menu</span></a></li>
			<li><a href="" class="btn"><span>Phone</span><span>Order</span></a></li> -->
</ul>