<?php
/**
 * Block: Resumen de Traslados por Zona
 */

$api_url = 'https://fp064.techlab.uoc.edu/~uocx1/producto3/api/resumen-zonas';

// Obtener datos JSON
$response = wp_remote_get($api_url);
$data = [];
if (!is_wp_error($response)) {
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
}

$total_traslados = $data['total_traslados'] ?? 0;
$resumen_zonas = $data['resumen_por_zona'] ?? [];
?>

<section class="it-section it-zonas">
  <header class="it-header it-header--left">
    <h2 class="it-section-title">Resumen de traslados por zona</h2>
    <p class="it-kicker">Total de traslados realizados: <strong><?php echo esc_html($total_traslados); ?></strong>.</p>
    <p class="it-header-text">
      A continuación se muestra la distribución por zonas:
    </p>
  </header>

  <div class="it-zonas-grid">

    <!-- ===== TABLA ===== -->
    <div class="it-zonas-card">
      <table class="it-zonas-table">
        <thead>
          <tr>
            <th>Zona</th>
            <th>Traslados</th>
            <th>% del total</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($resumen_zonas as $zona) : ?>
            <tr>
              <td><?php echo esc_html($zona['zona']); ?></td>
              <td><?php echo esc_html($zona['num_traslados']); ?></td>
              <td><?php echo esc_html($zona['porcentaje']); ?>%</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- ===== DIAGRAMA DE BARRAS ===== -->
    <div class="it-zonas-card it-zonas-bars">
      <?php foreach ($resumen_zonas as $zona) :
        $width = intval($zona['porcentaje']);
      ?>
        <div class="it-bar-wrapper">
          <span class="it-bar-label"><?php echo esc_html($zona['zona']); ?> (<?php echo esc_html($zona['num_traslados']); ?>)</span>
          <div class="it-bar-bg">
            <div class="it-bar-fill" style="width: <?php echo $width; ?>%;"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
