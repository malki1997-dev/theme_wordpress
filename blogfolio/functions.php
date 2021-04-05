
<?php 



function followandrew_menus()
{

$locations=array(

'primary'=>"Desktop Primary Left Sidebar",
'footer'=>"Footer Menu Items"

);

register_nav_menus($locations);

}

add_action('init','followandrew_menus');



//load_css

 function load_css()
 {

wp_enqueue_style('followandrew-style',get_template_directory_uri()."/style.css",array(),'1.0','all');
wp_enqueue_style('followandrew-bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css");
wp_enqueue_style('followandrew-awesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css");

wp_enqueue_script('followandrew-popper',"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js");
wp_enqueue_script('followandrew-jQuery ',"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js");


 }

 add_action('wp_enqueue_scripts','load_css');





?>




