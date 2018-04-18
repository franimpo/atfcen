<?php
/*
    Template Name: Concursos
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
                        
              <div class="row"><div class="col-md-9">
                      <?php if( have_rows('concursos') ): ?>


	<?php while( have_rows('concursos') ): the_row(); 

		// vars
		$concurso = get_sub_field('concurso');

		?>
          <div class="textolargo"><h4><?php echo $concurso;?></h4></div>  
            
     
		<hr class="gris">
	<?php endwhile; ?>


<?php endif; ?></div> 
                       <div class="col-md-3"><?php if( have_rows('tabla') ): ?>
<div class="materiasanteriores">


	<?php while( have_rows('tabla') ): the_row(); 

		// vars
		$titulo_tabla = get_sub_field('titulo_tabla');

		?>

		<h2><?php echo $titulo_tabla; ?></h2><br>
			
    <?php if( have_rows('tabla_interior') ): ?>
				<ul class="lista-inline">	
<?php while( have_rows('tabla_interior') ): the_row(); 
                  // vars
		$nombre_item = get_sub_field('nombre_item');
        $link_item = get_sub_field('link_item');
		?>  
             
                    		<li><a href="<?php echo $link_item; ?>"><span class="ion-document-text">   </span> -	
		      
	    <?php echo $nombre_item; ?>
			
				</a>

	

		</li>
                    
		<?php endwhile; ?>
</ul>
	<?php endif; ?>	

	<?php endwhile; ?>

	</div>

<?php endif; ?></div>
                        
                        </div>  
                    </div>
       <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>






            <?php get_footer();
