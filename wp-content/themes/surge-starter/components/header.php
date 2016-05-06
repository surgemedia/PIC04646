<header class="banner">


<nav class="navbar text-center">
<?php if(false == is_front_page()): ?>
 <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img height="190" src="<?php echo get_field('logo','option') ?>" alt=""></a>
<?php endif; ?>

  <div class="container">
  <div class="row">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header mobile">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <ul id="icon-nav" class="mobile col-xs-8 hidden-sm hidden-md hidden-lg">
        <li class=""><a href="<?php echo get_field('pay_your_bill','option') ?>"><span >Pay</span></a></li>
        <li class=""><a href="<?php echo get_field('shop_online','option') ?>"><span>Shop</span></a></li>
        <li class=""><a href="<?php echo get_field('download_menu','option') ?>"><span>Download Menu</span></a></li>
      </ul>
        <div class="phone hidden-sm hidden-md hidden-lg col-xs-12"><a href="<?php echo get_field('telephone_link','option'); ?>"><span><?php echo get_field('telephone','option') ?></span></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse">
      <!-- <ul class="nav navbar-nav"> -->
        <?php
      if (has_nav_menu('primary_navigation')) :
         wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
      endif;
      ?>
      <!-- </ul> -->
     
      <ul id="icon-nav" class="hidden-xs col-md-4 nav navbar-nav float-left">
        <li class="col-md-6"><a href="<?php echo get_field('pay_your_bill','option') ?>"><i class="icon-cards"></i><span >Pay<br>Your Bill</span></a></li>
        <li class="col-md-6"><a href="<?php echo get_field('shop_online','option') ?>"><i class="icon-trolly"></i><span>Shop<br>Online</span></a></li>
        <li class="col-md-6"><a href="<?php echo get_field('telephone_link','option') ?>"><i class="icon-telephone"></i><span><?php echo get_field('telephone','option') ?></span></a></li>
        <li class="col-md-6"><a href="<?php echo get_field('download_menu','option') ?>"><i class="icon-fork"></i><span>Download<br>Menu</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </div><!-- /.container-fluid -->
<?php if(true == is_front_page()): ?>
    <a id="homepage-logo" class="brand img-responsive" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_field('logo','option') ?>" alt="Big Logo"></a>
<?php endif; ?>
</nav>
</header>