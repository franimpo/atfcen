<?php
/*
 * Template Name: Galería de Imagenes
 * Template Post Type: post,
 */
  
 get_header();  ?>

<div class="container">
    <div id="breadcrumb">
            <?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
        </div>
  
<div class="row">
    <div class="col-xs-9"><?php the_title() ?></div>
    <div class="col-xs-3"><?php the_title() ?></div>
    
</div>


</div>
    
    
    <?php get_footer();  ?>