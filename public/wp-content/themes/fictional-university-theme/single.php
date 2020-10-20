<?php 
    get_header();
    
    while(have_posts()) {
        /* ?: stops php so you can write html */
        the_post(); ?>
        <h2>
            <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
        <hr>
        <?php 
        /*  ?php: to resume php */
    }
    
    get_footer();
?>