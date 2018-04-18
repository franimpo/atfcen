<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Departamento_de_Ciencias_de_la_Atmosfera
 */

get_header(); ?>
<div class="container">
      <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
    
	
		<div class="row single">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
           

		</div>

 <?php  get_template_part( 'template-parts/part', 'related' ); ?>
	</div><!-- #primary -->


       <?php get_footer();