<?php
/*
    Template Name: Informes de Gestión

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

                <?php $title = get_sub_field('title'); ?>
                
              <li class="<?php if($row == 1) { echo 'active'; } ?>"><a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab"> <?php echo $title;?></a></li>
              <?php $row++; endwhile; ?>
                  <?php endif; wp_reset_query();?>
                
                 <li class="">
                     <a href="#lB" data-toggle="tab"> Informes Comisión adhoc ></a>
        		    
        		</li>
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
                        
              <div class="row">
                                          <?php 

				// check for rows (parent repeater)
				if( have_rows('informes_gestion') ): ?>
					
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('informes_gestion') ): the_row(); ?>
                        
                         <?php $nombre_informe = get_sub_field('nombre_informe');  $link_informe = get_sub_field('link_informe');  ?>
						<a href="<?php echo $link_informe;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $nombre_informe;?></h2>
                        </div>
                    </a>
                       

					<?php endwhile;  ?>
                        
					
				<?php endif;  ?>
                      </div>   
                        
                        
                        
                        
                        
                    </div>


                    <?php $row++; endwhile; ?>
                    
<div class="tab-pane fade" id="lB">
            <div class="row listado">		   
    		    	      <div class="tituloseccion">
                             <h2>Informes comisión AdHoc ></h2><hr></div>

     
    <ul class="col-xs-12 col-sm-3 lista-inline">
           <?php if( have_rows('adhoc_anual') ): ?>
					<?php while( have_rows('adhoc_anual') ): the_row(); ?>
           
         <?php $adhoc_anio = get_sub_field('adhoc_anio');  $adhoc_link = get_sub_field('adhoc_link');  ?>
                            <li>
                                <a href="<?php echo $adhoc_link;?>" target="_blank">
                                    <h2><?php echo $adhoc_anio;?></h2><span class="ion-document-text"></span></a>
                            </li>
          <?php endwhile;  ?><?php endif;  ?>
        	
        
        
                        <hr class="hr767">
                        </ul>
              
    <ul class="col-xs-12 col-sm-9 lista-inline">
        
         <?php if( have_rows('otros_informes') ): ?>
					<?php while( have_rows('otros_informes') ): the_row(); ?>
        
         <?php $otros_nombre = get_sub_field('otros_nombre');  $otros_link = get_sub_field('otros_link');  ?>
                    <li><a href="<?php echo $otros_link;?>" target="_blank">
                    <h2><?php echo $otros_nombre;?></h2><span class="ion-document-text"></span></a></li>
                                    	<?php endwhile;  ?><?php endif;  ?>     
                    </ul>
    </div>
    
	    	      
        		</div>
                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
