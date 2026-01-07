<?php
/**
 * Block: Noticias – imagen destacada o fallback
 */

// Configuración: número de noticias a mostrar
$numero_noticias = 6;

// Query de WordPress
$args = [
    'post_type'      => 'post',
    'posts_per_page' => $numero_noticias,
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$noticias = new WP_Query($args);
?>

<section class="it-section it-noticias">
  <div class="fleet-header text-center mb-4">
    <p class="fleet-kicker mb-2">Últimas noticias</p>
    <h2 class="landing-section-title h4 mb-2">Mantente informado con nuestras novedades</h2>

    <!-- Hint estilo coverflow -->
    <div class="laravelinas-coverflow__hint laravelinas-coverflow__hint--top">
      <span class="laravelinas-dot"></span>
      <small>Revisa las noticias recientes</small>
    </div>
  </div>

  <div class="it-noticias-grid">
    <?php if ($noticias->have_posts()) : ?>
      <?php $i = 1; ?>
      <?php while ($noticias->have_posts()) : $noticias->the_post(); ?>
        <article class="it-noticia-card">
          <div class="it-noticia-img">
            <?php 
            if (has_post_thumbnail()) : 
              // Usa imagen destacada
            ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
              </a>
            <?php else: 
              // Usa fallback desde assets/images/noticia-1.jpg, noticia-2.jpg, ...
              $fallback_img = get_stylesheet_directory_uri() . '/assets/images/noticia-' . $i . '.jpg';
            ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($fallback_img); ?>" alt="<?php the_title_attribute(); ?>">
              </a>
            <?php endif; ?>
          </div>

          <div class="it-noticia-content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="it-noticia-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
            <a class="it-noticia-readmore" href="<?php the_permalink(); ?>">Leer más →</a>
          </div>
        </article>
      <?php $i++; endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p>No hay noticias disponibles.</p>
    <?php endif; ?>
  </div>
</section>
