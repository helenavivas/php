<?php
/**
 * Block: Home (Isla Transfers)
 * Path: laravelinas/blocks/home/block.php
 */

defined('ABSPATH') || exit;

// Helpers de campos (Genesis Custom Blocks suele usar block_value()).
// Si tu instalación usa $block->field(), cambia abajo.
$title         = block_value('title') ?: 'Traslados aeropuerto ↔ hotel sin colas ni sorpresas.';
$subtitle      = block_value('subtitle') ?: 'Reserva tu traslado en minutos con Isla Transfers: precio cerrado, conductores verificados y atención 24/7.';
$kicker        = block_value('kicker') ?: 'Traslados en isla · 24/7';

// 3 bullets/“badges”
$badge_1 = block_value('badge_1') ?: '✈️ Aeropuerto ↔ hotel';
$badge_2 = block_value('badge_2') ?: '🚐 Flota seleccionada';
$badge_3 = block_value('badge_3') ?: '📱 Confirmación inmediata';

// Bloque ID / clases
$block_id = 'it-home-' . wp_unique_id();
$classes  = 'it-home-block';
if (!empty($block['className'])) $classes .= ' ' . esc_attr($block['className']);
?>

<section id="<?php echo esc_attr($block_id); ?>" class="<?php echo esc_attr($classes); ?>">
  <div class="it-home container">
    <div class="it-home__grid">

      <!-- Columna izquierda -->
      <div class="it-home__left">
        <div class="it-pill">
          <span class="it-pill__dot"></span>
          <small><?php echo esc_html($kicker); ?></small>
        </div>

        <h1 class="it-home__title">
          <?php
            // Permite salto de línea con <span> si lo pones en el campo usando " | " como separador
            $parts = array_map('trim', explode('|', $title));
            echo esc_html($parts[0]);
            if (isset($parts[1])) {
              echo '<span>' . esc_html($parts[1]) . '</span>';
            }
          ?>
        </h1>

        <p class="it-home__subtitle"><?php echo esc_html($subtitle); ?></p>

        <div class="it-home__badges">
          <span class="it-badge it-badge--teal"><?php echo esc_html($badge_1); ?></span>
          <span class="it-badge it-badge--teal"><?php echo esc_html($badge_2); ?></span>
          <span class="it-badge it-badge--yellow"><?php echo esc_html($badge_3); ?></span>
        </div>

        <div class="it-home__trust">
          <div class="it-trust">
            <div class="it-trust__icon">⏱️</div>
            <div>
              <div class="it-trust__title">Sin esperas</div>
              <div class="it-trust__text">Reserva antes y sube directo al vehículo.</div>
            </div>
          </div>

          <div class="it-trust">
            <div class="it-trust__icon">💶</div>
            <div>
              <div class="it-trust__title">Precio cerrado</div>
              <div class="it-trust__text">Conoce el importe antes de confirmar.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Columna derecha (card informativa) -->
      <div class="it-home__right">
        <div class="it-panel">
          <p class="it-panel__kicker">Cómo funciona</p>

          <div class="it-step">
            <div class="it-step__num">1</div>
            <div>
              <div class="it-step__title">Indica tu ruta</div>
              <div class="it-step__text">Aeropuerto → hotel, hotel → aeropuerto o ida y vuelta.</div>
            </div>
          </div>

          <div class="it-step">
            <div class="it-step__num">2</div>
            <div>
              <div class="it-step__title">Elige vehículo</div>
              <div class="it-step__text">Según pasajeros y equipaje. Sin complicaciones.</div>
            </div>
          </div>

          <div class="it-step">
            <div class="it-step__num">3</div>
            <div>
              <div class="it-step__title">Confirmación inmediata</div>
              <div class="it-step__text">Recibe detalles del punto de recogida y horario.</div>
            </div>
          </div>

          <div class="it-panel__note">
            <span class="it-note__badge">🧑‍✈️</span>
            <p><strong>Conductores verificados</strong> y coordinación local 24/7.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
