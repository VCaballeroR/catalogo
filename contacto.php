<?php
// Página de contacto con formulario PHP + MySQL
require_once 'php/db.php';

$mensaje_enviado = false;
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim(htmlspecialchars($_POST['nombre'] ?? ''));
    $correo  = trim(htmlspecialchars($_POST['correo'] ?? ''));
    $mensaje = trim(htmlspecialchars($_POST['mensaje'] ?? ''));

    // Validación server-side
    if (empty($nombre) || strlen($nombre) < 2) {
        $error_msg = 'Por favor ingresa un nombre válido.';
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error_msg = 'El correo electrónico no es válido.';
    } elseif (empty($mensaje) || strlen($mensaje) < 10) {
        $error_msg = 'El mensaje debe tener al menos 10 caracteres.';
    } else {
        // Guardar en base de datos
        try {
            $stmt = $pdo->prepare(
                "INSERT INTO mensajes (nombre, correo, mensaje, fecha) VALUES (?, ?, ?, NOW())"
            );
            $stmt->execute([$nombre, $correo, $mensaje]);
            $mensaje_enviado = true;
        } catch (PDOException $e) {
            $error_msg = 'Hubo un error al enviar tu mensaje. Intenta más tarde.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto · Tu Nombre</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>
<body class="contact-page">

  <button class="theme-toggle" id="themeToggle" aria-label="Cambiar tema">
    <span class="icon-sun">☀</span>
    <span class="icon-moon">◑</span>
  </button>

  <nav class="site-nav">
    <a href="index.php" class="nav-logo">VC</a>
    <div class="nav-links">
      <a href="catalogo.php">Catálogo</a>
      <a href="sobre-mi.php">Sobre mí</a>
      <a href="contacto.php" class="active">Contacto</a>
    </div>
  </nav>

  <main class="contact-main">
    <div class="contact-deco"></div>

    <section class="contact-container">

      <div class="contact-info">
        <span class="section-tag">Contacto</span>
        <h1>Escríbeme</h1>
        <p>Si quieres hablar de algo, colaborar o simplemente decir hola, aquí estoy.</p>

        <div class="contact-details">
          <div class="contact-item">
            <span class="ci-icon">✉</span>
            <span>valerie20july@gmail.com</span>
          </div>
          <div class="contact-item">
            <span class="ci-icon">📍</span>
            <span>Guayaquil, Ecuador</span>
          </div>
        </div>
      </div>

      <div class="contact-form-col">

        <?php if ($mensaje_enviado): ?>
          <div class="confirm-card">
            <div class="confirm-icon">✓</div>
            <h2>Mensaje enviado</h2>
            <p>Gracias <?= htmlspecialchars($nombre) ?>, recibí tu mensaje y te responderé pronto.</p>
            <a href="contacto.php" class="btn-secondary">Enviar otro mensaje</a>
          </div>

        <?php else: ?>
          <?php if (!empty($error_msg)): ?>
            <div class="form-error-banner">⚠ <?= $error_msg ?></div>
          <?php endif; ?>

          <form class="contact-form" method="POST" action="contacto.php" novalidate>

            <div class="field-group">
              <label for="nombre">Nombre</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Tu nombre"
                required
                minlength="2"
                maxlength="100"
                value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '' ?>"
              />
            </div>

            <div class="field-group">
              <label for="correo">Correo</label>
              <input
                type="email"
                id="correo"
                name="correo"
                placeholder="tu@correo.com"
                required
                value="<?= isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : '' ?>"
              />
            </div>

            <div class="field-group">
              <label for="mensaje">Mensaje</label>
              <textarea
                id="mensaje"
                name="mensaje"
                placeholder="Escribe tu mensaje aquí..."
                required
                minlength="10"
                maxlength="1000"
                rows="5"
              ><?= isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : '' ?></textarea>
            </div>

            <button type="submit" class="btn-submit">
              <span>Enviar mensaje</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            </button>

          </form>
        <?php endif; ?>

      </div>
    </section>
  </main>

  <script src="js/theme.js"></script>
</body>
</html>
