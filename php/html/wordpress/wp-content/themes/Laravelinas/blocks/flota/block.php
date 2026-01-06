<?php
defined('ABSPATH') || exit;

// ✅ Base URL correcta a tu carpeta de imágenes del tema
$theme_img = get_stylesheet_directory_uri() . '/assets/images';

$vehiculos = [
  [
    'nombre' => 'Sedán Demo',
    'descripcion' => 'Cómodo y elegante para traslados diarios.',
    'pasajeros' => 'Hasta 3 pasajeros',
    'equipaje' => '2 maletas grandes',
    'extra' => 'Ideal para traslados individuales o en pareja.',
    'precio' => 'Desde 50€',
    'img' => $theme_img . '/sedan_demo.jpg',
  ],
  [
    'nombre' => 'Minivan VIP Deluxe',
    'descripcion' => 'Perfecta para familias y grupos pequeños.',
    'pasajeros' => 'Hasta 7 pasajeros',
    'equipaje' => '4–5 maletas',
    'extra' => 'Espacio y comodidad para todos.',
    'precio' => 'Desde 50€',
    'img' => $theme_img . '/minivan.jpg',
  ],
  [
    'nombre' => 'Toyota Yaris',
    'descripcion' => 'Compacto, ágil y muy eficiente.',
    'pasajeros' => 'Hasta 3 pasajeros',
    'equipaje' => '2 maletas de cabina',
    'extra' => 'Genial para moverse rápido por la isla.',
    'precio' => 'Desde 50€',
    'img' => $theme_img . '/yaris.jpg',
  ],
  [
    'nombre' => 'Mustang',
    'descripcion' => 'Estilo deportivo para una experiencia única.',
    'pasajeros' => 'Hasta 2 pasajeros',
    'equipaje' => 'Equipaje ligero',
    'extra' => 'Para quienes quieren algo diferente.',
    'precio' => 'Desde 50€',
    'img' => $theme_img . '/mustang.jpg',
  ],
  [
    'nombre' => 'Milano Starship',
    'descripcion' => 'SUV premium para viajar con total confort.',
    'pasajeros' => 'Hasta 4 pasajeros',
    'equipaje' => '3–4 maletas',
    'extra' => 'La opción más exclusiva de la flota.',
    'precio' => 'Desde 50€',
    'img' => $theme_img . '/milano.jpg',
  ],
];

$uid = 'laravelinas-coverflow-' . wp_unique_id();
?>

<section class="fleet-section container py-5">
  <div class="fleet-header text-center mb-4">
    <p class="fleet-kicker mb-2">Flota disponible en la isla</p>
    <h2 class="landing-section-title h4 mb-2">Vehículos preparados para tus traslados</h2>

    <!-- HINT ARRIBA -->
    <div class="laravelinas-coverflow__hint laravelinas-coverflow__hint--top">
      <span class="laravelinas-dot"></span>
      <small>Desliza o usa las flechas para ver la flota</small>
    </div>
  </div>

  <div class="laravelinas-coverflow" id="<?php echo esc_attr($uid); ?>" data-count="<?php echo esc_attr(count($vehiculos)); ?>">
    <button class="laravelinas-coverflow__btn laravelinas-coverflow__btn--prev" type="button" aria-label="Anterior">‹</button>

    <div class="laravelinas-coverflow__stage" aria-label="Carrusel de vehículos">
      <?php foreach ($vehiculos as $i => $v) : ?>
        <article class="fleet-card laravelinas-coverflow__card" data-index="<?php echo esc_attr($i); ?>">
          <div class="fleet-card-image-wrapper">
            <img class="fleet-card-image" src="<?php echo esc_url($v['img']); ?>" alt="<?php echo esc_attr($v['nombre']); ?>">
          </div>

          <div class="fleet-card-body">
            <div class="fleet-card-top">
              <h3 class="fleet-card-title"><?php echo esc_html($v['nombre']); ?></h3>
              <span class="fleet-price-pill"><?php echo esc_html($v['precio']); ?></span>
            </div>

            <p class="fleet-card-tagline"><?php echo esc_html($v['descripcion']); ?></p>

            <ul class="fleet-card-meta">
              <li>👥 <span><?php echo esc_html($v['pasajeros']); ?></span></li>
              <li>🧳 <span><?php echo esc_html($v['equipaje']); ?></span></li>
            </ul>

            <p class="fleet-card-footnote"><?php echo esc_html($v['extra']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <button class="laravelinas-coverflow__btn laravelinas-coverflow__btn--next" type="button" aria-label="Siguiente">›</button>
  </div>
</section>

<script>
(function(){
  const root = document.getElementById(<?php echo json_encode($uid); ?>);
  if (!root) return;

  const stage = root.querySelector('.laravelinas-coverflow__stage');
  const cards = Array.from(root.querySelectorAll('.laravelinas-coverflow__card'));
  const prev = root.querySelector('.laravelinas-coverflow__btn--prev');
  const next = root.querySelector('.laravelinas-coverflow__btn--next');
  const total = cards.length;

  let active = 0;

  function circularDelta(from, to, n){
    let d = to - from;
    if (d > n/2) d -= n;
    if (d < -n/2) d += n;
    return d;
  }

  function adjustStageHeight(){
    const activeCard = cards[active];
    if (!activeCard) return;

    // top real de la card (tú lo fijas con top: 80/90/100 según media query)
    const top = parseFloat(getComputedStyle(activeCard).top) || 0;

    // alto real de la tarjeta (ya renderizada)
    const h = activeCard.offsetHeight || 0;

    // extra para transform/ sombras
    const extra = 60;

    stage.style.height = (top + h + extra) + 'px';
  }

  function render(){
    cards.forEach((card, i) => {
      card.classList.remove('pos0','pos1','neg1','off','is-active');
      const d = circularDelta(active, i, total);

      if (d === 0) { card.classList.add('pos0','is-active'); return; }
      if (d === 1) { card.classList.add('pos1'); return; }
      if (d === -1){ card.classList.add('neg1'); return; }
      card.classList.add('off');
    });

    adjustStageHeight();
  }

  function go(delta){
    active = (active + delta + total) % total;
    render();
  }

  prev.addEventListener('click', () => go(-1));
  next.addEventListener('click', () => go(1));

  root.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') go(-1);
    if (e.key === 'ArrowRight') go(1);
  });

  cards.forEach((card, i) => {
    card.addEventListener('click', () => {
      const d = circularDelta(active, i, total);
      if (d === 0) return;
      go(d > 0 ? 1 : -1);
    });
  });

  // re-ajustar cuando cargan imágenes y al redimensionar
  window.addEventListener('resize', adjustStageHeight);
  window.addEventListener('load', adjustStageHeight);

  render();
})();
</script>