<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>

  <span class="screen-darken"></span>

  <div class="container shadow-lg my-3">
    <div class="row py-3 d-lg-none">
      <div class="col-6">
        <a class="navbar-brand" href="<?php echo home_url(); ?>/">
          <h3><?php echo get_bloginfo('name'); ?></h3>
          <div class="tagline"><?php echo get_bloginfo('description'); ?></div>
        </a>
      </div>

      <div class="col-4 text-end">
        <a class="cta-primary" href="<?php echo home_url(); ?>/cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="auto" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
          </svg> Cart
        </a>
        <sup><?php echo do_shortcode("[woo_cart_but]"); ?></sup>
      </div>

      <div class="col-2">
        <button data-trigger="navbar_main" class="btn btn-warning float-end" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-11">
        <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <div class="offcanvas-header">
              <button class="btn-close float-end"></button>
            </div>
            <a class="navbar-brand" href="<?php echo home_url(); ?>/">
              <h3><?php echo get_bloginfo('name'); ?></h3>
              <div class="tagline"><?php echo get_bloginfo('description'); ?></div>
            </a>

            <?php
            wp_nav_menu(array(
              'theme_location'  => 'main-menu',
              'container'       => false,
              'menu_class'      => '',
              'fallback_cb'     => '__return_false',
              'items_wrap'      => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
              'depth'           => 3,
              'walker'          => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>

          </div>
        </nav>
      </div>
      <div class="cart-desktop col-sm-1 align-self-center d-flex text-end">
        <a class="cta-primary" href="<?php echo home_url(); ?>/cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="auto" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
            <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
          </svg> Cart
        </a>
        <sup><?php echo do_shortcode("[woo_cart_but]"); ?></sup>
      </div>

    </div>

  </div>