<!-- POST'S STRUCTURE -->

<div class="col card mb-3">
  <img class="card-img-top img-fluid" alt="..." <?php the_post_thumbnail('thumbnails') //features image ?> 
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); //titles of every post ?></h5>
    <p class="card-text"><small class="text-muted">Pubblicato il: <?php the_time('j F Y'); ?> alle <?php the_time('g:i a'); ?>, <?php the_category(); ?></small></p><!-- Date (and his format), time (and his format) and category -->
    <p class="card-text"><?php the_content(); //contents of every post ?></p>
  </div>
</div>