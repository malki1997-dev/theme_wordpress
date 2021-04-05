

<?php 
/* 
Template Name: contact
*/
?>


<?php get_header(); ?>



<?php get_template_part('includes/section','content');?>

<div class="container" id="container">

<div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6 pb-5">


                  <!--Form with header-->

                  <form action="mail.php" method="post">
                      <div class="card border-primary rounded-0">
                          <div class="card-header p-0">
                              <div class="bg-info text-white text-center py-2">
                                  <h3><i class="fa fa-envelope"></i> Contactez-nous</h3>
                                  <p class="m-0">Con gusto te ayudaremos</p>
                              </div>
                          </div>
                          <div class="card-body p-3">

                              <!--Body-->
                              <div class="form-group">
                                  <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                      </div>
                                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Entrer votre Nom" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                      </div>
                                      <input type="email" class="form-control" id="nombre" name="email" placeholder="Entrer votre Email" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                      </div>
                                      <textarea class="form-control" placeholder="Ecrivez votre Message" required></textarea>
                                  </div>
                              </div>

                              <div class="text-center">
                                  <input type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                              </div>
                          </div>

                      </div>
                  </form>
                  <!--Form with header-->


              </div>
</div>
</div>



<?php get_footer(); ?>
