<?php
/* Template Name: Template Our Gallery */
wp_head();
get_header();
?>

 <!-- Words to live by start -->
 
    <!-- Words to live by end -->

<?php
if( have_posts() ) : 
    // the_content();
    echo get_the_content();

endif;

get_footer();
?>

