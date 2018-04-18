<?php
/*
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

                <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">

                    <li class="active">
                        <a data-target="#lA" data-toggle="tab" >Dirección</a>

                    </li>

                    <li class="">
                        <a data-target="#lB" data-toggle="tab">Secretaría Académica</a>

                    </li>


                    <li class="">
                        <a data-target="#lC" data-toggle="tab">CoDep</a>

                    </li>

                    <li class="">
                        <a data-target="#lD" data-toggle="tab">Actas de CoDep</a>

                    </li>

                    <li class="">
                        <a data-target="#lE" data-toggle="tab">Informes de Gestión</a>

                    </li>
                    <li class="">
                        <a data-target="#lF" data-toggle="tab">Memorias</a>

                    </li>

                </ul>



            </div>



            <div class="col-md-9 pright">
                <div class="row listado">

                    <div id="content" class="tab-content">


                        <div class="tab-pane active fade in" id="lA">

                            <div class="tituloseccion">
                                <h2>Dirección</h2>
                                <hr>
                            </div>


                            <?php if( have_rows('cargo_direccion') ): ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php 	// loop through rows (parent repeater)
					while( have_rows('cargo_direccion') ): the_row();  $nombre_cargo = get_sub_field('nombre_cargo');   ?>
                                    <div class="person">
                                        <?php if( $nombre_cargo ): ?>
                                        <h1>
                                            <?php echo $nombre_cargo;?>
                                        </h1>
                                        <?php endif; 
            

							// check for rows (sub repeater)
							if( have_rows('persona') ): ?>
                                        <div class="row person_img_data">
                                            <?php 	while( have_rows('persona') ): the_row();

								 $nombre_persona = get_sub_field('nombre_persona');  $cv_persona = get_sub_field('cv_persona'); $mail_persona = get_sub_field('mail_persona');  $imagen_persona = get_sub_field('imagen_persona'); ?>


                                            <div class="col-xs-12 col-md-6">
                                            <div class="photo">
                                              <?php if( $imagen_persona ): ?>  <div class="person_img"><img src="<?php echo $imagen_persona;?>"></div><?php endif; ?>  
                                                <div class="person_data"><h3>
                                                    <?php if( $cv_persona ): ?>
                                                    <a href="<?php echo $cv_persona;?>" target="_blank">
                                                        <?php endif; ?>
                                                        <?php echo $nombre_persona;?>
                                                    </a>
                                                </h3>
                                                <?php if( $mail_persona ): ?>
                                                <h6>
                                                    <?php echo $mail_persona;?>
                                                </h6> <?php endif; ?></div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>
                                        <?php endif; ?>

                                    </div>

                                    <hr class="gris">
                                    <?php endwhile;  ?>

                                </div>
                            </div>
                            <?php endif; ?>



                        </div>





                        <div class="tab-pane fade" id="lB">

                            <div class="tituloseccion">
                                <h2>Secretaría Académica</h2>
                                <hr>
                            </div>


                            <?php if( have_rows('cargo_secret') ): ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php 	// loop through rows (parent repeater)
					while( have_rows('cargo_secret') ): the_row();  $nombre_cargo = get_sub_field('nombre_cargo');  $nota_aclaracion = get_sub_field('nota_aclaracion');  ?>
                                    <div class="person">
                                        <?php if( $nombre_cargo ): ?>
                                        <h1>
                                            <?php echo $nombre_cargo;?>
                                        </h1>
                                        <?php endif; 
            

							// check for rows (sub repeater)
							if( have_rows('persona') ): ?>
                                        <div class="row person_img_data">
                                            <?php 	while( have_rows('persona') ): the_row();

								 $nombre_persona = get_sub_field('nombre_persona');  $cv_persona = get_sub_field('cv_persona'); $mail_persona = get_sub_field('mail_persona');  $imagen_persona = get_sub_field('imagen_persona'); ?>


                                            <div class="col-xs-12 col-md-6">
                                             <div class="photo">
                                                <div class="person_img"><img src="<?php echo $imagen_persona;?>"></div>
                                                <div class="person_data"><h3>
                                                    <?php if( $cv_persona ): ?>
                                                    <a href="<?php echo $cv_persona;?>" target="_blank">
                                                        <?php endif; ?>
                                                        <?php echo $nombre_persona;?>
                                                    </a>
                                                </h3>
                                                <?php if( $mail_persona ): ?>
                                                <h6>
                                                    <?php echo $mail_persona;?>
                                                </h6> <?php endif; ?></div>
                                                </div>
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
                            <?php endif; ?>

                        </div>

                        <div class="tab-pane fade" id="lC">

                            <div class="tituloseccion">
                                <h2>CoDep</h2>
                                <hr>
                            </div>



                            <?php if( have_rows('cargo_codep') ): ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?php 	// loop through rows (parent repeater)
					while( have_rows('cargo_codep') ): the_row();  $nombre_cargo = get_sub_field('nombre_cargo');  $nota_aclaracion = get_sub_field('nota_aclaracion');  ?>
                                    <div class="person">
                                        <?php if( $nombre_cargo ): ?>
                                        <h1>
                                            <?php echo $nombre_cargo;?>
                                        </h1>
                                        <?php endif; 
            

							// check for rows (sub repeater)
							if( have_rows('persona') ): ?>
                                        <div class="row person_img_data">
                                            <?php 	while( have_rows('persona') ): the_row();

								 $nombre_persona = get_sub_field('nombre_persona');  $cv_persona = get_sub_field('cv_persona'); $mail_persona = get_sub_field('mail_persona');  $imagen_persona = get_sub_field('imagen_persona'); ?>


                                            <div class="col-xs-12 col-md-6">
                                                <div class="photo">
                                                <div class="person_img"><img src="<?php echo $imagen_persona;?>"></div>
                                                <div class="person_data"><h3>
                                                    <?php if( $cv_persona ): ?>
                                                    <a href="<?php echo $cv_persona;?>" target="_blank">
                                                        <?php endif; ?>
                                                        <?php echo $nombre_persona;?>
                                                    </a>
                                                </h3>
                                                <?php if( $mail_persona ): ?>
                                                <h6>
                                                    <?php echo $mail_persona;?>
                                                </h6> <?php endif; ?></div>
                                                </div>
                                                
                                               

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
                            <?php endif; ?>

                        </div>

                        <div class="tab-pane fade" id="lD">

                            <div class="tituloseccion">
                                <h2>Actas de CoDep</h2>
                                <hr>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="lE">

                            <div class="tituloseccion">
                                <h2>Informes de Gestión</h2>
                                <hr>
                            </div>

<!-- Check for parent repeater row -->
<?php if( have_rows('tab_panes') ): ?>
  <ul class="nav nav-tabs" role="tablist">
  <?php $row = 1;  // Step 1: Loop through rows, first displaying tab titles
   while( have_rows('tab_panes') ): the_row();
  //  ?>
    <li role="presentation" class="<?php if($row == 1) {echo 'active';}?>">
      <a
        data-target="#<?php echo $row; ?>"
        role="tab"
        data-toggle="tab"
        >
      <?php the_sub_field('tab_title'); ?>
      </a>
    </li>
      
      
    <?php $row++; endwhile; ?>
      
      <li role="presentation" class="">
      <a
        data-target="#adhoc"
        role="tab"
        data-toggle="tab"
        >
      Informes Comision Adhoc
      </a>
    </li>
  </ul>
<?php endif;  ?>

<?php if( have_rows('tab_panes') ): ?>
  <div class="tab-content horizontal">
  <?php $row = 1; // Step 2: Loop through rows, now displaying tab contents
   while( have_rows('tab_panes') ): the_row();
  // Display each item as a list ?>
      <div class="tab-pane <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>">
          
      
          <?php 

				// check for rows (parent repeater)
				if( have_rows('informes_gestion') ):  ?>
    <div class="row">
					
				   <?php while( have_rows('informes_gestion') ): the_row(); ?>
                        
                         <?php $nombre_informe = get_sub_field('nombre_informe');  $link_informe = get_sub_field('link_informe');  ?>
						<a href="<?php echo $link_informe;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $nombre_informe;?></h2>
                        </div>
                    </a>
                       
					<?php endwhile;  ?>
                        
					  </div>
				<?php endif;  ?>
        
          
      </div>
      <?php $row++; endwhile; ?>
      
      <div class="tab-pane " id="adhoc">
          <div class="row row0m">		   
    		    	          
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
<?php endif;  ?>




                        </div>

                        <div class="tab-pane fade" id="lF">

                            <div class="tituloseccion">
                                <h2>Memorias</h2>
                                <hr>
                            </div>

                            <?php
				if( have_rows('bloque') ): ?>


                                <div class="row">
                                    <?php 

					// loop through rows (parent repeater)
					while( have_rows('bloque') ): the_row();  $bloque_nombre = get_sub_field('bloque_nombre');  $bloque_link = get_sub_field('bloque_link');  ?>
                                    <a href="<?php echo $bloque_link;?>" target="_blank">
                                        <div class="col-xs-6 col-sm-3 col-lg-2 memorias">
                                            <span class="ion-document-text"></span>
                                            <h2>
                                                <?php echo $bloque_nombre;?>
                                            </h2>
                                        </div>
                                    </a>


                                    <?php endwhile;  ?>

                                </div>
                                <?php endif;  ?>


                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>





    <?php get_footer();
