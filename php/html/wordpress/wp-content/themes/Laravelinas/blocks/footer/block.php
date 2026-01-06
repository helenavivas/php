<?php
/**
 * Block Name: Footer
 * Description: Pie corporativo, sin post_id ni campos.
 */
?>

<style>
  .site-footer{
    margin-top: 4rem;
    background: radial-gradient(circle at 0% 0%, #0f9f9a 0%, #0f766e 35%, #0b5258 70%, #082f49 100%);
    color: #e5f9f7;
    padding: 2.5rem 0 1.8rem;
  }

  .site-footer .laravelinas-container{
    width: min(1140px, calc(100% - 3rem));
    margin-inline: auto;
  }

  .footer-grid{
    display:grid;
    grid-template-columns: repeat(3, minmax(0,1fr));
    gap: 1.25rem;
  }

  .site-footer-title{
    font-weight: 900;
    font-size: 1.05rem;
    letter-spacing: .06em;
    text-transform: uppercase;
    margin: 0 0 .5rem;
  }

  .site-footer-text{
    font-size:.92rem;
    color:#cbd5f5;
    margin:0;
    max-width: 44ch;
    line-height: 1.35;
  }

  .site-footer-heading{
    font-size:.9rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing:.08em;
    margin: 0 0 .5rem;
    color: #fefce8;
  }

  .site-footer-link{
    display:inline-flex;
    align-items:center;
    gap:.3rem;
    font-size:.92rem;
    margin-bottom:.25rem;
    color:#e5f9f7;
    text-decoration:none;
  }
  .site-footer-link:hover{
    color:#facc6b;
  }

  .site-footer-highlights{
    font-size:.92rem;
    color:#fef9c3;
    margin:0;
    line-height: 1.35;
  }

  .site-footer-bottom{
    border-top: 1px solid rgba(148, 163, 184, 0.4);
    padding-top: 1rem;
    margin-top: 1.25rem;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap: 1rem;
    flex-wrap:wrap;
    font-size:.85rem;
    color:#cbd5f5;
  }

  .site-footer-bottom a{
    color:#e5f9f7;
    text-decoration:none;
  }
  .site-footer-bottom a:hover{
    color:#facc6b;
    text-decoration:underline;
  }

  @media (max-width: 768px){
    .footer-grid{ grid-template-columns: 1fr; }
  }
</style>

<footer class="site-footer">
  <div class="laravelinas-container">
    <div class="footer-grid">
      <div>
        <div class="site-footer-title">ISLA TRANSFERS</div>
        <p class="site-footer-text">
          Traslados aeropuerto ↔ hotel en la isla, con paneles para administradores, hoteles y viajeros.
        </p>
      </div>

      <div>
        <div class="site-footer-heading">Navegación</div>
        <a class="site-footer-link" href="/"><span>➜</span> Inicio</a><br>
        <a class="site-footer-link" href="/nuestros-servicios/"><span>➜</span> Servicios</a><br>
        <a class="site-footer-link" href="/nuestra-flota/"><span>➜</span> Flota</a><br>
        <a class="site-footer-link" href="/noticias/"><span>➜</span> Noticias</a>
      </div>

      <div>
        <div class="site-footer-heading">En una frase</div>
        <p class="site-footer-highlights">
          24/7 en la isla, precio cerrado y una experiencia sin colas ni sorpresas.
        </p>
      </div>
    </div>

    <div class="site-footer-bottom">
      <span>© Laravelinas</span>
      <span>
        <a href="#">Términos</a> · <a href="#">Privacidad</a>
      </span>
    </div>
  </div>
</footer>