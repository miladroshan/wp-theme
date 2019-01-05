<?php
    get_header();

    while(have_posts())
    {
        the_post();
        the_content();

    }

    get_sidebar();
    get_footer();
?>