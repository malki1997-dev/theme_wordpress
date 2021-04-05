
<?php get_header(); ?>
<?php get_template_part('includes/section','content');?>

  

<div>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url') ?>/imagepol/sept.jpg" alt="Los Angeles" class="im">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url') ?>/imagepol/quatre.jpg" alt="Chicago" class="im">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url') ?>/imagepol/cinq.jpg" alt="New York" class="im">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

</div>



<?php get_footer(); ?>
