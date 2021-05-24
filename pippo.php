<?php get_header();?><!-- header.php file -->
    
<div class="row">
    <div class="col-2"></div>
    <div class="col-8 pt-5">
            <?php 
                /**************************************
                    Condition to generate loop posts 
                ***************************************/
                    if (have_posts(  )):

                        while(have_posts(  )): the_post(  ); ?>

                        <!-- we print our title, content, dates -->
                        <?php get_template_part( 'content', get_post_format(  )); ?>
                    <hr>

                        <?php endwhile;
                    endif;

            ?>
    </div>
    <div class="col-2"></div>
</div>


<?php get_footer(); ?>   <!-- footer.php file -->