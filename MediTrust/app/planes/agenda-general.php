<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agenda de Citas | MediSoft</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap y estilos de la plantilla -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">
  <link href="../../assets/css/main.css" rel="stylesheet">

  <style>
    body { padding-top: 70px; }
    .card-header { background-color: #3498db; color: #fff; }
    .page-title { margin-bottom: 30px; }
    .appointment-time { font-weight: bold; font-size: 1rem; }
    .appointment-item { border-left: 5px solid #3498db; padding: 10px 15px; margin-bottom: 10px; background-color: #f9f9f9; }
    .time-slot { cursor: pointer; padding: 8px 12px; border: 1px solid #ddd; border-radius: 5px; margin: 5px; text-align: center; }
    .time-slot:hover { background-color: #3498db; color: #fff; }
  </style>
</head>

<body>

<?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>
  <!-- Page Title con Fondo de Imagen -->
    <div class="page-title">
      <div class="container">
        <h1><strong>Agenda General</strong></h1>
        <p>Visualiza y gestiona todas las citas de la clínica.</p>
      </div>
    </div><!-- End Page Title -->

    <!-- Calendario de disponibilidad -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">Calendario de Citas</div>
      <div class="card-body">
        <div id="calendar"></div>
      </div>
    </div>
    
    <!-- Lista de Citas Agendadas -->

    <div class="card mb-4 shadow-sm">
      <div class="card-header">Pacientes Agendados - Hoy</div>
      <div class="card-body">
        <div class="appointment-item">
          <div class="row">
            <div class="col-md-2 appointment-time">08:00 AM</div>
            <div class="col-md-10">
              <strong>Ana Martínez</strong> <br>
              <small>Consulta de seguimiento por hipertensión arterial</small>
            </div>
          </div>
        </div>
        <div class="appointment-item">
          <div class="row">
            <div class="col-md-2 appointment-time">09:00 AM</div>
            <div class="col-md-10">
              <strong>Pedro Gómez</strong><br>
              <small>Control postoperatorio de cirugía dental</small>
            </div>
          </div>
        </div>
        <div class="appointment-item">
          <div class="row">
            <div class="col-md-2 appointment-time">10:30 AM</div>
            <div class="col-md-10">
              <strong>Luisa Fernández</strong><br>
              <small>Primera consulta por dolores de cabeza</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fechas y Horas Disponibles -->
    <div class="card shadow-sm mb-5">
      <div class="card-header">Agendar Nueva Cita</div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Nombre del paciente</label>
              <input type="text" class="form-control" placeholder="Ej. Carlos Rojas" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Fecha</label>
              <input type="date" class="form-control" required>
            </div>
          </div>
          <label class="form-label">Horas disponibles</label>
          <div class="d-flex flex-wrap">
            <div class="time-slot">08:00 AM</div>
            <div class="time-slot">09:00 AM</div>
            <div class="time-slot">10:00 AM</div>
            <div class="time-slot">11:30 AM</div>
            <div class="time-slot">01:00 PM</div>
            <div class="time-slot">02:30 PM</div>
            <div class="time-slot">03:30 PM</div>
          </div>
          <div class="mt-4">
            <label class="form-label">Descripción de la cita</label>
            <textarea class="form-control" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-calendar-plus"></i> Agendar Cita</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        locale: 'es',
        events: [
          {
            title: 'Ana Martínez - Control',
            start: new Date().toISOString().slice(0, 10) + 'T08:00:00'
          },
          {
            title: 'Pedro Gómez - Postoperatorio',
            start: new Date().toISOString().slice(0, 10) + 'T09:00:00'
          },
          {
            title: 'Luisa Fernández - Consulta',
            start: new Date().toISOString().slice(0, 10) + 'T10:30:00'
          }
        ]
      });
      calendar.render();
    });
  </script>

  <?php include '../../app/navbars/footer.php'; ?>
</body>

</html>