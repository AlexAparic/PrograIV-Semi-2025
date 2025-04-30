<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Fineconia</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  @vite('resources/css/login-registro.css')

  <!-- AlertifyJS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
</head>
<body>

  <!-- Logo -->
  <div class="logo">FINEC®NIA</div>

  <div class="login-wrapper">
    <div class="background-box">
      
      <!-- Caja de Registro -->
      <div class="register-box">
        <h4>¿Aun no tienes cuenta?</h4>
        <p>Regístrate para que puedas iniciar sesión</p>
        <a href="{{ route('register') }}" class="btn-register">REGÍSTRATE</a>
      </div>

      <!-- Caja de Login -->
      <div class="login-box">
        <h3>Iniciar Sesión</h3>

        <form id="loginForm" method="POST" action="{{ route('login') }}">
          @csrf

          <label for="email" class="form-label">Correo electrónico</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            value="{{ old('email') }}"
          >

          <label for="password" class="form-label mt-3">Contraseña</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
          >

          <div class="forgot-password mt-2">
            <a href="#">¿Olvidaste tu contraseña?</a>
          </div>
          
          <button type="submit" class="btn-login mt-3">INICIAR</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AlertifyJS -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- Validación cliente con Alertify -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value.trim();

      if (!email || !password) {
        e.preventDefault();
        alertify.error('Todos los campos son obligatorios.');
      }
    });
  </script>

  <!-- Mensajes desde el backend con Alertify -->
  @if(session('success'))
    <script>
      alertify.success("{{ session('success') }}");
    </script>
  @endif

  @if($errors->any())
    <script>
      @foreach($errors->all() as $error)
        alertify.error("{{ $error }}");
      @endforeach
    </script>
  @endif

</body>
</html>
