<?php
wp_head();
get_header();

if( have_posts() ) : 

    // the_content();
    echo get_the_content();

endif;

get_footer();
?>
