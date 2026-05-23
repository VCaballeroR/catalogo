<?php
// Landing page - Catálogo Personal
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo Personal</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="landing-page">

  <!-- Theme Toggle -->
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
    <span class="icon-sun">☀</span>
    <span class="icon-moon">◑</span>
  </button>

  <main class="landing-container">
    <div class="landing-bg-mesh"></div>

    <div class="landing-content">
      <div class="tag-pill">catálogo personal · 2026</div>

      <h1 class="landing-name">
        <span class="name-line">Valerie</span>
        <span class="name-line accent">Caballero</span>
      </h1>

      <p class="landing-phrase">
        Un espacio visual para lo que me define.
      </p>

      <div class="landing-actions">
        <a href="catalogo.php" class="btn-enter">
          <span>Explorar catálogo</span>
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="sobre-mi.php" class="btn-secondary">Sobre mí</a>
      </div>

      <div class="landing-categories-preview">
        <span>🎧 Música</span>
        <span>📚 Libros</span>
        <span>🎨 Arte</span>
        <span>🎬 Películas</span>
      </div>
    </div>

    <div class="landing-deco">
      <div class="deco-circle c1"></div>
      <div class="deco-circle c2"></div>
      <div class="deco-circle c3"></div>
    </div>
  </main>

  <script src="js/theme.js"></script>
</body>
</html>
