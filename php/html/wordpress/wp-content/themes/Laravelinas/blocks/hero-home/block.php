<?php
/**
 * Block: Hero Home (Isla Transfers)
 * Path: laravelinas/blocks/hero-home/block.php
 */

defined('ABSPATH') || exit;

// Texto superpuesto (editable desde Genesis)
$overlay_text = block_value('overlay_text') ?: 'Isla Transfers';

// Imagen fija del theme
$hero_img = get_stylesheet_directory_uri() . '/assets/images/hero_image.jpg';

$block_id = 'it-hero-home-' . wp_unique_id();
$classes  = 'it-hero-home-block';
if (!empty($block['className'])) {
  $classes .= ' ' . esc_attr($block['className']);
}
?>

<section id="<?php echo esc_attr($block_id); ?>" class="<?php echo esc_attr($classes); ?>">
  <div class="it-hero-home__wrap">

    <img
      class="it-hero-home__img"
      src="<?php echo esc_url($hero_img); ?>"
      alt="Isla Transfers"
      loading="eager"
    />

    <div class="it-hero-home__overlay"></div>

    <div class="it-hero-home__content">
      <h1 class="it-hero-home__title">
        <?php echo esc_html($overlay_text); ?>
      </h1>
    </div>

  </div>
</section>