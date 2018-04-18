<?php
/*
    Template Name: Formacion de RRHH

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

                <?php $title = get_sub_field('title'); $texto_ppal = get_sub_field('texto_ppal'); ?>
                
              <li class="<?php if($row == 1) { echo 'active'; } ?>"><a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab"> <?php echo $title;?></a></li>
              <?php $row++; endwhile; ?>
            </ul>
            <?php endif; wp_reset_query();?>
        </div>
        
        
        
        <div class="col-md-9 pright"><div class="row listado">
          <?php $row = 1; if(get_field('front_tabs')): ?>

                <div id="content" class="tab-content">
                    
                    <?php while(has_sub_field('front_tabs')): ?>


                    <?php $title = get_sub_field('title'); 	$texto_ppal= get_sub_field('texto_ppal');
                     	$imagen= get_sub_field('imagen');
                    
                    ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?></h2><hr></div>
                        
              <div class="row">
                        <div class="col-md-9">
                 <?php echo $texto_ppal; ?>
                            <img style="max-width:100%;" src="<?php echo $imagen; ?>">
                  </div>
                  
                  
                        <div class="col-md-3 materiasanteriores">
             
	<ul class="lista-inline">

	<?php while( have_rows('menu_lateral') ): the_row(); 

		// vars
		$nombre_item = get_sub_field('nombre_item');
		$archivo_item = get_sub_field('archivo_item');
        
		?>

		<li><a href="<?php echo $archivo_item; ?>"><span class="ion-document-text">   </span> -	
		      <?php echo $nombre_item; ?>
					
				</a></li>

	<?php endwhile; ?>

	</ul>
                  </div>
                        
                        
                        </div>
                     

			
                                
                        
                        
                        
                        
                    </div>


                    <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
