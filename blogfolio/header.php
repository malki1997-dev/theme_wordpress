<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<?php

wp_head();

?>

</head>
<body>


<!--**************** NAV BAR *************************************************** -->

    <nav class="navbar navbar-expand-md bg-info navbar-dark justify-content-center">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Navbar</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
         
         <?php
         
         wp_nav_menu(

         array(

         'menu'=>'primary',
         'container'=>'',
         'theme_location'=>'primary',
         'items_wrap'=>'<ul id="" class="navbar-nav" flex-column text-sm-center text-md-left">%3$s</ul>'
              )
                     );
         
         
         ?>
         
         
        </div>
      </nav>