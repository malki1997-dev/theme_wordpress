
<?php 
/* 
Template Name: blog
*/
?>



<?php get_header(); ?>
<?php get_template_part('includes/section','content');?>

<h1 class="titre-blog">La bonne information c'est nous!</h1>
<h3 class="titre-blog">** Dernierement publiés **</h3>


<!--** CATEGORIES ****-->

<select class="categories" name="forma" onchange="location = this.value;">
  <option value="">Choisi votre Categorie</option>
<option value="sport.html">Sport</option>
<option value="Politique.html">Politique</option>
<option value="commerce.html">Commerce</option>
<option value="sante.html">Santée</option>

</select>


<div class="container-post-blog ">

<!--*** 1 er poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesport/sp1.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagdetailler1.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 2 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesport/sp2.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler2.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 3 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesport/sp3.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler3.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 4 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagepol/pol1.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler4.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 5 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagepol/pl2.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler5.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 6 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagepol/pl4.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler6.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 7 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesant/san1.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler7.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 8 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesant/san2.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler8.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 9 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagesant/san3.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler9.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 10 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagecomer/comer1.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler10.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 11 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagecomer/comer2.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler11.html" class="btn btn-primary">voir plus</a>
  </div>
</div>

<!--*** 12 eme poste **** -->

<div class="card" style="width: 18rem;">
  <img src="<?php bloginfo('template_url') ?>/imagecomer/comer3.webp" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="pagedetailler12.html" class="btn btn-primary">voir plus</a>
  </div>
</div>


</div>
</div>


<?php get_footer(); ?>