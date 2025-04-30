<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Verificación - Fineconia</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  @vite('resources/css/veriCodigo.css')

  <!-- AlertifyJS -->
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

      <!-- Formulario de Verificación -->
      <div class="register-box">
        <div class="icon">
          <i class="bi bi-shield-check"></i>
        </div>
        <h3>Verificación de código</h3>
        <p>Por favor ingrese el código de verificación que te enviamos a tu correo</p>
        <form id="verificationForm" action="{{ route('verificar.codigo') }}" method="POST">
          @csrf
          <label for="codigo">Código</label>
          <input type="text" name="codigo" id="codigo" class="form-control">
          <button type="submit" class="btn-verificar">Verificar</button>
        </form>
      </div>

      <!-- Panel derecho -->
      <div class="right-panel">
        <div class="password-recovery" id="passwordRecovery">
          <div class="icon-lock">
            <i class="bi bi-shield-lock"></i>
          </div>
          <h4>¿Olvidaste tu contraseña?</h4>
          <a href="#">Aquí puedes restablecerla</a>
        </div>

        <div class="verified-message" id="verifiedMessage">
          <div class="icon-check">
            <i class="bi bi-check-circle-fill"></i>
          </div>
          <p>Tu correo electrónico ha sido verificado correctamente</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AlertifyJS -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>

  <!-- Validación de campo vacío con Alertify -->
  <script>
    document.getElementById('verificationForm').addEventListener('submit', function(e) {
      const codigo = document.getElementById('codigo').value.trim();

      if (!codigo) {
        e.preventDefault(); // prevenir envío si está vacío
        alertify.error('Por favor, ingresa el código de verificación.');
        return;
      }

      // Si hay código, se envía normalmente al backend
    });
  </script>

  <!-- Mostrar mensaje de error desde sesión con Alertify (si viene del backend) -->
  @if(session('error'))
    <script>
      alertify.error("{{ session('error') }}");
    </script>
  @endif

</body>
</html>
