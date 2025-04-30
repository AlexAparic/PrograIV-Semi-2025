<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro - Fineconia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  @vite('resources/css/login-registro.css')
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
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
          <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
          <input type="number" name="edad" class="form-control" placeholder="Edad" required>

          <select name="miembro" class="form-select" required>
            <option value="" disabled selected>Miembro Familiar:</option>
            <option value="padre">Padre</option>
            <option value="madre">Madre</option>
            <option value="hijo">Hijo</option>
          </select>

          <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
          <small>Recibirás un código para verificar tu cuenta</small>

          <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
          <small>Mínimo 8 caracteres, incluye números y símbolos</small>

          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>

          <button type="submit" class="btn btn-crear">CREAR</button>
        </form>
      </div>

      <!-- Sección "¿Ya tienes cuenta?" - Ahora más a la derecha -->
      <div class="login-box">
        <h5>¿Ya tienes una cuenta?</h5>
        <p>Si ya tienes una cuenta solo lógrate aquí</p>
        <button class="btn btn-login">Iniciar Sección</button>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
