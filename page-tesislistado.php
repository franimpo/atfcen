<?php
/*
    Template Name: Editor HTML

*/

get_header(); ?>

    <article>
        <div class="container">
        <div id="breadcrumb"><?php if(function_exists('bcn_display'))
        {        bcn_display();    }?>
             </div>
            
            
            <div class="row listado">
                <div class="col-xs-12 col-sm-3">

        <div class="navbar-header sidebar-header">
        </div>

                    <nav id="navbar" class="menuside">
            <ul>
                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>">Volver al índice</a></li>
                
            </ul>
        </nav>

                </div>
                
                <div class="col-xs-12 col-sm-9">
                    <div class="tituloseccion"><h2><?php the_title(); ?></h2><hr></div>
                 <?php the_field('tesis_listado'); ?>

                </div>
                <div class="col-xs-12 col-sm-2">
                    
                </div>

            </div>


        </div>
    </article>

   <?php

get_footer(); ?>
