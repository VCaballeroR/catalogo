<?php
// Página catálogo principal
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catálogo · Tu Nombre</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Plus+Jakarta+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="catalog-page">

  <!-- Theme Toggle -->
  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
    <span class="icon-sun">☀</span>
    <span class="icon-moon">◑</span>
  </button>

  <!-- Nav -->
  <nav class="site-nav">
    <a href="index.php" class="nav-logo">VC</a>
    <div class="nav-links">
      <a href="catalogo.php" class="active">Catálogo</a>
      <a href="sobre-mi.php">Sobre mí</a>
      <a href="contacto.php">Contacto</a>
    </div>
  </nav>

  <!-- Category Detail Overlay -->
  <div class="overlay" id="overlay">
    <button class="overlay-close" id="overlayClose">✕</button>
    <div class="overlay-bg" id="overlayBg"></div>
    <div class="overlay-content">
      <div class="overlay-header">
        <span class="overlay-emoji" id="overlayEmoji"></span>
        <h2 id="overlayTitle"></h2>
        <p id="overlayDesc"></p>
      </div>
      <div class="overlay-items" id="overlayItems"></div>
    </div>
  </div>

  <main class="catalog-main">
    <header class="catalog-header">
      <h1>Mi catálogo</h1>
      <p>Gustos, referencias y estética personal.</p>
    </header>

    <section class="catalog-grid">

      <!-- Música -->
      <article class="cat-card music" data-category="music" tabindex="0">
        <div class="card-bg music-bg"></div>
        <div class="card-body">
          <span class="card-emoji">🎧</span>
          <h2>Música</h2>
          <p>Lo que suena mientras pienso</p>
          <div class="card-tags">
            <span>Lofi</span><span>Pop</span><span>Rock Alt.</span>
          </div>
          <button class="card-cta">Ver géneros →</button>
        </div>
      </article>

      <!-- Libros -->
      <article class="cat-card books" data-category="books" tabindex="0">
        <div class="card-bg books-bg"></div>
        <div class="card-body">
          <span class="card-emoji">📚</span>
          <h2>Libros</h2>
          <p>Lo que me gusta leer</p>
          <div class="card-tags">
            <span>Ficción</span><span>Ideas</span><span>Thriller</span>
          </div>
          <button class="card-cta">Ver géneros →</button>
        </div>
      </article>

      <!-- Arte -->
      <article class="cat-card art" data-category="art" tabindex="0">
        <div class="card-bg art-bg"></div>
        <div class="card-body">
          <span class="card-emoji">🎨</span>
          <h2>Arte</h2>
          <p>Estéticas que me llaman</p>
          <div class="card-tags">
            <span>Digital</span><span>Minimal</span><span>Glitch</span>
          </div>
          <button class="card-cta">Ver estilos →</button>
        </div>
      </article>

      <!-- Películas -->
      <article class="cat-card films" data-category="films" tabindex="0">
        <div class="card-bg films-bg"></div>
        <div class="card-body">
          <span class="card-emoji">🎬</span>
          <h2>Películas</h2>
          <p>Géneros y estilos que sigo</p>
          <div class="card-tags">
            <span>Sci-fi</span><span>Drama</span><span>Animación</span>
          </div>
          <button class="card-cta">Ver géneros →</button>
        </div>
      </article>

    </section>
  </main>

  <script src="js/theme.js"></script>
  <script src="js/catalog.js"></script>
</body>
</html>
