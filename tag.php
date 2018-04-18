<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  
   <div class="container">
                   
        <header class="archive-header">
              <h1 class="titulo_esp"><?php printf(single_tag_title( '', false ) ); ?></h1>

                <?php
                    // Show an optional term description.
                    $term_description = term_description();
                    if ( ! empty( $term_description ) ) :
                        printf( '<div class="taxonomy-description">%s</div>', $term_description );
                    endif;
                ?>
            </header><!-- .archive-header -->
             
                 
  <div class="row">
              <div class="col-md-7" id="postslist">                          
            <?php if ( have_posts() ) : ?>

 
            <?php
                $counter = 1; //Starts counter for post column lay out

                // Start the Loop.
                while ( have_posts() ) : the_post();

        ?>
				  
              <a href="<?php the_permalink() ?>">
  <?php if(has_post_thumbnail())
        { 
        ?>
            <div class="row row0m post">
                  <div class="col-xs-12 col-md-3 post-image"> 
        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
    </div>
 <div class="col-xs-12 col-md-9"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
     <h3></h3>
               </div></div>

        <?php 
        }
else{       
        ?>
        <div class="row row0m post">
                   
 <div class="col-xs-12 col-md-12"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
     <h3></h3>
               </div></div>
<?php } ?></a>

<?php   

            $counter++; //Update the counter

            endwhile;
        else :
                    // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );
                endif;
            ?>

        
        </div> 
    </div>   </div>

<?php
get_footer();