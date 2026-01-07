<?php
$img = get_stylesheet_directory_uri() . '/assets/images';
?>

<section class="it-section">

  <!-- ===== SERVICIOS ===== -->
 <header class="it-header it-header--center">
  <p class="it-kicker">Servicios Isla Transfers</p>

  <h2 class="it-section-title">
    Nuestros servicios de traslado
  </h2>

  <div class="it-hint it-hint--top">
    <span class="it-dot"></span>
    <small>Traslados cómodos entre aeropuerto y hoteles</small>
  </div>
</header>

  <div class="it-services">
    <article class="it-service-card">
      <h3>✈️ Traslados Aeropuerto</h3>
      <p>Recogida puntual en el aeropuerto con conductores profesionales. Eligiendo hora, tipo de vehiculo y destino.</p>
    </article>

    <article class="it-service-card">
      <h3>🏨 Hoteles y Resorts</h3>
      <p>Traslados directos a hoteles colaboradores sin esperas. Nuestros hoteles estarán esperándoles a su llegada.</p>
    </article>
  </div>

  <!-- ===== HOTELES ===== -->
  <header class="it-header it-header--left">

  <h2 class="it-section-title">
    Hoteles colaboradores
  </h2>

  <p class="it-kicker">Coordinación directa con recepción</p>

  <p class="it-header-text">
    Trabajamos con la mejor selección de hoteles para garantizar traslados rápidos.
  </p>
</header>

  <div class="it-hotels">

    <article class="it-hotel-card">
      <img src="<?php echo $img; ?>/hotel-howl.jpg" alt="Hotel Howl">
      <div class="it-hotel-content">
        <h3>Hotel Howl</h3>
        <span class="it-rating">★★★★☆</span>
        <p>Hotel moderno en Puerto del Sol, perfecto para estancias urbanas.</p>
      </div>
    </article>

    <article class="it-hotel-card">
      <img src="<?php echo $img; ?>/hotel-la-daurada.jpg" alt="Hotel La Daurada">
      <div class="it-hotel-content">
        <h3>Hotel La Daurada</h3>
        <span class="it-rating">★★★★★</span>
        <p>Resort de lujo en la zona norte con servicios premium.</p>
      </div>
    </article>

    <article class="it-hotel-card">
      <img src="<?php echo $img; ?>/hotel-sol-mediterraneo.jpg" alt="Hotel Sol Mediterráneo">
      <div class="it-hotel-content">
        <h3>Hotel Sol Mediterráneo</h3>
        <span class="it-rating">★★★★☆</span>
        <p>Hotel céntrico, ideal para estancias flexibles.</p>
      </div>
    </article>

    <article class="it-hotel-card">
      <img src="<?php echo $img; ?>/hotel-transilvania-gold.jpg" alt="Hotel Transilvania Gold">
      <div class="it-hotel-content">
        <h3>Hotel Transilvania Gold</h3>
        <span class="it-rating">★★★★★</span>
        <p>Hotel cinco estrellas que ofrece lujo y confort excepcionales.</p>
      </div>
    </article>

  </div>

</section>
