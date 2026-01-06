<?php
/**
 * Block: Reseñas (Isla Transfers)
 * Path: laravelinas/blocks/reviews/block.php
 */

defined('ABSPATH') || exit;

// Textos de cabecera
$title    = block_value('title') ?: 'Lo que dicen nuestros clientes';
$subtitle = block_value('subtitle') ?: 'Hoteles y viajeros que ya usan Isla Transfers para organizar sus traslados en la isla.';

// Reseña 1
$r1_name   = block_value('r1_name') ?: 'Hotel Cala Azul';
$r1_role   = block_value('r1_role') ?: 'Recepción';
$r1_text   = block_value('r1_text') ?: 'Antes gestionábamos los traslados con llamadas y correos. Ahora lo tenemos todo claro, rápido y con confirmación inmediata.';
$r1_init   = block_value('r1_initials') ?: 'CA';

// Reseña 2
$r2_name   = block_value('r2_name') ?: 'Laura M.';
$r2_role   = block_value('r2_role') ?: 'Viajera';
$r2_text   = block_value('r2_text') ?: 'Reservé ida y vuelta en cinco minutos. Al llegar ya nos estaban esperando y no tuvimos que buscar taxi después del vuelo.';
$r2_init   = block_value('r2_initials') ?: 'LM';

// Reseña 3
$r3_name   = block_value('r3_name') ?: 'Claudia López';
$r3_role   = block_value('r3_role') ?: 'Viajera';
$r3_text   = block_value('r3_text') ?: 'Llevo usando esta plataforma varios años y estoy muy contenta. Nunca me han dado problemas... Lo recomiendo mucho.';
$r3_init   = block_value('r3_initials') ?: 'CL';

$block_id = 'it-reviews-' . wp_unique_id();
$classes  = 'it-reviews-block';
if (!empty($block['className'])) $classes .= ' ' . esc_attr($block['className']);
?>

<section id="<?php echo esc_attr($block_id); ?>" class="<?php echo esc_attr($classes); ?>">
  <div class="container it-reviews">
    <header class="it-reviews__header">
      <h2 class="it-reviews__title"><?php echo esc_html($title); ?></h2>
      <p class="it-reviews__subtitle"><?php echo esc_html($subtitle); ?></p>
    </header>

    <div class="it-reviews__grid">
      <article class="it-review">
        <div class="it-review__top">
          <div class="it-review__avatar"><?php echo esc_html($r1_init); ?></div>
          <div class="it-review__who">
            <div class="it-review__name"><?php echo esc_html($r1_name); ?></div>
            <div class="it-review__role"><?php echo esc_html($r1_role); ?></div>
          </div>
          <div class="it-review__stars" aria-label="5 estrellas">★★★★★</div>
        </div>
        <p class="it-review__text">“<?php echo esc_html($r1_text); ?>”</p>
      </article>

      <article class="it-review">
        <div class="it-review__top">
          <div class="it-review__avatar"><?php echo esc_html($r2_init); ?></div>
          <div class="it-review__who">
            <div class="it-review__name"><?php echo esc_html($r2_name); ?></div>
            <div class="it-review__role"><?php echo esc_html($r2_role); ?></div>
          </div>
          <div class="it-review__stars" aria-label="5 estrellas">★★★★★</div>
        </div>
        <p class="it-review__text">“<?php echo esc_html($r2_text); ?>”</p>
      </article>

      <article class="it-review">
        <div class="it-review__top">
          <div class="it-review__avatar"><?php echo esc_html($r3_init); ?></div>
          <div class="it-review__who">
            <div class="it-review__name"><?php echo esc_html($r3_name); ?></div>
            <div class="it-review__role"><?php echo esc_html($r3_role); ?></div>
          </div>
          <div class="it-review__stars" aria-label="5 estrellas">★★★★★</div>
        </div>
        <p class="it-review__text">“<?php echo esc_html($r3_text); ?>”</p>
      </article>
    </div>
  </div>
</section>