<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Agenda de Citas | MediSoft</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css" rel="stylesheet">

  <link href="../../assets/css/main.css" rel="stylesheet">
  <style>

    /* Estilos para los slots de hora */
    .time-slot-group .time-slot {
        cursor: pointer;
        padding: 8px 12px;
        border: 1px solid #dee2e6;
        border-radius: 20px;
        margin: 4px;
        font-size: 0.9em;
        transition: all 0.3s ease;
    }
    .time-slot-group .time-slot:hover {
        background-color: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
    }
  </style>
  
</head>

<body class="index-page">

<?php include '../navbars/LayoutDirector.php'; ?>

<main class="main">
  <div class="page-title">
    <div class="container">
      <h1><strong>Agenda General</strong></h1>
      <p>Visualiza y gestiona todas las citas de la clínica.</p>
    </div>
  </div>
  <section id="dashboard-widgets" class="featured-services section light-background">
    <div class="container">
      <div class="row gy-4">

        <div class="col-lg-7" >
          <div class="row gy-4">
            <div class="col-12">
              <div class="department-card h-100">
                <div class="department-content">
                  <h3><b><i class="bi bi-calendar3"></i>  Calendario de Citas</b></h3>
                  <div id="calendar" class="mt-4"></div>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <div class="department-card h-100">
                <div class="department-content">
                    <h3><b><i class="bi bi-list-ul"></i>  Pacientes Agendados - Hoy</b></h3>
                    <div class="list-group list-group-flush mt-4">
                        <div class="list-group-item"><strong>08:00 AM - Ana Martínez:</strong> Consulta de seguimiento.</div>
                        <div class="list-group-item"><strong>09:00 AM - Pedro Gómez:</strong> Control postoperatorio.</div>
                        <div class="list-group-item"><strong>10:30 AM - Luisa Fernández:</strong> Primera consulta.</div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="department-card h-100">
            <div class="department-content">
              <h3><b><i class="bi bi-calendar-plus-fill"></i>  Agendar Nueva Cita</b></h3>
              <form class="mt-4">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="patientName" placeholder="Nombre del paciente" required>
                  <label for="patientName">Nombre del paciente</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="citaDate" required>
                  <label for="citaDate">Fecha</label>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Horas disponibles</label>
                    <div class="time-slot-group d-flex flex-wrap">
                        <div class="time-slot">08:00 AM</div>
                        <div class="time-slot">09:00 AM</div>
                        <div class="time-slot">10:00 AM</div>
                        <div class="time-slot">11:30 AM</div>
                        <div class="time-slot">01:00 PM</div>
                        <div class="time-slot">02:30 PM</div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" placeholder="Descripción de la cita" id="citaDescription" style="height: 100px" required></textarea>
                  <label for="citaDescription">Descripción de la cita</label>
                </div>
                <a  class="btn" style="background-color: #2596be; border-color: #2596be; color: #fff;">Agendar Cita</a>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>

<?php include '../shared/footer.php'; ?>

<?php include '../shared/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  try {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      locale: 'es', // Para que se vea en español
      height: 'auto', // Usa 'auto' para que se ajuste al contenedor
      events: [
        // ... Tus eventos ...
        {
          title: 'Ana Martínez - Control',
          start: new Date().toISOString().slice(0, 10) + 'T08:00:00',
          backgroundColor: '#198754',
          borderColor: '#198754'
        },
        {
          title: 'Pedro Gómez - Postoperatorio',
          start: new Date().toISOString().slice(0, 10) + 'T09:00:00',
          backgroundColor: '#0d6efd',
          borderColor: '#0d6efd'
        },
        {
          title: 'Luisa Fernández - Consulta',
          start: new Date().toISOString().slice(0, 10) + 'T10:30:00',
          backgroundColor: '#ffc107',
          borderColor: '#ffc107'
        }
      ]
    });
    calendar.render();
  } catch (e) {
    console.error("Error al inicializar FullCalendar: ", e);
  }
});
</script>

</body>
</html>