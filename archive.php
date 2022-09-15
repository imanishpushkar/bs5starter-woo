<?php get_header(); ?>

<main class="container">
  <div class="row py-3">
    <?php while (have_posts()) : the_post();  ?>
      <div class="col-sm-4 py-3 g-2 border border-dark border-2">
        <h3><a href="<?php echo get_permalink($post->ID) ?>"><?php the_title() ?></a></h3>
        <div><?php the_excerpt(); ?></div>
      </div>
    <?php endwhile ?>
  </div>
</main>

<?php get_footer(); ?>