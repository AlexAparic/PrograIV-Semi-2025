Iconos feos arreglados - Díaz 

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Finanzas Personales</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  @vite('resources/css/Secciones.css')
</head>
<body>
  <div class="header">
    <div class="top-bar">
      <div class="logo-container">
        <img src="Imagen/Logo.jpg" alt="Logo de Fineconia" style="height: 40px;">
      </div>
      <div class="user-section">
        <div class="user-icon"><i class="bi bi-person-circle"></i></div>
        <div>Elena</div>
      </div>
    </div>
    <div class="logo-container" style="justify-content: center; margin-top: 10px;">
      <div class="logo">FINANZAS PERSONALES</div>
    </div>
    <div class="subtitle">
      Tu espacio para organizar y mejorar tu salud financiera. Accedé a tus Gastos e Ingresos, Presupuestos y Ahorros para tomar decisiones más inteligentes.
    </div>
  </div>

  <div class="main-container">
    <div class="section">
      <h2 class="section-title">
        <span class="section-icon money-icon"></span>
        Gastos e Ingresos
      </h2>
      <p class="section-text">
        Registrá tus entradas y salidas de dinero día a día. Clasificá por categorías (alimentación, transporte, ocio, etc.)
      </p>
      <button class="btn">Acceder</button>
    </div>

    <div class="section">
      <h2 class="section-title">
        <span class="section-icon budget-icon"></span>
        Presupuesto
      </h2>
      <p class="section-text">
        Establecé cuánto querés gastar por categoría cada mes. Ajustá límites, recibí alertas si te pasás y compará tu presupuesto planificado con lo que realmente gastás.
      </p>
      <button class="btn">Acceder</button>
    </div>

    <div class="section">
      <h2 class="section-title">
        <span class="section-icon savings-icon"></span>
        Ahorro
      </h2>
      <p class="section-text">
        Fijá metas de ahorro (como un viaje o una emergencia). Seguimiento visual de tu progreso, consejos personalizados y opción de ahorrar automáticamente lo que te sobra del presupuesto.
      </p>
      <button class="btn">Acceder</button>
    </div>
  </div>

  <div class="footer">
    Ayuda Opiniones y Sugerencias
  </div>
</body>
</html>