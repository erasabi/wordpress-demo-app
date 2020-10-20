<?php 
    while(have_posts()) {
        /* ?: stops php so you can write html */
        the_post(); ?>
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_content(); ?>
        <hr>
        <?php 
        /*  ?php: to resume php */
    }
?>