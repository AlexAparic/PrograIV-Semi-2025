<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Código de verificación - Fineconia</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 2rem;
      color: #333;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
    }
    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #2b4db4;
      margin-bottom: 1rem;
    }
    .logo i {
      font-style: italic;
      color: #f39c12;
    }
    h2 {
      color: #2b4db4;
    }
    .code {
      font-size: 36px;
      font-weight: bold;
      color: #f39c12;
      margin: 20px 0;
    }
    p {
      font-size: 16px;
      color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">FINEC<i>ONIA</i></div>
    <h2>Tu código de verificación</h2>
    <p>Usá el siguiente código para completar tu registro:</p>
    <div class="code">{{ $codigo }}</div>
    <p>Si no solicitaste este registro, podés ignorar este mensaje.</p>
  </div>
</body>
</html>
