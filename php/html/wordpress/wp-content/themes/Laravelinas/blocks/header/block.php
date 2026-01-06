<?php
/**
 * Block Name: Header
 * Description: Cabecera corporativa fija, sin dependencias de post_id.
 */
?>

<style>
  .laravelinas-header {
    position: sticky;
    top: 0;
    z-index: 999;
    background: rgba(245,246,250,.88);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(148,163,184,.35);
  }

  .laravelinas-header .laravelinas-container{
    width: min(1140px, calc(100% - 3rem));
    margin-inline: auto;
  }

  .laravelinas-header-inner{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 1rem;
    padding: .9rem 0;
    flex-wrap: wrap;
  }

  .laravelinas-brand{
    display:flex;
    align-items:center;
    gap:.75rem;
    text-decoration:none;
  }

  .laravelinas-logo-dot{
    width:12px;height:12px;border-radius:999px;
    background: linear-gradient(135deg, #0f9f9a, #facc6b);
    box-shadow: 0 0 0 6px rgba(15,159,154,.15);
    flex-shrink: 0;
  }

  .laravelinas-brand-title{
    font-weight: 900;
    letter-spacing: .06em;
    text-transform: uppercase;
    font-size: .95rem;
    color: #0f172a;
    line-height: 1.1;
  }
  .laravelinas-brand-sub{
    font-size: .85rem;
    color: #64748b;
    line-height: 1.1;
  }

  .laravelinas-nav ul{
    display:flex;
    gap:.9rem;
    list-style:none;
    margin:0;
    padding:0;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
  }

  .laravelinas-nav a{
    display:inline-flex;
    align-items:center;
    gap:.35rem;
    padding:.45rem .75rem;
    border-radius:999px;
    color:#0f172a;
    font-weight:700;
    font-size:.92rem;
    text-decoration:none;
    transition: background .2s ease, color .2s ease, transform .2s ease;
  }
  .laravelinas-nav a:hover{
    background: rgba(15,118,110,.10);
    color: #0f766e;
    transform: translateY(-1px);
  }

  .btn-login{
    background: rgba(250,204,107,.65);
    border: 1px solid rgba(250,204,107,.75);
    color: #111827 !important;
    padding: .55rem 1.15rem !important;
    border-radius: 999px;
    font-weight: 900;
  }
  .btn-login:hover{
    background: #fbbf24;
    border-color: #fbbf24;
    color: #111827 !important;
  }

  @media (max-width: 768px){
    .laravelinas-header-inner{ justify-content: center; }
    .laravelinas-nav ul{ justify-content: center; }
  }
</style>

<header class="laravelinas-header">
  <div class="laravelinas-container">
    <div class="laravelinas-header-inner">
      <a class="laravelinas-brand" href="/">
        <span class="laravelinas-logo-dot" aria-hidden="true"></span>
        <div>
          <div class="laravelinas-brand-title">ISLA TRANSFERS</div>
          <div class="laravelinas-brand-sub">Traslados en isla · 24/7</div>
        </div>
      </a>

      <nav class="laravelinas-nav" aria-label="Navegación principal">
        <ul>
          <li><a href="/">Inicio</a></li>
          <li><a href="/flota/">Flota</a></li>
          <li><a href="/servicios/">Servicios</a></li>
          <li><a href="/noticias/">Noticias</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
