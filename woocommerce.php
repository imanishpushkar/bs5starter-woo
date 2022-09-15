<?php get_header(); ?>

<main class="container">
  <div class="row py-5">
    <div class="col-sm-10 woocommerce">
      <?php woocommerce_content(); ?>
    </div>
    <div class="col-sm-2 border-dark border-start border-2">
      <?php if (is_active_sidebar('sidebar-woocommerce')) : ?>
        <?php dynamic_sidebar('sidebar-woocommerce'); ?>
      <?php else : ?>
        <!-- Time to add some widgets! -->
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>