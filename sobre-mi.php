<?php
// Página Sobre mí
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre mí · Valerie Caballero</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="about-page">

  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
    <span class="icon-sun">☀</span>
    <span class="icon-moon">◑</span>
  </button>

  <nav class="site-nav">
    <a href="index.php" class="nav-logo">VC</a>
    <div class="nav-links">
      <a href="catalogo.php">Catálogo</a>
      <a href="sobre-mi.php" class="active">Sobre mí</a>
      <a href="contacto.php">Contacto</a>
    </div>
  </nav>

  <main class="about-main">
    <div class="about-deco"></div>

    <section class="about-grid">


<div class="about-photo-col">
  <div class="photo-frame">

    <img src="img/me.PNG" alt="Imagen perfil" class="profile-img">

    <div class="photo-label">@liieth</div>

  </div>
</div>






      <div class="about-text-col">
        <span class="section-tag">Sobre mí</span>
        <h1>Hola, soy<br/><em>Valerie</em></h1>

        <p class="about-bio">
          Estudiante de Tic's con interés en cyberseguridad. Me gusta explorar cosas a mi propio ritmo y encontrar conexiones entre lo técnico y lo creativo.
        </p>
        <p class="about-bio">
          Este espacio es una muestra de lo que me define: los géneros musicales que escucho, los libros que leo, el arte que me inspira y las películas que me quedan dando vueltas.
        </p>

        <div class="about-hobbies">
          <h3>Hobbies</h3>
          <div class="hobby-list">
            <div class="hobby-item">
              <span class="hobby-icon">🎵</span>
              <span>Música</span>
            </div>
            <div class="hobby-item">
              <span class="hobby-icon">📖</span>
              <span>Lectura</span>
            </div>
            <div class="hobby-item">
              <span class="hobby-icon">🎮</span>
              <span>Gaming</span>
            </div>
            <div class="hobby-item">
              <span class="hobby-icon">🎸</span>
              <span>Entonar</span>
            </div>
            <div class="hobby-item">
              <span class="hobby-icon">🌐</span>
              <span>Tecnología</span>
            </div>
          </div>
        </div>

        <div class="about-actions">
          <a href="catalogo.php" class="btn-enter">Ver mi catálogo</a>
          <a href="contacto.php" class="btn-secondary">Escribirme</a>
        </div>
      </div>

    </section>
  </main>

  <script src="js/theme.js"></script>
</body>
</html>
