<?php
$posttags = get_the_tags();
if ($posttags) :
?>

<div class="moreposts"><br>
 <div class="tituloseccion"><h2>Articulos relacionados</h2><hr></div>
            <div class="row">
            <?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
                

  <?php if(has_post_thumbnail())
        { 
        ?>
    <div class="col-xs-12 col-md-4" id="postslist"><a href="<?php the_permalink() ?>">
     
          
                  <div class="col-xs-12 post-image"> 
        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
    </div>
 <div class="col-xs-12"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
    <hr class="hr767">
               </div></a></div><hr class="hr767">

        <?php 
        }
else{       
        ?>
    <div class="col-xs-12 col-md-4" id="postslist"><hr class="gris"><a href="<?php the_permalink() ?>">
     
          
                  
 <div class="col-xs-12"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
    <hr class="hr767">
               </div></a></div><hr class="hr767">
<?php } ?>
 
<?php
endwhile;
}
wp_reset_query();
}
?></div>
    </div>

<?php
endif;
?>