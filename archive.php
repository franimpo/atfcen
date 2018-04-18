<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dcao
 */

get_header(); ?>

	<div class="container">
		   <div id="breadcrumb"><?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
         </div>


		
		<?php
		if ( have_posts() ) : ?>
        <div class="row row0m post">
                   
 <a href="<?php the_permalink() ?>"><div class="col-xs-12 col-md-12"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
    
               </div> </a></div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
		
		

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</div><!-- #primary -->

<?php 
get_footer();
