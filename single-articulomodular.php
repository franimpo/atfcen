<?php
/*
 * Template Name: Artículo Modular
 * Template Post Type: post
 */
  
 get_header();  ?>

<div class="container">
    <div id="breadcrumb">
            <?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
        </div>
  
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="row"> <div class="col-md-7 col-md-offset-2">
        
	<header class="entry-header">
       
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
        the_excerpt( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->
</div></div>
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            
<?php if(has_post_thumbnail( $post_id))
        { 
        ?>
           <div class="post-image">
        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
    </div>

        <?php 
        }
else{       
        ?>
       <hr class="gris">
<?php } ?><br>


	<div class="entry-content textolargo modular">
       <div class="entry-meta">
	<?php if( get_field('autores') ): ?>	<h5 class="autores">Por: <?php the_field('autores'); ?></h5><?php endif; ?>
		
			 <h5 class="fecha">				 
		<?php the_date('j \d\e F \d\e Y');?>   </h5> 
				   </div><br>       
<?php

// check if the flexible content field has rows of data
if( have_rows('articulo_modular') ):

 	// loop through the rows of data
    while ( have_rows('articulo_modular') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'area_texto' ):
			$text = get_sub_field('text');
		?>

        	<h4>	<?php echo $text; ?></h4>
        	<br><br>

  <?php      endif;
        
        
        // check current row layout
        if( get_row_layout() == 'img_1' ):  
		$img_1_1_link = get_sub_field('img_1_1_link');
		$img_1_1_pie = get_sub_field('img_1_1_pie');
		?>

        	<div class="row">
                 <div class="col-xs-12"><figure><img src="<?php echo $img_1_1_link; ?>">
					 <figcaption>	<h5><?php echo $img_1_1_pie; ?></h5></figcaption>
				</figure></div>
				
        </div>
        	<br><br>

        <?php endif; 
        
         // check current row layout
        if( get_row_layout() == 'img_2' ):
				$img_2_1_link = get_sub_field('img_2_1_link');
		$img_2_1_pie = get_sub_field('img_2_1_pie');
				$img_2_2_link = get_sub_field('img_2_2_link');
		$img_2_2_pie = get_sub_field('img_2_2_pie');
		?> 
        	
	<div class="row">
               <div class="col-sm-6"><figure><img src="<?php echo $img_2_1_link; ?>">
				<figcaption><h5><?php echo $img_2_1_pie; ?></h5></figcaption></figure></div>
                   <div class="col-sm-6"><figure><img src="<?php echo $img_2_2_link; ?>">
				<figcaption><h5><?php echo $img_2_2_pie; ?></h5></figcaption></figure></div>
		<br>
		
        </div>
		<br><br>
      <?php  endif;
        
             // check current row layout
        if( get_row_layout() == 'img_3' ):
				$img_3_1_link = get_sub_field('img_3_1_link');
		$img_3_1_pie = get_sub_field('img_3_1_pie');
						$img_3_2_link = get_sub_field('img_3_2_link');
		$img_3_2_pie = get_sub_field('img_3_2_pie');
						$img_3_3_link = get_sub_field('img_3_3_link');
		$img_3_3_pie = get_sub_field('img_3_3_pie');
		
		?>
        	<div class="row">
            <div class=" col-sm-4"><figure><img src="<?php echo $img_3_1_link; ?>">
				<figcaption><h5><?php echo $img_3_1_pie; ?></h5></figcaption></figure></div>
                   <div class="col-sm-4"><figure><img src="<?php echo $img_3_2_link; ?>">
				<figcaption><h5><?php echo $img_3_2_pie; ?></h5></figcaption></figure></div>
              <div class="col-sm-4"><figure><img src="<?php echo $img_3_3_link; ?>">
				<figcaption><h5><?php echo $img_3_3_pie; ?></h5></figcaption></figure></div>
				
        </div>
<br><br>
      <?php  endif;
        
                if( get_row_layout() == 'img_4' ):
						$img_4_1_link = get_sub_field('img_4_1_link');
		$img_4_1_pie = get_sub_field('img_4_1_pie');
						$img_4_2_link = get_sub_field('img_4_2_link');
		$img_4_2_pie = get_sub_field('img_4_2_pie');
						$img_4_3_link = get_sub_field('img_4_3_link');
		$img_4_3_pie = get_sub_field('img_4_3_pie');
								$img_4_4_link = get_sub_field('img_4_4_link');
		$img_4_4_pie = get_sub_field('img_4_4_pie');
		
		?>
        	<div class="row">
        <div class="col-md-3"><figure><img src="<?php echo $img_4_1_link; ?>">
				<figcaption><h5><?php echo $img_4_1_pie; ?></h5></figcaption></figure></div>
                                <div class="col-md-3"><figure><img src="<?php echo $img_4_2_link; ?>">
				<figcaption><h5><?php echo $img_4_2_pie; ?></h5></figcaption></figure></div>
                <div class="col-md-3"><figure><img src="<?php echo $img_4_3_link; ?>">
				<figcaption><h5><?php echo $img_4_3_pie; ?></h5></figcaption></figure></div>
				<div class="col-md-3"><figure><img src="<?php echo $img_4_4_link; ?>">
				<figcaption><h5><?php echo $img_4_4_pie; ?></h5></figcaption></figure></div>
        <h5><?php echo $img_4_1_pie; ?></h5>
		</div>
<br><br>
       <?php endif;


    endwhile;

else :

    // no layouts found

endif;

?></div><!-- .entry-content -->
            
         
            
            
</div>
    <div class="col-md-3">
		 <hr class="gris"><br>
		<?php  get_template_part( 'template-parts/part', 'share' ); 
				 if(has_tag()) {
    get_template_part( 'template-parts/part', 'tags' );
} else {
    //Article untagged
}

// check if the flexible content field has rows of data
if( have_rows('sidebar_modular') ):

 	// loop through the rows of data
    while ( have_rows('sidebar_modular') ) : the_row();
        
        // check current row layout
        if( get_row_layout() == 'imagen_sidebar' ): ?>

        <div class="cuadro_sidebar">

	<img src="<?php	the_sub_field('link_imagen_sidebar'); ?>" class="img-responsive" alt="Cinque Terre">
            <h5><?php the_sub_field('texto_imagen_sidebar'); ?></h5>
		
</div>
     <?php   endif;

		// check current row layout
        if( get_row_layout() == 'cuadro_sidebar' ): ?>

        <div class="cuadro_sidebar">
<?php	the_sub_field('editor_cuadro_sidebar'); ?>
		<hr class="gris">
</div>
     <?php   endif;
        
        // check current row layout
        if( get_row_layout() == 'enlaces_sidebar' ): ?>
<?php if( have_rows('lista_enlaces') ): ?>
<div class="listado materiasanteriores" style="margin-bottom:0;"><h1 class="listadoh1especial">Enlaces relacionados:</h1>
       
	<ul class="lista-inline" style="margin-bottom:0;">

	<?php while( have_rows('lista_enlaces') ): the_row(); 

		// vars
		$nombre_enlace = get_sub_field('nombre_enlace');
		$link_enlace = get_sub_field('link_enlace');
		?>

      <li>  <a href="<?php echo $link_enlace; ?>">
		<?php echo $nombre_enlace; ?></a></li>

	<?php endwhile; ?>
<hr class="grisclaro">
	</ul></div>

<?php endif; ?>
        
     <?php   endif;
        
         // check current row layout
        if( get_row_layout() == 'archivos_sidebar' ): ?>

        <?php if( have_rows('lista_archivos') ): ?>        
        
<div class="listado materiasanteriores" style="margin-bottom:0;"><h1 class="listadoh1especial">Archivos adjuntos</h1>
	<ul class="lista-inline" style="margin-bottom:0;">

	<?php while( have_rows('lista_archivos') ): the_row(); 

		// vars
		$nombre_archivo = get_sub_field('nombre_archivo');
		$link_archivo = get_sub_field('link_archivo');
		?>

        <li>  <?php if( $link_archivo ): ?> <a href="<?php echo $link_archivo; ?>"><span class="ion-document-text">   </span> - <?php endif; ?><?php echo $nombre_archivo; ?>
				</a></li>

	<?php endwhile; ?>
<hr class="grisclaro">
	</ul></div>

<?php endif; ?>
     <?php   endif;
        
                 // check current row layout
        if( get_row_layout() == 'galeria_sidebar' ): ?>

        
     <?php   endif;
          endwhile;

else :

    // no layouts found

endif;

?>   </div> </div>

<?php 
    
 endwhile; 
 endif; ?>
    
   <?php  get_template_part( 'template-parts/part', 'related' ); ?>
</div>
    
    
    <?php get_footer();  ?>