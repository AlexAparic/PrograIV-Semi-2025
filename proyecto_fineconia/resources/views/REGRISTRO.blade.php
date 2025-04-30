<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro - Fineconia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  @vite('resources/css/login-registro.css')

  <!-- AlertifyJS CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
</head>
<body>

  <!-- Logo -->
  <div class="logo">
    <img src="https://i.imgur.com/bFQ2H1g.png" alt="Logo" />
    <span class="logo-text">FINEC<i>ONIA</i></span>
  </div>

  <div class="register-wrapper">
    <div class="background-box">

      <!-- Formulario de Registro -->
      <div class="register-box">
        <h3>Regístrate</h3>
        <form id="formRegistro" method="POST" action="{{ route('register') }}" novalidate>
          @csrf

          <input type="text" name="nombre" class="form-control" placeholder="Nombre">
          <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          <input type="number" name="edad" class="form-control" placeholder="Edad">

          <select name="miembro" class="form-select">
            <option value="" disabled selected>Miembro Familiar:</option>
            <option value="padre">Padre</option>
            <option value="madre">Madre</option>
            <option value="hijo">Hijo</option>
          </select>

          <input type="email" name="email" class="form-control" placeholder="Correo Electrónico">
          <small>Recibirás un código para verificar tu cuenta</small>

          <input type="password" name="password" class="form-control" placeholder="Contraseña">
          <small>Mínimo 8 caracteres, incluye números y símbolos</small>

          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">

          <button type="submit" class="btn btn-crear">CREAR</button>
        </form>
      </div>

      <!-- Sección "¿Ya tienes cuenta?" -->
      <div class="login-box">
        <h5>¿Ya tienes una cuenta?</h5>
        <p>Si ya tienes una cuenta solo lógrate aquí</p>
        <button class="btn btn-login">Iniciar Sección</button>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AlertifyJS -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- Validación personalizada -->
  <script>
    document.getElementById('formRegistro').addEventListener('submit', function (e) {
      e.preventDefault(); // Evita envío por defecto hasta pasar todas las validaciones

      const nombre = document.querySelector('input[name="nombre"]').value.trim();
      const apellido = document.querySelector('input[name="apellido"]').value.trim();
      const edad = parseInt(document.querySelector('input[name="edad"]').value.trim());
      const miembro = document.querySelector('select[name="miembro"]').value;
      const email = document.querySelector('input[name="email"]').value.trim();
      const password = document.querySelector('input[name="password"]').value;
      const passwordConf = document.querySelector('input[name="password_confirmation"]').value;

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      // Validación de campos vacíos
      if (!nombre || !apellido || !edad || !email || !password || !passwordConf || !miembro) {
        alertify.error('Por favor, completa todos los campos.');
        return;
      }

      // Edad válida
      if (edad <= 0 || isNaN(edad)) {
        alertify.error('Por favor, ingresa una edad válida.');
        return;
      }

      // Restricción por edad y rol familiar
      if ((miembro === 'padre' || miembro === 'madre') && edad < 18) {
        alertify.error('Debes tener al menos 18 años para ser padre o madre.');
        return;
      }

      // Email con formato válido
      if (!emailRegex.test(email)) {
        alertify.error('El correo electrónico no es válido.');
        return;
      }

      // Contraseñas coinciden
      if (password !== passwordConf) {
        alertify.error('Las contraseñas no coinciden.');
        return;
      }

      // Fortaleza de contraseña
      if (password.length < 8) {
        alertify.error('La contraseña debe tener al menos 8 caracteres.');
        return;
      }

      // Si todo está bien, se puede enviar el formulario
      this.submit();
    });
  </script>

</body>
</html>
