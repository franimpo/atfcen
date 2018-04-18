<?php
/*
    Template Name: Tesis

*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->


    <div class="container">

        <div id="breadcrumb">
            <?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
        </div>

        <div class="row col95">
            <div class="col-md-3">
                <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Seleccionar</a>

                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
                    <?php $row = 1; if(get_field('front_tabs')): ?>
                    <?php while(has_sub_field('front_tabs')): ?>

                    <?php $title = get_sub_field('title'); ?>

                    <li class="<?php if($row == 1) { echo 'active'; } ?>">
                        <a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab">
                            <?php echo $title;?></a>
                    </li>
                    <?php $row++; endwhile; ?>
                    <?php endif; wp_reset_query();?>

                    <!--- <?php
$link_menu = get_field('link_menu');

if( $link_menu ): ?>
                 <li>
                     <a href="<?php echo $link_menu ?>">CV de los investigadores ></a>
        		</li>
<?php endif; ?> -->
                </ul>



            </div>



            <div class="col-md-9 pright">
                <div class="row listado">
                    <?php $row = 1; if(get_field('front_tabs')): ?>

                    <div id="content" class="tab-content">

                        <?php while(has_sub_field('front_tabs')): ?>
                        <?php $title = get_sub_field('title'); ?>


                        <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">

                            <div class="tituloseccion">
                                <h2>
                                    <?php echo $title;?>
                                </h2>
                                <hr>
                            </div>
                            
                            <?php if( have_rows('contenido') ): ?>
				 
					<?php while( have_rows('contenido') ): the_row(); ?>
								
								<?php // Formularios
									if( get_row_layout() == 'formularios' ): ?>	
                            
                            
										                  <?php if( have_rows('formulario') ): ?>
					<div class="row row0m">
					<?php while( have_rows('formulario') ): the_row(); ?>
                        
                         <?php $nombre_formulario = get_sub_field('nombre_formulario'); $icono_formulario = get_sub_field('icono_formulario');  $link_formulario = get_sub_field('link_formulario');  ?>
						<a href="<?php echo $link_formulario;?>" >
                        <div class="col-xs-12 col-sm-3 col-lg-2 memorias">
                            <span class="<?php echo $icono_formulario;?>"></span>
                            <h2><?php echo $nombre_formulario;?></h2>
                        </div>
                    </a>
                       

					<?php endwhile;  ?>
                        
					 </div>
				<?php endif;  ?>
								<?php endif; ?>
                            
                            <?php // Browser Image Content Block
									if( get_row_layout() == 'area_texto' ): ?>	
                           
									<h4 class="textolargo"><p><?php the_sub_field('text_field');;?></p></h4>	
								<?php endif; ?>
                            
                            
                              <?php // Browser Image Content Block
									if( get_row_layout() == 'lista_simple' ): ?>	
                            <hr class="gris">
                          <div class="tituloseccion"> <h1><?php the_sub_field('titulo_lista');;?></h1></div>
								               <?php if( have_rows('lista') ): ?>

	<ul class="person lista-inline" id="right">

	<?php while( have_rows('lista') ): the_row(); 

		// vars
$nombre_plan = get_sub_field('nombre_plan');
$enlace_plan = get_sub_field('enlace_plan'); 
$aclaracion = get_sub_field('aclaracion'); 

		?>

        <li style="display: list-item"><h1><a href="<?php echo $enlace_plan; ?>">- <?php echo $nombre_plan; ?></a><?php if( $aclaracion ): ?><span style="color: red; font-size: 1.4rem"><?php echo $aclaracion; ?></span><?php endif; ?></h1>

		</li>

	<?php endwhile; ?>

                        </ul>
<?php endif; ?>   
								<?php endif; ?>

								<?php // Browser Image Content Block
									if( get_row_layout() == 'normas_tesis' ): ?>
                             <?php $texto_tesis = get_sub_field('texto_tesis'); ?>
									           <div class="row listado">
                            <div class="col-xs-12 col-md-9 pull-left"><h4 class="textolargo"><p><?php echo $texto_tesis;?></p></h4></div>
                             <div class="col-xs-12 col-md-3 pull-right"><h1 class="listadoh1especial">Descargas</h1><?php if( have_rows('descargas') ): ?>

<div class="materiasanteriores">
	<ul class="lista-inline">

	<?php while( have_rows('descargas') ): the_row(); 

		// vars
		$nombre = get_sub_field('nombre');
		$link = get_sub_field('link');

		?>

		<li><a href="<?php echo $link; ?>"><span class="ion-document-text">   </span> -	
		      <?php echo $nombre; ?>
					
				</a></li>

	<?php endwhile; ?>

	</ul></div>

<?php endif; ?></div>
                            
                            </div>                  
									                             
								<?php endif; ?>
                            
                            
                            
																 
					<?php endwhile; ?>			 
				<?php endif; ?>
                            
                            
                            
                            

                        </div>


                        <?php $row++; endwhile; ?> </div><?php endif; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>





    <?php get_footer();
