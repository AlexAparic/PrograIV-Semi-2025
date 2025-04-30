<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificación - Fineconia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Iconos Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  @vite('resources/css/VeriCorreo.css')
</head>
<body>

  <!-- Logo -->
  <div class="logo">
    <img src="https://i.imgur.com/bFQ2H1g.png" alt="Logo" />
    <span class="logo-text">FINEC<i>ONIA</i></span>
  </div>

  <div class="register-wrapper">
    <div class="background-box">

      <!-- Formulario de Verificación de Correo (izquierda) -->
      <div class="register-box">
        <div class="icon">
          <i class="bi bi-envelope-check"></i>
        </div>
        <h3>Verificación de Código</h3>
        <p>Por favor, ingresá tu dirección de correo electrónico.<br>Te enviaremos un código de verificación a ese correo</p>
        <form method="POST" action="{{ route('enviar.codigo') }}">

        
          @csrf
          <label for="email">Correo electrónico</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
          <button type="submit" class="btn-verificar">Enviar</button>
        </form>
        @if(session('message'))
          <div class="alert alert-success mt-3">
            {{ session('message') }}
          </div>
        @endif
      </div>

      <!-- Panel derecho para recuperación de contraseña -->
      <div class="password-box">
        <div class="icon-lock">
          <i class="bi bi-shield-lock"></i>
        </div>
        <h4>¿Olvidaste tu contraseña?</h4>
        <a href="#">Aquí puedes restablecerla</a>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
