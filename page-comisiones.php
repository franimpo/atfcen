<?php
/*
    Template Name: Comisiones
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
                
              <li class="<?php if($row == 1) { echo 'active'; } ?>"><a data-target="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab"> <?php echo $title;?></a></li>
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
                             <h2><?php echo $title;?></h2><hr></div>
                        
<?php if( have_rows('area_comision') ): ?>

	<div class="row flexrow">

	<?php while( have_rows('area_comision') ): the_row(); 

		// vars
		$nombre_area = get_sub_field('nombre_area');
				?>
<div class="flexcol">
		

			<?php if( $nombre_area ): ?><h1><?php echo $nombre_area; ?></h1><br><?php endif; ?>
			
<?php if( have_rows('cargo_comisiones') ): ?>

	

	<?php while( have_rows('cargo_comisiones') ): the_row(); 

		// vars
		$nombre_cargo = get_sub_field('nombre_cargo');
		$nombre_persona = get_sub_field('nombre_persona');
		$mail_persona = get_sub_field('mail_persona');

		?>
    
    <div class="person">
         <?php if( $nombre_cargo ): ?><hr class="gris">
       <h1><?php echo $nombre_cargo; ?></h1><?php endif; ?>
    <h3><?php echo $nombre_persona; ?></h3>
    <?php if( $mail_persona ): ?><h6><?php echo $mail_persona; ?></h6><?php endif; ?>
    </div>
    
	

	<?php endwhile; ?>



<?php endif; ?>
				

<hr class="767">
        </div>

	<?php endwhile; ?>

	 </div>

<?php endif; ?>
                        
                                      
                        
                    </div>


                    <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
