<?php
/*
    Template Name: Carreras de Grado
*/

get_header(); ?>

 
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
if( have_rows('contenido') ):

 	// loop through the rows of data
    while ( have_rows('contenido') ) : the_row(); 

		// check current row layout
        if( get_row_layout() == 'carreras_y_planes' ): ?>
             
 <?php $texto = get_sub_field('texto'); ?>

      <div class="row">
                                    <div class="col-xs-12 col-md-8">
                                        <?php if( $texto ): ?>
                                        <div class="textolargo">
                                            <p>
                                                <?php echo $texto;?>
                                            </p>
                                        </div>
                                        <br>
                                        <?php endif; ?>
                                        <?php if( have_rows('bloque_carreras') ): ?>

                                        <ul class="carreras_box">

                                            <?php while( have_rows('bloque_carreras') ): the_row(); 

		// vars
		$nombre_carrera = get_sub_field('nombre_carrera');
        $subtexto_carrera = get_sub_field('subtexto_carrera');
		$imagen_carrera = get_sub_field('imagen_carrera');
		$link_carrera = get_sub_field('link_carrera');

		?>

                                            <li>
                                                <a href="<?php echo $link_carrera; ?>">
                                                    <div class="carreras_texto">
                                                        <h1>
                                                            <?php echo $nombre_carrera; ?>
                                                        </h1>
                                                        <?php if( $subtexto_carrera ): ?>
                                                        <h6>
                                                            <?php echo $subtexto_carrera; ?>
                                                        </h6>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="carreras_img"><img src="<?php echo $imagen_carrera; ?>"></div>
                                                </a>
                                            </li>



                                            <?php endwhile; ?>

                                        </ul>

                                        <?php endif; ?>

                                        <hr class="gris">
                                        <?php if( have_rows('planes') ): ?>

                                        <ul class="person lista-inline" id="right">

                                            <?php while( have_rows('planes') ): the_row(); 

		// vars
$nombre_plan = get_sub_field('nombre_plan');
$enlace_plan = get_sub_field('enlace_plan'); 
$aclaracion = get_sub_field('aclaracion'); 
$checkbox = get_sub_field('checkbox');

		?>

                                            <li style="display: list-item">
                                                <h1><a href="<?php echo $enlace_plan; ?>">- <?php echo $nombre_plan; ?></a>
                                                    <?php if( $aclaracion ): ?><span style="color: red; font-size: 1.4rem"><?php echo $aclaracion; ?></span>
                                                    <?php endif; ?>
                                                </h1>

                                            </li>

                                            <?php endwhile; ?>

                                        </ul>
                                        <?php endif; ?>


                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                    </div>



                                </div>            
        	
       
                        
                        
     <?php   endif;
                        
                  
                  if( get_row_layout() == 'equivalencias_y_correlatividades' ): ?>

        	 <div class="row">
            
                <div class="col-xs-12 col-sm-6">
                <div class="tituloseccion"><h1>Equivalencias</h1> </div>

 <?php if( have_rows('equiv') ): ?>

                                        <ul class="person lista-inline" id="right">

                                            <?php while( have_rows('equiv') ): the_row(); 

		// vars
$nombre_equiv = get_sub_field('nombre_equiv');
$enlace_equiv = get_sub_field('enlace_equiv'); 
$aclaracion_equiv = get_sub_field('aclaracion_equiv'); 

		?>

                                            <li style="display: list-item">
                                                <h1><a href="<?php echo $enlace_equiv; ?>">- <?php echo $nombre_equiv; ?></a>
                                                    <?php if( $aclaracion_equiv ): ?><span style="color: red; font-size: 1.4rem"><?php echo $aclaracion_equiv; ?></span>
                                                    <?php endif; ?>
                                                </h1>

                                            </li>

                                            <?php endwhile; ?>

                                        </ul>
                                        <?php endif; ?>
             
                    
                    

            </div>
            <div class="col-xs-12 col-sm-6">
            <div class="tituloseccion"><h1>Correlatividades</h1></div>
 <?php if( have_rows('correlat') ): ?>

                                        <ul class="person lista-inline" id="right">

                                            <?php while( have_rows('correlat') ): the_row(); 

		// vars
$nombre_correlat = get_sub_field('nombre_correlat');
$enlace_correlat = get_sub_field('enlace_correlat'); 
$aclaracion_correlat = get_sub_field('aclaracion_correlat'); 

		?>

                                            <li style="display: list-item">
                                                <h1><a href="<?php echo $enlace_correlat; ?>">- <?php echo $nombre_correlat; ?></a>
                                                    <?php if( $aclaracion_correlat ): ?><span style="color: red; font-size: 1.4rem"><?php echo $aclaracion_correlat; ?></span>
                                                    <?php endif; ?>
                                                </h1>

                                            </li>

                                            <?php endwhile; ?>

                                        </ul>
                                        <?php endif; ?>

            </div>
        </div>

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
