<?php
/*
    Template Name: Contacto
*/

get_header(); ?>

    <div class="container">
         <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6"><div class="tituloseccion"><h2>Formulario de contacto</h2><hr></div>
                        <div id="formulariocontacto">
                <?php echo do_shortcode( '[contact-form-7 id="93" title="Formulario de contacto 1"]' ); ?> 
            </div></div>
          <div class="col-xs-12 col-sm-12 col-md-6 acercafcao"><div class="tituloseccion"><h2>Sobre el departamento</h2><hr></div>
             <address><h4><?php the_field('infodepto'); ?></h4></address> 
            <div id="mapacontacto"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3286.4456592188126!2d-58.442117!3d-34.54227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa704b3258b20ce37!2sFacultad+de+Ciencias+Exactas+y+Naturales+-+UBA!5e0!3m2!1ses-419!2sus!4v1500778475760" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              
              </div>
              <div id="comollegar">
              <div class="texto1"><?php the_field('comollegar'); ?></div></div>
    
            </div>
    </div>
</div>


 



            <?php get_footer();
