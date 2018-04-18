<?php
/*
    Template Name: Acerca

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
             
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                 <?php $row = 1; if(get_field('front_tabs')): ?>
                <?php while(has_sub_field('front_tabs')): ?>

                <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>
                
              <li class="<?php if($row == 1) { echo 'active'; } ?>"><a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab"> <?php echo $title;?></a></li>
              <?php $row++; endwhile; ?>
                  <?php endif; wp_reset_query();?>
                
                 
            </ul>
          
            
            
        </div>
        
        
        
        <div class="col-md-9 pright"><div class="row listado">
          <?php $row = 1; if(get_field('front_tabs')): ?>

                <div id="content" class="tab-content">
                    
                    <?php while(has_sub_field('front_tabs')): ?>


                    <?php $title = get_sub_field('title'); ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?></h2><hr></div>
                        

                         
            <?php

// check if the flexible content field has rows of data
if( have_rows('contenido_acerca') ):

 	// loop through the rows of data
    while ( have_rows('contenido_acerca') ) : the_row(); 

		// check current row layout
        if( get_row_layout() == 'editor_texto' ):
                        
        the_sub_field('texto');
              
    endif;
                        
          if( get_row_layout() == 'bloques' ): ?>
              <?php 

				// check for rows (parent repeater)
				if( have_rows('bloque') ): ?>
					<div class="row">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('bloque') ): the_row(); ?>
                        
                         <?php $bloque_nombre = get_sub_field('bloque_nombre');  $bloque_link = get_sub_field('bloque_link');  ?>
						<a href="<?php echo $bloque_link;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $bloque_nombre;?></h2>
                        </div>
                    </a>
                       

					<?php endwhile;  ?>
                        
					 </div>
				<?php endif;  ?>
                  
     <?php   endif;          
      if( get_row_layout() == 'dos_columnas' ): ?>
     
       <?php if( have_rows('contenido_2c') ): ?>
	<?php while( have_rows('contenido_2c') ): the_row(); 

		// vars
		$imagen = get_sub_field('imagen');
		$texto = get_sub_field('texto');

		?>
                        <div class="row">
                        <div class="col-xs-12 col-md-4"><img class="img-responsive" src="<?php echo $imagen;?>"></div>
                            <div class="col-xs-12 col-md-8"><?php echo $texto;?></div>
                        </div>

		<hr class="gris">
	<?php endwhile; ?>



<?php endif; ?>                 
                        
                  
     <?php   endif;    
                 

    endwhile;

else :


                  
endif;

?>
                         
                    </div>


                    <?php $row++; endwhile; ?>
                    

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
