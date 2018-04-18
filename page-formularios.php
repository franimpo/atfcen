<?php
/*
    Template Name: Formularios

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


                    <?php $title = get_sub_field('title');?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?></h2><hr></div>
                        
              
                        <?php 

				// check for rows (parent repeater)
				if( have_rows('formulario') ): ?>
					<div class="row">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('formulario') ): the_row(); ?>
                        
                         <?php $nombre_formulario = get_sub_field('nombre_formulario');  $link_formulario = get_sub_field('link_formulario');  ?>
						<a href="<?php echo $link_formulario;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $nombre_formulario;?></h2>
                        </div>
                    </a>
                       

					<?php endwhile;  ?>
                        
					 </div>
				<?php endif;  ?>
                                
                        
                        
                        
                        
                    </div>


                    <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
