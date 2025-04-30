<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gastos e Ingresos - Fineconia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite('resources/css/GastosIngresos.css')
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo-container">
      <img src="Imagen/Logo.jpg" alt="Logo de Fineconia" style="height: 40px;">
    </div>
    <div class="right-side">
      <div class="nav-links">
        <a href="#" class="nav-link">Finanzas Personales</a>
        <a href="#" class="nav-link">Gastos e Ingresos</a>
        <a href="#" class="nav-link">Presupuestos</a>
        <a href="#" class="nav-link">Ahorro</a>
      </div>
      <div class="user-icon"><i class="bi bi-person-circle"></i></div>
    </div>
  </nav>

  <!-- Header -->
  <header class="header">
    <h2>GASTOS E INGRESOS</h2>
    <p>
      En esta sección puedes llevar el control de todo tu dinero: cuánto ganas, cuánto gastas y en qué lo haces. 
      Accede a herramientas que te ayudarán a entender mejor tu comportamiento financiero y a tomar decisiones 
      informadas para mejorar tu economía personal.
    </p>
  </header>

  <!-- Main content -->
  <div class="section-container">
    <!-- Registrar transacciones -->
    <section class="section">
      <div class="section-header transactions-header">
        <i class="bi bi-cash-stack"></i>
        Registrar transacciones
      </div>
      <div class="section-body">
        <p>
          Aquí podrás ingresar todos tus ingresos y gastos del mes de forma detallada. Categoriza cada movimiento, 
          agrega fechas y notas si lo deseas. Este registro será la base para generar reportes precisos y llevar 
          un control total de tu flujo de efectivo.
        </p>
        <div class="divider"></div>
        <div class="buttons-container">
          <button class="btn btn-expense"><i class="bi bi-dash-circle"></i> Añadir Gasto</button>
          <button class="btn btn-income"><i class="bi bi-plus-circle"></i> Añadir Ingreso</button>
        </div>
      </div>
    </section>

    <!-- Reportes detallados -->
    <section class="section">
      <div class="section-header reports-header">
        <i class="bi bi-file-earmark-text"></i>
        Reportes detallados
      </div>
      <div class="section-body">
        <p>
          Consulta informes organizados por períodos de tiempo para saber exactamente cuándo y cómo estás gastando 
          o recibiendo dinero. Puedes elegir ver tus movimientos por día, semana o mes, lo que te da flexibilidad 
          para analizar patrones o detectar excesos.
        </p>
        <div class="divider"></div>
        <div class="buttons-container">
          <button class="btn btn-dark"><i class="bi bi-eye"></i> Ver Reporte</button>
        </div>
      </div>
    </section>

    <!-- Gráficas comparativas -->
    <section class="section">
      <div class="section-header charts-header">
        <i class="bi bi-bar-chart-line"></i>
        Gráficas comparativas
      </div>
      <div class="section-body">
        <p>
          Visualiza tu información financiera con gráficas comparativas claras e intuitivas. Compara ingresos vs. 
          gastos o diferentes categorías entre sí, y descubre de forma visual cómo se comporta tu economía a lo 
          largo del tiempo.
        </p>
        <div class="divider"></div>
        <div class="buttons-container">
          <button class="btn btn-dark"><i class="bi bi-graph-up"></i> Ver Gráfica</button>
        </div>
      </div>
    </section>
  </div>

  <!-- Últimas transacciones -->
  <section class="transactions-section">
    <h3 class="transactions-title">Últimas Transacciones</h3>
    <table>
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Descripción</th>
          <th>Categoría</th>
          <th>Monto</th>
          <th>Tipo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>10/04/2023</td>
          <td>Supermercado</td>
          <td>Alimentación</td>
          <td class="expense">-$150.00</td>
          <td><span class="type-badge badge-expense">Gasto</span></td>
        </tr>
        <tr>
          <td>09/04/2023</td>
          <td>Salario</td>
          <td>Ingreso</td>
          <td class="income">+$2,500.00</td>
          <td><span class="type-badge badge-income">Ingreso</span></td>
        </tr>
      </tbody>
    </table>
  </section>

</body>
</html>