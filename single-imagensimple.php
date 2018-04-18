<?php
/*
 * Template Name: Imagen Grande
 * Template Post Type: post
 */
  
 get_header();  ?>

<div class="container">
    <div id="breadcrumb">
            <?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
        </div>
  
<div class="row  col95">
        <div class="col-md-7 col-md-offset-2">
            <div class="entry-meta">
			    <?php the_date('d \d\e F, Y');?>
		</div>
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
       
<h4>		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Seguir leyendo<span class="screen-reader-text"> "%s"</span>', 'dcao' ),
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
	</h4>           <?php if(has_tag()) {
    get_template_part( 'template-parts/part', 'tags' );
} else {
    //Article untagged
}
  ?></div><!-- .entry-content -->
</div>
    <div class="col-md-3"><div class="entry-meta">
	<?php if( get_field('autores') ): ?>	<h5 class="autores">Por: <?php the_field('autores'); ?></h5><?php endif; ?>
		
			  Publicado el <?php the_date('j \d\e F \d\e Y');?>
				   </div><br>     <hr class="gris"><br>
		<?php  get_template_part( 'template-parts/part', 'share' ); 

        		 get_template_part( 'template-parts/part', 'tags' ); 
  

// check if the flexible content field has rows of data
if( have_rows('sidebar_single') ):

 	// loop through the rows of data
    while ( have_rows('sidebar_single') ) : the_row();

		       
    endwhile;

else :

    // no layouts found

endif;

?>
     </div></div>
    
    
<?php  get_template_part( 'template-parts/part', 'related' ); ?>

</div>
    
    
    <?php get_footer();  ?>