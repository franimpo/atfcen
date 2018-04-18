<?php
/*
    Template Name: Personal No Docente

*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->
   

               <div class="container">
         <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
                <div class="row listado col95">
              <div class="tituloseccion col-xs-12">
                             <h2>Nuestro personal</h2><hr></div>        
                    
        
        
        
        
        <div class="col-xs-12 col-md-9 col-md-offset-3">

<?php if( have_rows('cargo_nodocente') ): ?>


	<?php while( have_rows('cargo_nodocente') ): the_row(); 

		// vars
		$nombre_cargo = get_sub_field('nombre_cargo');

		?>
            <div class="person">
            <h1><?php echo $nombre_cargo;?></h1></div>
            
            <?php if( have_rows('persona_nodocente') ): ?>


	<?php while( have_rows('persona_nodocente') ): the_row(); 

		// vars
		$nombre_persona = get_sub_field('nombre_persona');

		?>
         <div class="person">
            <h3><?php echo $nombre_persona;?></h3></div>   

            
            <?php endwhile; ?><?php endif; ?>
		<hr class="gris">
	<?php endwhile; ?>


<?php endif; ?>
            
        </div>
                   
                   </div>
  
    </div>





            <?php get_footer();
