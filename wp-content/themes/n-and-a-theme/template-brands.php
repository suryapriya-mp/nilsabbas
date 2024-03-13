<?php
/* Template Name: Template Brands */
wp_head();
get_header();
?>

 <!-- Words to live by start -->
 <div class="fun-and-freedom-sec words-to-live-sec" style="background-image: url('<?php echo get_template_directory_uri().'/assets/images/laptop.jpg'; ?>)">
      <div class="content-wrapper">
        <div class="fun-and-freedom-sec__inner">
          <p class="fun-and-freedom-sec__top-desc">Words to live by</p>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
          <h2 class="words-to-live-sec__heading">Kind words creates confidence.</h2>
      </div>
      </div>
    </div>
    <!-- Words to live by end -->

<?php
if( have_posts() ) : 
    // the_content();
    echo get_the_content();

endif;

get_footer();
?>
