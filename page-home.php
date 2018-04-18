<?php
/*
    Template Name: Pagina de Inicio

*/

get_header(); ?>

<!-- Carousel
    ================================================== -->
<article>
    <div id="mc" class="carousel slide" data-ride="carousel">
        <?php 
            $args = array( 'post_type' => 'slide2', );
            $slider_query = new WP_Query( $args );
        
        ?>
        
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php   if( have_posts () ) : while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
            <li <?php if( $slider_query->current_post == 0 ) : ?>class="active"<?php endif; ?> data-target="#mc" data-slide-to="<?php echo $slider_query->current_post; ?>" ></li>
           <?php endwhile; endif; ?>
            
        </ol>
        
        <?php rewind_posts(); ?>
        
        <section><div class="carousel-inner" role="listbox">
                        
             <!-- INICIO SLIDE 1 -->
            <?php
             
            if( have_posts () ) : while ( $slider_query->have_posts() ) : $slider_query->the_post();
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src( $image_id, 'full', true);
            $image_alt_tag = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
            
            ?>
                        
               
            <div class="item <?php if( $slider_query->current_post == 0 ) : ?>active<?php endif; ?>">
                
               <!-- IMAGEN SLIDE 1 --> <img alt="<?php echo $image_alt_tag ?>" style="background-image:url(<?php echo $image_url[0]; 
                ?>); background-position: bottom; background-size:cover; background-repeat: no-repeat;"> <!--  IMAGEN SLIDE 1 -->
                
                <div class="container">
                     <div class="carousel-caption">
                        <h2 class="pull-left"><?php the_field('slide_seccion'); ?></h2>
                        <a href="<?php the_field('slide_url'); ?>">
                            <div class="caption-inf">
                                <h1><?php the_title(); ?></h1>
                                <p class="btn btn-md btn-primary" href="<?php the_field('slide_url'); ?>" role="button">Leer más</p>
                                
                            </div></a></div></div></div>
                    
            <?php  endwhile; endif; wp_reset_query(); ?>
             <!-- FIN SLIDE-->
            
                      
        </div></section>
        <a class="left carousel-control" href="#mc" role="button" data-slide="prev" target="_self">
            <span class="ion-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mc" role="button" data-slide="next" target="_self">
            <span class="ion-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->

 <div class="container">
        <!-- INICIO 4 ARTICULOS -->
        <div class="articulos">
            
            <!-- FIN ARTICULO 1 -->
            
            <?php if (have_rows('articulos_ppal')): ?>
                <?php while (have_rows('articulos_ppal')): the_row(); ?>
			<?php $articulos_ppal_imagen = get_sub_field('articulos_ppal_imagen');
			$articulos_ppal_seccion = get_sub_field('articulos_ppal_seccion');
			$articulos_ppal_titulo = get_sub_field('articulos_ppal_titulo');
			$articulos_ppal_link = get_sub_field('articulos_ppal_link');
			$articulos_ppal_bajada = get_sub_field('articulos_ppal_bajada'); ?>
			
            <div class="articulosheight <?php the_sub_field('articulos_destacado'); ?>">
                                
                <a href="<?php echo $articulos_ppal_link;?>">
                   <!-- Imagen Articulo Principal -->   <?php if( $articulos_ppal_imagen ): ?><div class="contimg"><img class="img img-responsive" src="<?php echo $articulos_ppal_imagen;?>" alt=""></div><?php endif; ?>  
                    <div class="conttxt">
                        <p><?php echo $articulos_ppal_seccion;?></p>
                        <a href="<?php echo $articulos_ppal_link;?>"><h2><?php echo $articulos_ppal_titulo;?></h2></a>
                        <h5><?php echo $articulos_ppal_bajada;?></h5>
                    </div>
                </a>
              
            </div>  <?php endwhile; ?>
            <?php endif; ?>
             <!-- FIN ARTICULO 1 -->
                       
            
        </div>
            <!-- FIN 4 ARTICULOS -->
    </div>

    <!-- INICIO SECCION 3-->
    <div class="row seccion3">

        <div class="col-xs-12 col-sm-12 col-lg-5 destacado">
            <div class="tituloseccion"><div id="conttituloseccion">
                <h2 class="pull-left">Destacados ></h2></div>
                </div> <hr class="navy">
            <!-- INICIO DESTACADO 1 -->
            
        
        <?php if (have_rows('destacado')): ?>
            <div class="cont-destacado">
               
                  <?php while (have_rows('destacado')): the_row(); ?>
                <h3><?php the_sub_field('destacado_seccion'); ?></h3>
                                
                <h1><a href="<?php the_sub_field('destacado_link'); ?>"><?php the_sub_field('destacado_titulo'); ?></a> <hr class="celeste"></h1>
                
                 <?php endwhile; ?>
    </div>
                           

<?php endif; ?>
                   
    </div>
        

        <div class="col-xs-12 col-sm-12 col-lg-7 agenda">
            <div class="tituloseccion"><div id="conttituloseccion">
                <h2 class="pull-left">Agenda ></h2>
                <a href="agenda">
                    <h4 class="pull-right">Ver Agenda completa</h4>
                </a> </div>
                </div> <hr class="navy">
            <div class="row eventos">
            <?php echo do_shortcode( '[ecs-list-events venue="true" limit="6" contentorder="date, venue, title"]' ); ?> 
                </div>
        </div>
    </div>


    <div class="row videos">
        <div class="container">

            <div class="tituloseccion">
                <h2>Videos ></h2>
              <!--  <a href="multimedia.php">
                    <h4 class="pull-right">Ver todos</h4>
                </a> -->
                </div><hr class="navy">

            <div class="owl-carousel owl-theme">
                <!-- VIDEO IZQUIERDA -->
                
                <?php if( have_rows('video_1') ): 

	while( have_rows('video_1') ): the_row();
                
  		
		?>
                <div class="item-video">
                    <div class="video-container">
                        <iframe width="853" height="480" src="<?php the_sub_field('video1_link'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h4><?php the_sub_field('video1_titulo'); ?></h4>
                </div>
                
                	<?php endwhile; ?>
	
<?php endif; ?>
                <!-- VIDEO IZQUIERDA -->
                
                  <!-- VIDEO CENTRO -->
                <?php if( have_rows('video_2') ): 

	while( have_rows('video_2') ): the_row();
                
  		
		?>
                
                <div class="item-video">
                    <div class="video-container">
                        <iframe width="853" height="480" src="<?php the_sub_field('video2_link'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h4><?php the_sub_field('video2_titulo'); ?></h4>
                </div>
                
                                	<?php endwhile; ?>
	
<?php endif; ?>
                <!-- VIDEO CENTRO -->
                
                <!-- VIDEO DERECHA -->
                
                <?php if( have_rows('video_3') ): 

	while( have_rows('video_3') ): the_row();
                
  		
		?>
                <div class="item-video">
                    <div class="video-container">
                        <iframe width="853" height="480" src="<?php the_sub_field('video3_link'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h4><?php the_sub_field('video3_titulo'); ?></h4>
                </div>
                
                                	<?php endwhile; ?>
	
<?php endif; ?>
                <!-- VIDEO DERECHA -->
                
            </div>
        </div>
    </div>

<?php get_footer();
