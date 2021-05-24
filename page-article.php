 <!-- ******************************************************** 
    Questo è il template per la pagina articolo. 
    Quando verrà aperto l'articolo, si aprirà in questa pagina.
**************************************************************-->

<?php get_header();?><!-- header.php file -->
    
<?php 
        /*
            Template name: Page article 
        */
?>

<div class="row mt-5">
    <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8">
        <img class="card-img-top img-fluid" <?php the_post_thumbnail('thumbnails') //features image ?> 
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); //titles of every post ?></h5>
            <p class="card-text"><small class="text-muted">Pubblicato il: <?php the_time('j F Y'); ?> alle <?php the_time('g:i a'); ?>, <?php the_category(); ?></small></p><!-- Date (and his format), time (and his format) and category -->
            <p class="card-text"><?php the_content(); //contents of every post ?></p>
        </div>
    </div>
</div>


<?php get_footer(); ?>   <!-- footer.php file -->