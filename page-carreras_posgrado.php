<?php
/*
    Template Name: Carreras de Posgrado

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
if( have_rows('contenido') ):

 	// loop through the rows of data
    while ( have_rows('contenido') ) : the_row(); 

		// check current row layout
        if( get_row_layout() == 'carreras_y_planes' ): ?>
             
 
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
                        
                                               if( get_row_layout() == 'docenteshorarios' ):  
                        $anio_actual = get_sub_field('anio_actual');  
                        $code_anios_anteriores = get_sub_field('code_anios_anteriores');   ?>
               
        	 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#vigente"><?php echo $anio_actual ?></a></li>
  <li><a data-toggle="tab" href="#anteriores">Segundo Cuatrimestre</a></li>
</ul>

<div class="tab-content">
  <div id="vigente" class="tab-pane fade in active">
      <br>
   <div class="tituloseccion"><h1>Primer Cuatrimestre</h1></div>
          
      
  </div>
  <div id="anteriores" class="tab-pane fade">
      <br>
      <div class="tituloseccion"><h1>Segundo Cuatrimestre</h1></div>
     <?php if( have_rows('item_anios_anteriores', 42) ): ?><?php while( have_rows('item_anios_anteriores', 42) ): the_row(); 

		                        $link_item_aa = get_sub_field('link_item_aa');  
		?>

		  <li a href=""><?php the_sub_field('nombre_item_aa'); ?><?php echo $link_item_aa ?></li>
                    
                    <hr class="gris">

	<?php endwhile; ?><?php endif; ?>
  </div>
  
</div>

     <?php    endif;
                  
                  
                  if( get_row_layout() == 'materias' ): ?>
               
        	 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#1C">Primer cuatrimestre</a></li>
  <li><a data-toggle="tab" href="#2C">Segundo Cuatrimestre</a></li>
</ul>

<div class="tab-content">
  <div id="1C" class="tab-pane fade in active">
      <br>
   <div class="tituloseccion"><h1>Primer Cuatrimestre</h1></div>
      
      <?php if( have_rows('materia_1c') ): ?><?php while( have_rows('materia_1c') ): the_row(); 

		// vars
		$nombre_1c = get_sub_field('nombre_1c');
		$info_1c = get_sub_field('info_1c');
		?>

		  <h2><?php echo $nombre_1c; ?></h2>
                    <p></p>
                    <div class="textolargo">
                        <p><?php echo $info_1c; ?></p>
                    </div>
                    <hr class="gris">

	<?php endwhile; ?><?php endif; ?>
      
      
  </div>
  <div id="2C" class="tab-pane fade">
      <br>
      <div class="tituloseccion"><h1>Segundo Cuatrimestre</h1></div>
     <?php if( have_rows('materia_2c') ): ?><?php while( have_rows('materia_2c') ): the_row(); 

		// vars
		$nombre_2c = get_sub_field('nombre_2c');
		$info_2c = get_sub_field('info_2c');
		?>

		  <h2><?php echo $nombre_2c; ?></h2>
                    <p></p>
                    <div class="textolargo">
                        <p><?php echo $info_2c; ?></p>
                    </div>
                    <hr class="gris">

	<?php endwhile; ?><?php endif; ?>
  </div>
  
</div>

     <?php    endif;
                        
                        
  

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
