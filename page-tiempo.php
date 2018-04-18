<?php
/*
    Template Name: Tiempo/Clima
*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->
   

        <div class="container">
            
        <h1 class="titulo_esp"><?php single_post_title(); ?></h1>
        <h3 class="definicion_esp"><?php the_field('definicion'); ?></h3>
  
                        
                
                
           <?php if( have_rows('bloque_tiempo_clima') ): ?>

      <ul class="carreras_box tiempo_clima">

                                            <?php while( have_rows('bloque_tiempo_clima') ): the_row(); 

		// vars
		$titulo_t_c = get_sub_field('titulo_t_c');
        $imagen_t_c = get_sub_field('imagen_t_c');
		$link_t_c = get_sub_field('link_t_c');
		?>

                                            <li>
                                                <a href="<?php echo $link_t_c; ?>">
                                                    <div class="carreras_texto">
                                                        <h1>
                                                            <?php echo $titulo_t_c; ?>
                                                        </h1>
                                        
                                                    </div>
                                                    <div class="carreras_img"><img src="<?php echo $imagen_t_c; ?>"></div>
                                                </a>
                                            </li>



                                            <?php endwhile; ?>
    <li></li>
    <li></li>
    <li></li>

   
                                        </ul>

<?php endif; ?>     
                
                
                
                
            </div>
        
        






            <?php get_footer();
