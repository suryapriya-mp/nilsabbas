<?php
/* Template Name: Template Gallery */
wp_head();
get_header();
?>

 <!-- Words to live by start -->
 <div class="image-gallery-tile-outer">
 <?php 
          $args = array(
            'numberposts' => 6,
            'post_type'   => 'our-gallery',
            'order'       => 'ASC',
            'orderby'     => 'title'
          );
          $loop = new WP_Query($args);
          if($loop->have_posts()) 
          {
            while ( $post_div = $loop->have_posts() ) :
              $loop->the_post();
              $gallery_img = wp_get_attachment_image_url( get_post_meta($post->ID, 'image', true), 'large');
              $gallery_title = get_post_meta( get_the_ID(), 'title', true);
              $galleryUrl = get_post( get_the_ID() )->guid;
          ?>
         
          
          <div class="mugshot-tile-outer__img-outer image-gallery-tile">
          <a href="<?= (!empty( $galleryUrl))? $galleryUrl:'#'; ?>">
            <img src="<?php echo esc_url($gallery_img); ?>">
           </a>
            <p><?php echo esc_html( (!empty($gallery_title ))?$gallery_title :'' ); ?></p>
         </div>
         
         
          
          <?php
            endwhile;
          }
          ?>
</div>
    <!-- Words to live by end -->

<?php
if( have_posts() ) : 
    // the_content();
    echo get_the_content();

endif;

get_footer();
?>

