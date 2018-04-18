<?php

    Template Name: Autoridades

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
                <?php $row = 1; if(get_field('front_tabs')): ?>
                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">

                    <?php while(has_sub_field('front_tabs')): ?>

                    <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>

                    <li class="<?php if($row == 1) { echo 'active'; } ?>">
                        <a href="#<?php echo str_replace(' ', '', $title); ?>" data-toggle="tab">
                            <?php echo $title;?>
                        </a>
                    </li>
                    <?php $row++; endwhile; ?>
                </ul>
                <?php endif; wp_reset_query();?>
            </div>



            <div class="col-md-9 pright">
                <div class="row listado">
                    <?php $row = 1; if(get_field('front_tabs')): ?>

                    <div id="content" class="tab-content">

                        <?php while(has_sub_field('front_tabs')): ?>


                        <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>


                        <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">

                            <div class="tituloseccion">
                                <h2>
                                    <?php echo $title;?>
                                </h2>
                                <hr>
                            </div>


                            <?php

// check if the flexible content field has rows of data
if( have_rows('autoridades') ):

 	// loop through the rows of data
    while ( have_rows('autoridades') ) : the_row();
                            
   
  if( get_row_layout() == 'lista' ):

        	
         		if( have_rows('cargo') ): ?>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <?php 	// loop through rows (parent repeater)
					while( have_rows('cargo') ): the_row();  $nombre_cargo = get_sub_field('nombre_cargo');  $nota_aclaracion = get_sub_field('nota_aclaracion');  ?>
                                        <div class="person">
                                            <?php if( $nombre_cargo ): ?>
                                            <h1>
                                                <?php echo $nombre_cargo;?>
                                            </h1>
                                            <?php endif; 
            

							// check for rows (sub repeater)
							if( have_rows('persona') ): ?>
                                            <div class="row">
                                                <?php 	while( have_rows('persona') ): the_row();

								 $nombre_persona = get_sub_field('nombre_persona');  $cv_persona = get_sub_field('cv_persona'); $mail_persona = get_sub_field('mail_persona'); ?>


                                                <div class="col-xs-12 col-md-6">
                                                    <h3>
                                                        <?php if( $cv_persona ): ?>
                                                        <a href="<?php echo $cv_persona;?>" target="_blank">
                                                            <?php endif; ?>
                                                            <?php echo $nombre_persona;?>
                                                        </a>
                                                    </h3>
                                                    <?php if( $mail_persona ): ?>
                                                    <h6>
                                                        <?php echo $mail_persona;?>
                                                    </h6>
                                                    <?php endif; ?>

                                                </div>
                                                <?php endwhile; ?>
                                            </div>
                                            <?php endif; ?>

                                        </div>
                                        <?php if( $nota_aclaracion ): ?>
                                        <h7>
                                            <?php echo $nota_aclaracion;?>
                                        </h7>
                                        <?php endif; ?>
                                        <hr class="gris">
                                        <?php endwhile;  ?>

                                    </div>
                                </div>
                                <?php endif;
                            
                            
                            
                            
                            
                            
                            
                            

        endif;

                


if( get_row_layout() == 'actascodep' ):

        	

 if( have_rows('tab_panes') ): ?>
  <ul class="nav nav-tabs" role="tablist">
  <?php $row = 1; // number rows ?>
  <?php // Step 1: Loop through rows, first displaying tab titles
   while( have_rows('tab_panes') ): the_row();
  //  ?>
    <li role="presentation" class="<?php if($row == 1) {echo 'active';}?>">
      <a
        href="#<?php echo $row; ?>"
        role="tab"
        data-toggle="tab"
        >
      <?php the_sub_field('tab_title'); ?>
      </a>
    </li>
      
      
    <?php $row++; endwhile; // (have_rows('tab_panes') ):?>
  </ul>
<?php endif; // (have_rows('tab_panes') ): ?>

<?php if( have_rows('tab_panes') ): ?>
  <div class="tab-content">
  <?php $row = 1; // number rows ?>
  <?php // Step 2: Loop through rows, now displaying tab contents
   while( have_rows('tab_panes') ): the_row();
  // Display each item as a list ?>
      <div class="tab-pane <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>">
          <?php the_sub_field('tab_contents'); ?>
      </div>
      <?php $row++; endwhile; // (have_rows('tab_panes') ):?>
  </div>
<?php endif; // (have_rows('tab_panes') ): 



 endif; 
        	

    


if( get_row_layout() == 'informes' ):

        
				// check for rows (parent repeater)
				if( have_rows('informes_gestion') ): 

					// loop through rows (parent repeater)
					while( have_rows('informes_gestion') ): the_row();  $nombre_informe = get_sub_field('nombre_informe');  $link_informe = get_sub_field('link_informe');  ?>
                                <a href="<?php echo $link_informe;?>" target="_blank">
                                    <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                                        <span class="ion-document-text"></span>
                                        <h2>
                                            <?php echo $nombre_informe;?>
                                        </h2>
                                    </div>
                                </a>


                                <?php endwhile;  endif; 
        endif;



        	 if( get_row_layout() == 'bloques' ):

				// check for rows (parent repeater)
				if( have_rows('bloque') ): ?>
                                <div class="row">
                                    <?php 

					// loop through rows (parent repeater)
					while( have_rows('bloque') ): the_row();  $bloque_nombre = get_sub_field('bloque_nombre');  $bloque_link = get_sub_field('bloque_link');  ?>
                                    <a href="<?php echo $bloque_link;?>" target="_blank">
                                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                                            <span class="ion-document-text"></span>
                                            <h2>
                                                <?php echo $bloque_nombre;?>
                                            </h2>
                                        </div>
                                    </a>


                                    <?php endwhile;  ?>

                                </div>
                                <?php endif; 

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>






                        </div>


                        <?php $row++; endwhile; ?>

                    </div>



                    <?php endif; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>





    <?php get_footer();
