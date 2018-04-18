<?php
/*
    Template Name: Personal

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


                    <?php $title = get_sub_field('title'); $content = get_sub_field('content'); $nombre = get_sub_field('nombre'); $link = get_sub_field('link'); ?>


                    <div class="tab-pane <?php if($row == 1) { echo 'active'; } ?> fade in" id="<?php echo str_replace(' ', '', $title); ?>">
                        
                         <div class="tituloseccion">
                             <h2><?php echo $title;?></h2><hr></div>
                        
              
                        <?php 

				// check for rows (parent repeater)
				if( have_rows('cargo') ): ?>
					<div class="row"><div class="col-xs-12">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('cargo') ): the_row(); ?>
                        
                         <?php $nombre_cargo = get_sub_field('nombre_cargo');  $nota_aclaracion = get_sub_field('nota_aclaracion');  ?>
						<div class="person">
							 <?php if( $nombre_cargo ): ?><h1><?php echo $nombre_cargo;?></h1><?php endif; ?>  
							<?php 

							// check for rows (sub repeater)
							if( have_rows('persona') ): ?>
								<div class="row">
								<?php 

								// loop through rows (sub repeater)
								while( have_rows('persona') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
                            <?php $nombre_persona = get_sub_field('nombre_persona');  $cv_persona = get_sub_field('cv_persona'); $mail_persona = get_sub_field('mail_persona'); ?>
                                    
                                    
									<div class="col-xs-12 col-md-6">
                                        <h3>  <?php if( $cv_persona ): ?>   <a href="<?php echo $cv_persona;?>" target="_blank"><?php endif; ?> <?php echo $nombre_persona;?></a> </h3>
                                    <h6><?php echo $mail_persona;?></h6>   
                                        
                                    </div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
                          
						</div>
                        <?php if( $nota_aclaracion ): ?> <br> <h7><?php echo $nota_aclaracion;?></h7><?php endif; ?>
<hr class="gris">
					<?php endwhile;  ?>
                        
					</div>  </div>
				<?php endif;  ?>
                        
                        
                        
                        
                        
                        
                    </div>


                    <?php $row++; endwhile; ?>

                </div>



                <?php endif; wp_reset_query(); ?>
            
        </div></div>
    </div>
    </div>





            <?php get_footer();
