<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Planes | Medisoft</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/css/main.css" rel="stylesheet">
  
  <style>
    body { padding-top: 60px; }
    .page-title { margin-bottom: 30px; }
    .card-header { background-color: #3498db; color: #fff; }
    .btn-primary { background-color: #3498db; border: none; }
    .btn-primary:hover { background-color: #2980b9; }
    .badge-status { font-size: 0.9em; }
  </style>
</head>
<body>

<?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

<div class="container">

  <div class="page-title">
      <div class="container">
        <h1><strong>Gestión de Planes</strong></h1>
      </div>
    </div>

  <!-- Búsqueda paciente -->
  <div class="card mb-4 shadow-sm">
    <div class="card-body">
      <form class="row g-2 align-items-center">
        <div class="col-md-6">
          <label class="form-label">Nombre o cédula</label>
          <input type="text" class="form-control" placeholder="Ej. Maria Alvarez o 123456789">
        </div>
        <div class="col-md-2 align-self-end">
          <button class="btn btn-primary w-100"><i class="bi bi-search"></i> Buscar</button>
        </div>
      </form>
    </div>
  </div>

  <!--Resultado -->
  <div class="card mb-4 shadow-sm">
    <div class="card-body">
      <h5 class="card-title">Paciente: Maria Alvarez <small class="text-muted">(Cédula: 123456789)</small></h5>
      <button class="btn btn-success me-2" data-bs-toggle="collapse" data-bs-target="#formPlan"><i class="bi bi-plus-circle"></i> Crear plan</button>
      <button class="btn btn-secondary"><i class="bi bi-clock-history"></i> Ver historial</button>
    </div>
  </div>

  <!--Formulario crear/editar -->
  <div class="collapse mb-5" id="formPlan">
    <div class="card shadow-sm">
      <div class="card-header">Nuevo Plan de Tratamiento</div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label>Número de plan</label>
            <input type="text" class="form-control" value="PLAN-2025-001" disabled>
          </div>
          <div class="mb-3">
            <label>Diagnóstico <span class="text-danger">*</span></label>
            <textarea class="form-control" required></textarea>
          </div>
          <div class="mb-3">
            <label>Tratamiento</label><textarea class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Cirugía</label><textarea class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Recuperación</label><textarea class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Seguimiento</label><textarea class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label>Estado de la etapa</label>
            <select class="form-select">
              <option>Diagnóstico</option>
              <option>Tratamiento</option>
              <option>Cirugía</option>
              <option>Recuperación</option>
              <option>Seguimiento</option>
              <option>Cierre</option>
            </select>
          </div>
          <button class="btn btn-primary me-2"><i class="bi bi-save"></i> Guardar</button>
          <button type="button" class="btn btn-outline-danger" onclick="if(confirm('Los cambios no guardados se perderán. ¿Desea continuar?')) location.reload();"><i class="bi bi-x-circle"></i> Cancelar</button>
        </form>
      </div>
    </div>
  </div>

  <!--Historial -->
  <div class="card mb-5 shadow-sm">
    <div class="card-header">Historial de Planes - Maria Alvarez</div>
    <div class="card-body p-0">
      <table class="table table-hover mb-0">
        <thead>
          <tr><th>#</th><th>Descripción</th><th>Estado</th><th>Acciones</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>PLAN-2025-001</td>
            <td>Tratamiento post operatorio</td>
            <td><span class="badge bg-success badge-status">Seguimiento</span></td>
            <td>
              <button class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></button>
              <button class="btn btn-sm btn-outline-info"><i class="bi bi-eye"></i></button>
              <button class="btn btn-sm btn-outline-danger" onclick="confirm('¿Eliminar?')"><i class="bi bi-trash"></i></button>
              <button class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-pdf"></i></button>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#logModal"><i class="bi bi-clock-history"></i></button>
            </td>
          </tr>
          <tr class="text-muted">
            <td>PLAN-2024-087</td>
            <td>Cirugía Estetica</td>
            <td><span class="badge bg-danger badge-status">Eliminado</span></td>
            <td>
              <button class="btn btn-sm btn-success" onclick="confirm('¿Reactivar plan?')"><i class="bi bi-arrow-counterclockwise"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- log de cambios -->
<div class="modal fade" id="logModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log de Cambios – PLAN-2025-001</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <table class="table table-sm mb-0">
          <thead><tr><th>Fecha</th><th>Hora</th><th>Usuario</th><th>Acción</th></tr></thead>
          <tbody>
            <tr><td>03/08/2025</td><td>08:45</td><td>Laura Castillo</td><td>Creación de plan</td></tr>
            <tr><td>04/08/2025</td><td>10:30</td><td>Laura Castillo</td><td>Actualización diagnostico</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<?php include '../../app/navbars/footer.php'; ?>
</body>
</html>
