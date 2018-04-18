<?php
/*
    Template Name: Areas de investigación
*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->
   

        <div class="container">
                <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
                <div class="row  col95">
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
        
        
        
        <div class="col-md-9"><div class="row listado">
          <?php $row = 1; if(get_field('front_tabs')): ?>

                <div id="content" class="tab-content">
                    
                    <?php while(has_sub_field('front_tabs')): ?>


                    <?php $title = get_sub_field('title'); ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?> ></h2><hr></div>
                        
              
                    <?php if( have_rows('areas_invest') ): ?>


	<?php while( have_rows('areas_invest') ): the_row(); 

		// vars
		$area_nombre = get_sub_field('area_nombre'); $area_descripcion = get_sub_field('area_descripcion'); $area_informacion = get_sub_field('area_informacion');

		?>
                        
                        <h1 class="listadoh1especial"><?php echo $area_nombre;?></h1>
                       <?php if( $area_descripcion
                            ): ?>   <h4 class="textolargo">
                    <p><?php echo $area_descripcion;?></p></h4><?php endif; ?>
                    
                     <?php if( $area_informacion ): ?> <div class="fondoceleste center"><h4 class="textolargo"><?php echo $area_informacion;?></h4></div> <?php endif; ?>
                
                         <hr class="gris">                    
                          <?php endwhile; ?>
<?php endif; ?>
                         </div>


                    <?php $row++; endwhile; ?>

                </div>
                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
