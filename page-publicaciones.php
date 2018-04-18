<?php
/*
    Template Name: Publicaciones

*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->
   

        <div class="container">
            
         <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
            
                <div class="row col95">
        <div class="col-md-3">
            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Seleccionar</a>
              <?php $row = 1; if(get_field('front_tabs')): ?>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                
                <?php while(has_sub_field('front_tabs')): ?>

                <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>
                
              <li class="<?php if($row == 1) { echo 'active'; } ?>"><a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab"> <?php echo $title;?></a></li>
              <?php $row++; endwhile; ?>
            </ul>
            <?php endif; wp_reset_query();?>
        </div>
        
        
        
        <div class="col-md-9 pright"><div class="row listado">
          <?php $row = 1; if(get_field('front_tabs')): ?>

                <div id="content" class="tab-content">
                    
                    <?php while(has_sub_field('front_tabs')): ?>


                    <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?> ></h2><hr></div>
                        
              
                       <?php

// check if the flexible content field has rows of data
if( have_rows('publicaciones') ):

 	// loop through the rows of data
    while ( have_rows('publicaciones') ) : the_row();
                        
                       // check current row layout
        if( get_row_layout() == 'bloques' ):
                        
                        

        	// check if the nested repeater field has rows of data
        	if( have_rows('formularios') ):

			 	
			 	// loop through the rows of data
			    while ( have_rows('formularios') ) : the_row();

					$nombre_bloque = get_sub_field('nombre_bloque'); $link_bloque = get_sub_field('link_bloque'); ?>

						<a href="<?php echo $link_bloque;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $nombre_bloque;?></h2>
                        </div>
                    </a>

				<?php endwhile;

				

			endif;

        endif;
                        
          
                        
                        
               if( get_row_layout() == 'listas' ): ?>
                        
                        <div class="row">

        	
        <?php	if( have_rows('lista') ): ?>

			 	
			 	
		<?php	    while ( have_rows('lista') ) : the_row();

					$anio_lista = get_sub_field('anio_lista'); $link_articulos = get_sub_field('link_articulos'); $link_public = get_sub_field('link_public'); $link_capitulos = get_sub_field('link_capitulos'); ?>
                    
                    <div class="col-xs-6 col-sm-4 materiasanteriores">
 <?php if( $anio_lista ): ?><h1 class="listadoh1especial"><?php echo $anio_lista;?> 
                     </h1> <?php endif; ?>
                        <ul class="lista-inline">
                    <?php if( $link_articulos ): ?> <li><a href="<?php echo $link_articulos;?>">Artículos publicados</a></li><?php 	endif; ?>
                 <?php if( $link_public ): ?>     <li><a href="<?php echo $link_public;?>">Publicaciones en reuniones científicas</a></li>   <?php 	endif; ?>
                 <li> <?php if( $link_capitulos ): ?>   <a href="<?php echo $link_capitulos;?>"><?php 	endif; ?>Capítulos de libros</a></li>
                       </ul> </div>
				<?php endwhile; ?>

				

		
				<?php 	endif; ?>
</div>
    				<?php 	    endif;              
                        
                        
                        if( get_row_layout() == 'listas_anteriores' ):
                        
                        

        	// check if the nested repeater field has rows of data
        	if( have_rows('lista') ): ?>
<div class="materiasanteriores">
			 	<ul class="lista-inline">
			 	
		<?php	    while ( have_rows('lista') ) : the_row();

					$nombre_item = get_sub_field('nombre_item'); $link_item = get_sub_field('link_item'); ?>

                    <li><a href="<?php echo $link_item;?>" target="_blank"> <?php echo $nombre_item;?></a></li>
                        

				<?php endwhile; ?>

				
</ul></div>
		
				<?php 	endif;

        endif;             
                        
                        
                        
                     endwhile;  ?>
                    
				<?php endif;  ?>
                                
                        
                        
                        
                        
                    </div>


                    <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
