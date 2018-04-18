<?php
/*
    Template Name: Extensión

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
             
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">
               
                <li class="active">
                     <a href="#lA" data-toggle="tab">Inicio</a>
        		    
        		</li>
                             
                 <li class="">
                     <a href="#lB" data-toggle="tab">Agenda</a>
        		    
        		</li>
                
                
              <li class="">
                     <a href="#lC" data-toggle="tab">Contacto</a>
        		    
        		</li>  
                
                <li class="">
                     <a href="#lD" data-toggle="tab">Anticipando la crecida</a>
        		    
        		</li>
                
                  <li class="">
                     <a href="#lE" data-toggle="tab">Archivo de actividades</a>
        		    
        		</li>
                
                
            </ul>
          
            
            
        </div>
        
        
        
        <div class="col-md-9 pright"><div class="row listado">
         
                <div id="content" class="tab-content">
                    
              
<div class="tab-pane active fade in" id="lA">
             <div class="row listado">		   
    	<?php if( have_rows('actividad_ext') ): ?>
<?php while( have_rows('actividad_ext') ): the_row(); 
		
		// vars
		$nombre_actividad = get_sub_field('nombre_actividad');
		$informacion_actividad = get_sub_field('informacion_actividad');
		$imagen_actividad = get_sub_field('imagen_actividad');
		?>
                 <div class="row">
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="<?php echo $imagen_actividad;?>" class="img-responsive"> </div>
    <div class="col-xs-12 col-sm-8 col-lg-8">
       <h1 class="listadoh1especial"><?php echo $nombre_actividad;?></h1>
    <h4 class="textolargo"><?php echo $informacion_actividad;?></h4>
    </div>
                    
		</div>
           <hr class="gris">
	<?php endwhile; ?>
	
<?php endif; ?>	    	     
        
    </div>
    
	    	      
        		</div>

                    


                    
<div class="tab-pane fade" id="lB">
            <div class="row listado">		   
    		    	      <div class="tituloseccion">
                             <h2>Agenda</h2><hr></div>
<div class="textolargo"><h4><?php the_field('agenda_extension'); ?></h4></div>
    </div>
    
	    	      
        		</div>
                    
                   <div class="tab-pane fade" id="lC">
            <div class="row listado">		   
    		    	      <div class="tituloseccion">
                             <h2>Contacto</h2><hr></div>

        <div class="textolargo"><h4><?php the_field('contacto_extension'); ?></h4></div>
    </div>
    
	    	      
        		</div> 
                    
                   <div class="tab-pane fade" id="lD">
            <div class="row listado">		   
    		    	      <div class="tituloseccion">
                             <h2>Anticipando la crecida</h2><hr></div>

        <div id="jssor_slider1" style="position:relative;margin:0 auto;top:0px;left:0px;width:700px;height:400px;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:700px;height:400px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Foto_ac1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Foto_ac2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Foto_ac3.jpg" />
            </div>
            <a data-u="any" href="https://www.jssor.com" style="display:none">slider in bootstrap</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:40px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:40px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div><br>
    
                        <div class="textolargo">
                            <p>El proyecto Anticipando la Crecida se generó en 2012 con el objetivo general de contribuir en la gestión de riesgos ante desastres asociados a inundaciones por sudestadas y lluvias intensas en el área metropolitana de Buenos Aires (AMBA) y brindar información sobre el origen, las causas y la predicción de dichos eventos para reducir el riesgo social.</p>



                            Participan docentes, investigadores y estudiantes del Departamento de Ciencias de la Atmósfera y los Océanos (DCAO-FCEN-UBA), del Centro de Investigaciones del Mar y de la Atmósfera (CIMA-CONICET-UBA), del Programa de Investigaciones en Recursos Naturales y Ambiente del Instituto de Geografía (PIRNA de FFyL – UBA), del Instituto Nacional del Agua (INA), de la Facultad de Ingeniería (FI-UBA), del Instituto Geográfico Nacional (IGN). Y colaboran investigadores y personal técnico del Servicio Meteorológico Nacional (SMN) y del Servicio de Hidrografía Naval (SHN).
                            <p>

                                Durante el primer paso del proyecto, se trabajóde manera conjunta con Defensa Civil de Quilmes, la Secretaria de desarrollo Social del Municipio de Quilmes, con la escuela secundaria N 76 de la Ribera de Quilmes, en donde se han realizado talleres comunitarios con el objetivo de que los estudiantes sociabilicen sus conocimientos del tema inundaciones. En el 2012 el proyecto obtuvo financiamiento del “Exactas con la Sociedad 4” (FCEN-UBA).
                                <p>


                                    Entre los años 2012 y 2017 se amplió el área de estudio gracias a financiamiento de los proyectos “Exactas con la Sociedad 5 y 6”, la 5ª convocatoria a proyectos de extensión universitaria “UBANEX – Malvinas Argentinas”.el proyecto de Extensión “La Universidad con ACUMAR” de la Secretaría de Políticas Universitarias del Ministerio de Educación. Se han desarrollo talleres y estudios en la escuela 130 y 135 de Laferrere, La Matanza, en el barrio Nueva Esperanza y Barrio Tongui de Lomas de Zamora, en el Barrio Mitre de Saavedra (CABA). También se realizaron salidas de campo durante inundaciones en los barrios de Laferrere (noviembre 2014), San Antonio de Areco (agosto 2015) y Olivera, Partido de Luján (agosto 2015).
                                    <p><br>

<div id="jssor_slider2" style="position:relative;margin:0 auto;top:0px;left:0px;width:700px;height:300px;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:700px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Foto_ac4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Foto_ac5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Foto_ac6.jpg" />
            </div>
           
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:40px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:40px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div><br>
                            
                            También, a raíz de las investigaciones realizadas en el marco de las instituciones involucradas, se pudo corroborar la falta de datos de cotas de nivel que permitan realizar mapas de inundaciones, de escorrentía y de duración del agua en el lugar, eficientes que permitan realizar modelos de escurrimiento que puedan ser utilizados por los sectores de gestión. La mejora de estos mapas puede ser de gran utilidad y proveer nueva y mejor información para la gestión.
                                        <p>


                                            Se participó activamente en reuniones, congresos y jornadas sobre el tema de inundaciones, fuimos invitados en varias oportunidades a relatar los logros alcanzados por la propuesta anterior. Y se realizaron trabajos de investigación sobre la temática que logran ser un aporte directo y un modo de registrar los logros alcanzados para que puedan ser replicados en otras áreas. El proyecto Anticipando la Crecida recibió una mención especial en la Jornadas Inter-disciplinarias sobre cambio climático de la UBA en 2013.
                                            <p>
                                                En julio 2016 el equipo de Anticipando la Crecida participó de la primera experiencia de talleres comunitarios con productores Hortícolas de la localidad de Santa Lucia, Corrientes. Recibimos invitación de la materia Sistemas Productivos Intensivos de la Facultad de Agronomía de la UBA para aportar nuestra visión y trabajo a la salida de campo de dicha materia. A raíz de esta actividad con productores para el actual llamado de Anticipando la Crecida es que se decide innovar sumando trabajo con actores rurales de la cuenca del Luján.
                                                <p>


                                                    <div class="person"><a href="http://anticipandolacrecida.cima.fcen.uba.ar/">http://anticipandolacrecida.cima.fcen.uba.ar/</a>
                                                        <h3>Dr. Federico Ariel Robledo</h3> <h6>federico.robledo@cima.fcen.uba.ar</h6> <h3>Dr. Diego Moreira </h3><h6>moreira@cima.fcen.uba.ar</h6></div></div>
    </div>
    
	    	      
        		</div> 
                    
                    <div class="tab-pane fade" id="lE">
       		   
    		    	      <div class="tituloseccion">
                             <h2>Archivo de actividades</h2><hr></div>

                        
                                        <?php 

				// check for rows (parent repeater)
				if( have_rows('archivo_extension') ): ?>
					<div class="row">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('archivo_extension') ): the_row(); ?>
                        
                         <?php $nombre_archivo = get_sub_field('nombre_archivo');  $file_archivo = get_sub_field('file_archivo');  ?>
						<a href="<?php echo $file_archivo;?>" target="_blank">
                        <div class="col-xs-12 col-sm-3 col-lg-3 memorias">
                            <span class="ion-document-text"></span>
                            <h2><?php echo $nombre_archivo;?></h2>
                        </div>
                    </a>
                       

					<?php endwhile;  ?>
                        
					 </div>
				<?php endif;  ?>
    
	    	      
        		</div>
                    
                    
                    
                </div>



            
        </div></div>
    </div>
    </div>





            <?php get_footer();
