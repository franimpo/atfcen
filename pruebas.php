<?php if(has_post_thumbnail( $post_id ) ): ?>
             <div class="post-image">
        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
    </div>

        <?php 
        }
else{       
        ?>
       <hr>
<?php } ?>


 <?php if(has_post_thumbnail())
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
        <div class="row row0m post">
                   
 <div class="col-xs-12 col-md-12"><h3><?php the_date('d/m/Y');?></h3>
     <h2><?php the_title(); ?></h2>
     <h3></h3>
               </div></div>
<?php } ?>