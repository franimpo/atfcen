<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dcao
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row col95"> <div class="col-md-6 col-md-offset-2">
	<header class="entry-header">
<?php
		if(has_excerpt()) :
			the_title( '<h1 class="entry-title">', '</h1>' );
        the_excerpt( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title">', '</h1>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
		endif; ?>
	</header><!-- .entry-header -->
</div></div>
    <div class="row  col95">
        <div class="col-md-6 col-md-offset-2">
            
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

<!-- .entry-meta -->
	<div class="entry-content textolargo">
        <div class="entry-meta">
		<h5 class="autores">Por: <?php the_field('autores'); ?></h5>
		     
			  Publicado el <?php the_date('j \d\e F \d\e Y');?>
				   </div><br>
<h4>		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dcao' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dcao' ),
				'after'  => '</div>',
			) );
		?>
	</h4>
			  <header class="entry-header"></header></div><!-- .entry-content -->
               
  ?>
</div>
    <div class="col-md-3">
		<hr class="gris">
		<?php  get_template_part( 'template-parts/part', 'share' ); 
		  if(has_tag()) {
    get_template_part( 'template-parts/part', 'tags' );
} else {
    //Article untagged
}

// check if the flexible content field has rows of data
if( have_rows('sidebar_single') ):

 	// loop through the rows of data
    while ( have_rows('sidebar_single') ) : the_row();

		// check current row layout
        if( get_row_layout() == 'cuadro_sidebar' ): ?>

        <div class="cuadro_sidebar">

		<?php	 	the_sub_field('editor_cuadro_sidebar'); ?>
		
</div>
		<hr class="grisclaro">
     <?php   endif;
		
		// check current row layout
        if( get_row_layout() == 'lista_enlaces' ): ?>

        <?php if( have_rows('enlaces') ): ?>
                                    <div class="materiasanteriores"><h4>
										Enlaces relacionados:
										</h4>
                                        <ul class="lista-inline">

                                            <?php while( have_rows('enlaces') ): the_row(); 

		// vars
		$nombre_enlace = get_sub_field('nombre_enlace');
		$url_enlace = get_sub_field('url_enlace');

		?>

                                            <li><a href="<?php echo $url_enlace; ?>"  target="_blank">- <?php echo $nombre_enlace; ?></a></li>

                                            <?php endwhile; ?>

                                        </ul>
                                    </div>

                                    <?php endif; ?>
     <?php   endif;
		
		// check current row layout
        if( get_row_layout() == 'lista_archivos' ): ?>
     <?php if( have_rows('archivos') ): ?>
                                    <div class="materiasanteriores"><h4>
										Archivos adjuntos:
										</h4>
                                        <ul class="lista-inline">

                                            <?php while( have_rows('archivos') ): the_row(); 

		// vars
		$nombre_archivo = get_sub_field('nombre_archivo');
		$url_archivo = get_sub_field('url_archivo');

		?>

                                            <li><a href="<?php echo $url_archivo; ?>" target="_blank"><span class="ion-document-text"></span> - <?php echo $nombre_archivo; ?></a></li>

                                            <?php endwhile; ?>

                                        </ul>
                                    </div>

                                    <?php endif; ?>
     <?php   endif;

    endwhile;

else :

    // no layouts found

endif;

?>
        
        
        
        </div> </div>
</article><!-- #post-<?php the_ID(); ?> -->