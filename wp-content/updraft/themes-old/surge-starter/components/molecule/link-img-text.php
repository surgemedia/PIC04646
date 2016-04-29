<?php 
	$vars['col'] = $vars[0];
	$vars['class'] = $vars[1];
	$vars['img'] = $vars[2];
	$vars['title'] = $vars[3];
	$vars['content'] = $vars[4];
	$vars['href'] = $vars[5];

 ?>
<div class="<?php echo $vars['class'] ?> <?php echo $vars['col'] ?>">
    <a href="<?php echo $vars['href']; ?>">
        <img alt="<?php echo $vars['title']; ?>" class="img-reponsive" src="<?php echo $vars['img']; ?>">
        </img>
        	<p><?php echo $vars['content']; ?></p>
            <span class="text-center col-xs-12">
                <?php echo $vars['title'] ?>
            </span>
    </a>
</div>