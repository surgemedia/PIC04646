<?php 
	$vars['col'] = $vars[0];
	$vars['class'] = $vars[1];
	$vars['img'] = $vars[2];
	$vars['title'] = $vars[3];
	$vars['content'] = $vars[4];

 ?>
<div class="<?php echo $vars['class'] ?> <?php echo $vars['col'] ?>">
        <img alt="<?php echo $vars['title']; ?>" class="img-responsive" src="<?php echo $vars['img']; ?>" width="130" height="130"></img>
        	<p><?php echo $vars['content']; ?></p>
            <span class="text-center col-xs-12">
                <?php echo $vars['title'] ?>
            </span>
</div>