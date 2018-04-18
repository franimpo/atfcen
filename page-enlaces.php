<?php
/*
    Template Name: Enlaces
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
        
        
        
        <div class="col-md-9 pright"><div class="row listado">
          <?php $row = 1; if(get_field('front_tabs')): ?>

                <div id="content" class="tab-content">
                    
                    <?php while(has_sub_field('front_tabs')): ?>


                    <?php $title = get_sub_field('title'); ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?></h2><hr></div>
                        
              
                    <?php if( have_rows('enlace_grupo') ): ?>


	<?php while( have_rows('enlace_grupo') ): the_row(); 

		// vars
		$enlace_seccion = get_sub_field('enlace_seccion');

		?>
                         <?php if( $enlace_seccion ): ?><h2><?php echo $enlace_seccion;?></h2><?php endif; ?>
                        <ul class="enlaces">
                            
                        
                                          <?php if( have_rows('enlace_lista') ): ?>


	<?php while( have_rows('enlace_lista') ): the_row(); 

		// vars
		$enlace_nombre = get_sub_field('enlace_nombre');
        $enlace_link = get_sub_field('enlace_link');
        $enlace_descripcion = get_sub_field('enlace_descripcion');                    
		?>  
                   <li>
                       <h2><a href="<?php echo $enlace_link;?>" target="_blank"><?php echo $enlace_nombre;?></a></h2>           
                        <?php if( $enlace_descripcion ): ?><h4><?php echo $enlace_descripcion;?></h4><?php endif; ?>    </li>          
                        
                      <?php endwhile; ?><?php endif; ?>
                        
                        </ul>
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
