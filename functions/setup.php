<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menu('main-menu', 'Main menu');
add_action('after_setup_theme', 'custom_image_sizes');
function custom_image_sizes()
{
  add_image_size('image-1920px-wide', 1920); // used as alternative for maximum size of images instead of 'full'
  // 'medium_large' for 768 pixels wide is automatically added by WordPress
}

/*
*WooCommerce Integration
*/
add_theme_support('woocommerce');
function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
add_shortcode('woo_cart_but', 'wooCart');

function wooCart()
{
  ob_start();

  $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
  $cart_url = wc_get_cart_url();  // Set Cart URL

?>
  <a class="menu-item cart-contents" href="<?php echo $cart_url; ?>" title="My Basket">
    <?php
    if ($cart_count > 0) {
    ?>
      <span class="cart-contents-count"><?php echo $cart_count; ?></span>
    <?php
    }
    ?>
  </a>
<?php

  return ob_get_clean();
}

add_filter('woocommerce_add_to_cart_fragments', 'wooCartCount');
/**
 * Add AJAX Shortcode when cart contents update
 */
function wooCartCount($fragments)
{

  ob_start();

  $cart_count = WC()->cart->cart_contents_count;
  $cart_url = wc_get_cart_url();

?>
  <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e('View your shopping cart'); ?>">
    <?php
    if ($cart_count > 0) {
    ?>
      <span class="cart-contents-count"><?php echo $cart_count; ?></span>
    <?php
    }
    ?></a>
<?php

  $fragments['a.cart-contents'] = ob_get_clean();

  return $fragments;
}
/**
 * Add a sidebar.
 */
function wooSidebar()
{
  register_sidebar(array(
    'name'          => __('WooCommerce Sidebar', 'textdomain'),
    'id'            => 'sidebar-woocommerce',
    'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'wooSidebar');
