<?php
/*
    Template Name: Banco de Datos
    ID = 22
*/

get_header(); ?>

    <!-- Carousel
    ================================================== -->
   

   <div class="container">
                   
       <div id="breadcrumb"><?php if(function_exists('bcn_display'))
    {        bcn_display();    }?>
         </div>
             
                 
  <div class="row">
              <div class="col-md-7" id="postslist">
                                    <?php  get_template_part( 'template-parts/part', 'ifnoposts' ); 
                  
                  $catquery = new WP_Query( 'cat=22&posts_per_page=10' ); ?>

 
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
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

<?php endwhile;
    wp_reset_postdata();
?>

        
        </div> 
        <div class="col-md-4 col-md-offset-1">
            <hr class="grisclaro">
             <h4>Menu Banco de Datos</h4>
           <?php /* Menu Seccion navigation */
wp_nav_menu( array(
  'theme_location' => 'bancodatos',
 'depth' => 2, 'container' => 'ul', 'menu_class' => 'menulat')
);
?>
            <?php
get_sidebar(); ?>   
        </div> </div>   </div>





            <?php get_footer();
