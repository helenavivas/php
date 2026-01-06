Laravelinas - Tema de Bloques (FSE)

Estructura:
- blocks/  -> Bloques PHP (Genesis Custom Blocks). Cada bloque usa blocks/<slug>/block.php
- parts/   -> Partes reutilizables: header.html y footer.html
- templates/ -> Plantillas: index.html
- style.css, theme.json, readme.txt

Notas:
- El diseño sigue una línea teal + amarillo y componentes tipo hero/cajas/beneficios/flota/testimonios.
- El bloque "estadisticas-zonas" está preparado para leer un JSON en /wp-content/uploads/transfers.json (o URL definida en el propio bloque).
