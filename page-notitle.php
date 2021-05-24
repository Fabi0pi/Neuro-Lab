<?php get_header();?>
    
    <?php 

    /*
        Template name: Page no title. 
        this page was created to have an alternative 
        with the loop posts but without their titles
    */
    
    if (have_posts(  )):

        while(have_posts(  )): the_post(  ); ?>

        <!-- we print our title, content, dates -->
        
        
        <small>Pubblicato il: <?php the_time('j F Y'); ?> alle <?php the_time('g:i a'); ?>, <?php the_category(); ?></small> <!-- Date (and his format), time (and his format) and category -->

        <p><?php the_content(); ?></p>                               <!-- contents of every post -->

        <hr>

        <?php endwhile;
    endif;

    ?>

<?php get_footer(); ?>