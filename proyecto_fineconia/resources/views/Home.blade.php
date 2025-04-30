<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fineconia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />
  @vite('resources/css/Home.css')
</head>
<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container justify-content-between align-items-center">
      <!-- Imagen del logo -->
      <img src="logo.png" alt="Logo de Fineconia" style="height: 40px; border-radius: 5px;">

      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-link nav-link">Quienes somos</button>
        <button class="btn btn-link nav-link">Opinión / Sugerencias</button>
        <button class="btn btn-link nav-link">Ayuda</button>
        <button class="btn btn-custom">Registrate</button>
        <button class="btn btn-custom">Iniciar sesión</button>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="hero">
      <div class="row align-items-center">
        <div class="col-md-4 text-center">
          <!-- Imagen decorativa -->
          <img src="familia-finanzas.jpg" alt="Imagen de bienvenida" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
          <h1 class="fw-bold mb-3">FINECONIA</h1>
          <p>
            Fineconia es un espacio pensado para que las familias aprendan juntas sobre finanzas y economía. Con un enfoque simple y accesible, promueve hábitos responsables como el ahorro, la planificación y el consumo consciente, ayudando a construir un futuro financiero más estable.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section-title">¿Quienes somos?</div>

    <div class="info-section">
      <div class="card-info">
        <i class="bi bi-people"></i>
        <h5>Nuestra Historia</h5>
        <p>Fineconia es una aplicación pensada para ayudar a las familias a aprender sobre finanzas y economía de forma sencilla, cercana y útil.</p>
      </div>
      <div class="card-info">
        <i class="bi bi-eye"></i>
        <h5>Visión</h5>
        <p>Ser la plataforma favorita de las familias para alcanzar estabilidad y crecimiento económico, fomentando hábitos financieros saludables desde la infancia hasta la adultez.</p>
      </div>
      <div class="card-info">
        <i class="bi bi-people-fill"></i>
        <h5>Nuestro Equipo</h5>
        <p>Somos un equipo comprometido con la educación financiera familiar. Nos une la pasión por enseñar, diseñar y crear soluciones digitales que realmente aporten valor a quienes más lo necesitan: las familias.</p>
      </div>
      <div class="card-info">
        <i class="bi bi-bullseye"></i>
        <h5>Misión</h5>
        <p>Ofrecer educación financiera práctica, clara y accesible, que permita a las familias organizar sus ingresos, ahorrar con propósito y tomar decisiones económicas conscientes y sostenibles.</p>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-6 mb-3">
          <strong>Contactos y Redes sociales</strong><br />
          <i class="bi bi-envelope"></i> <a href="mailto:fineconia@gmail.com">fineconia@gmail.com</a><br />
          <i class="bi bi-facebook"></i> Fineconia
        </div>
        <div class="col-md-6 text-md-end">
          <strong>Política y Privacidad</strong>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>