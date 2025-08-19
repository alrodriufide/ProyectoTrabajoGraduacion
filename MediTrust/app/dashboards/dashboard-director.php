<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard Recepción - MediSoft</title>

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">

  <!-- Estilos Adicionales -->
  <style>
    /* Estilos para el fondo del page-title */
    .page-title {
      background-image: url('../../assets/img/health/showcase-1.jpeg');
      background-size: 50%;
      background-position: center;
      position: relative;
      color: #fff; /* Color de texto blanco para legibilidad */
    }
    .page-title::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(2, 20, 24, 0.8) 0%, rgba(4, 158, 187, 0.6) 100%); /* Filtro frío */
      z-index: 1;
    }
    .page-title .container {
      position: relative;
      z-index: 2;
    }
    .page-title h1, .page-title p {
        color: #fff;
    }

    /* Estilos para la agenda */
    .appointment-item {
      display: flex;
      align-items: stretch;
      margin-bottom: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
      padding: 20px;
      transition: transform 0.3s ease;
    }
    .appointment-item:hover {
      transform: translateY(-5px);
    }
    .appointment-time {
      flex-shrink: 0;
      width: 80px;
      text-align: right;
      margin-right: 20px;
      color: var(--default-color);
      font-weight: 500;
      font-size: 0.9em;
      padding-top: 5px;
    }
    .appointment-details {
      padding-left: 20px;
      border-left: 3px solid;
      width: 100%;
      text-align: left;
    }
    .appointment-motive {
      font-size: 0.9em;
      font-weight: 600;
      margin-bottom: 5px;
      text-transform: uppercase;
    }
    .appointment-title {
      font-weight: 700;
      color: var(--heading-color);
      margin-bottom: 5px;
      font-size: 1.1em;
    }
    .appointment-description {
      font-size: 0.9em;
      color: #888;
      margin-bottom: 0;
    }
    .border-confirmada { border-color: #a7e0b4; }
    .motive-confirmada { color: #198754; }
    .border-por-confirmar { border-color: #ffe69c; }
    .motive-por-confirmar { color: #b8860b; }
    .border-en-sala { border-color: #a0c4ff; }
    .motive-en-sala { color: #0d6efd; }
    .border-cancelo { border-color: #f5c2c7; }
    .motive-cancelo { color: #dc3545; }

    /* Estilos para el nuevo widget de Tareas */
    .task-widget .list-group-item {
      display: flex;
      align-items: stretch;
      border-left: 20px;
      background-color: #ffffff;
      border-right: 0;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
      border-top: 0;
      padding: 20px;
      transition: transform 0.3s ease;
    }
    .task-widget .list-group-item:last-child {
        display: flex;
      align-items: stretch;
      margin-bottom: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
      padding: 20px;
      transition: transform 0.3s ease;
    }
    .task-widget .form-check-input {
      border-radius: 50%;
      height: 1.25em;
      width: 1.25em;
      margin-right: 1rem;
    }
    .task-widget .task-content {
      flex-grow: 1;
    }
    .task-widget .task-title {
      font-weight: 500;
      color: var(--heading-color);
    }
    .task-widget .task-category {
      font-size: 0.85em;
    }



  </style>
</head>

<body class="index-page">

<?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

  <main class="main">

    <!-- Page Title con Fondo de Imagen -->
    <div class="page-title">
      <div class="container">
        <h1><strong>Dashboard de Administrador</strong></h1>
        <p>Bienvenido, Erick. Aquí tienes el resumen de la actividad de hoy.</p>
      </div>
    </div><!-- End Page Title -->

    <section id="dashboard-widgets" class="featured-services section light-background">
      <div class="container">
        <div class="row gy-4">

          <!-- Widget: Agenda General del Día -->
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <div class="department-card h-100">
              <div class="department-content">
                <h3><strong><i class="bi bi-calendar3"></i>  Agenda General del Día</strong></h3>
                <div class="mt-4">

                  <!-- Cita 1 -->
                  <div class="appointment-item">
                    <div class="appointment-time">09:00<br>09:30</div>
                    <div class="appointment-details border-confirmada">
                      <p class="appointment-motive motive-confirmada">Cita de Control</p>
                      <h5 class="appointment-title">María Jiménez (con Dr. Rivera)</h5>
                      <p class="appointment-description">Revisión post-operatoria de fractura maxilofacial.</p>
                    </div>
                  </div>

                  <!-- Cita 2 -->
                  <div class="appointment-item">
                    <div class="appointment-time">10:00<br>10:30</div>
                    <div class="appointment-details border-por-confirmar">
                      <p class="appointment-motive motive-por-confirmar">Primera Consulta</p>
                      <h5 class="appointment-title">Luis Morales (con Dr. Rivera)</h5> 
                      <p class="appointment-description">Evaluación para posible tratamiento de apnea del sueño.</p>
                    </div>
                  </div>

                  <!-- Cita 3 -->
                  <div class="appointment-item">
                    <div class="appointment-time">11:00<br>11:30</div>
                    <div class="appointment-details border-en-sala">
                      <p class="appointment-motive motive-en-sala">Procedimiento</p>
                      <h5 class="appointment-title">Jorge Alvarado (con Dr. Rivera)</h5>
                      <p class="appointment-description">Reducción cerrada de fractura nasal.</p>
                    </div>
                  </div>

                  <!-- Cita 4 -->
                  <div class="appointment-item">
                      <div class="appointment-time">12:00<br>12:30</div>
                      <div class="appointment-details border-cancelo">
                        <p class="appointment-motive motive-cancelo">Consulta Especializada</p>
                        <h5 class="appointment-title">Sofía Mendoza (con Dr. Rivera)</h5>
                        <p class="appointment-description">Paciente canceló la cita ayer por la tarde.</p> 
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </div>



          <!-- Columna para los otros dos widgets -->
          <div class="col-lg-5">
            <div class="row gy-4">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="department-card task-widget">
                        <div class="department-content">
                                
                          <h3><strong><i class="fas fa-tasks"></i> Mis Tareas Pendientes</strong></h3>
                          <div class="list-group list-group-flush mt-4">
                            <!-- Tarea 1 -->
                            <div class="list-group-item">
                              <input class="form-check-input me-3" type="checkbox" value="" id="task1">
                              <div class="task-content">
                                <div class="task-title">Cita de Luis Morales</div> 
                                <div class="task-category text-muted small">Agendamiento</div>
                              </div>
                            </div>

                            <!-- Tarea 2 -->
                            <div class="list-group-item">
                              <input class="form-check-input me-3" type="checkbox" value="" id="task2">
                              <div class="task-content">
                                <div class="task-title">Control para María Jiménez</div>
                                <div class="task-category text-muted small">Seguimiento</div>
                              </div>
                            </div>

                              <!-- Tarea 3 -->
                            <div class="list-group-item">
                              <input class="form-check-input me-3" type="checkbox" value="" id="task3">
                              <div class="task-content">
                                <div class="task-title">Revisar expediente de María Jiménez</div>  
                                <div class="task-category text-muted small">Inventario</div>
                              </div>
                            </div>

                            <!-- Tarea 4 -->
                            <div class="list-group-item">
                              <input class="form-check-input me-3" type="checkbox" value="" id="task4">
                              <div class="task-content">
                                <div class="task-title">Preparar historial clínico para Jorge Alvarado (Dr. Rivera)</div>
                                <div class="task-category text-muted small">Preparación</div>
                              </div>
                            </div>  

                            <!-- Tarea 5 -->
                            <div class="list-group-item">
                              <input class="form-check-input me-3" type="checkbox" value="" id="task5">
                              <div class="task-content">
                                <div class="task-title">Llamar a Sofía Mendoza para confirmar asistencia</div>
                                <div class="task-category text-muted small">Comunicación</div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                        <!-- Widget: Checklist -->
                        <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="department-card task-widget">
                                <div class="department-content">
                                    <h3><strong><i class="bi bi-clipboard-check"></i></i> Checklist Prequirúrgico </strong></h3>
                                    <div class="list-group list-group-flush mt-4">

                                        <div class="list-group-item">
                                            <div class="task-content">
                                                <div class="task-title">Plantilla prequirúrgica seleccionada</div>
                                                <div class="task-category text-muted small"><strong>Plantilla asociada a cirugía:</strong> Colecistectomía laparoscópica</div>
                                                <div class="d-flex gap-2 mt-2">
                                                    <button class="btn btn-primary btn-sm">Duplicar plantilla existente</button>
                                                    <button class="btn btn-secondary btn-sm">Ver historial de ediciones</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item">
                                            <div class="task-content">
                                                <div class="task-title">Datos del paciente</div>
                                                <div class="task-category text-muted small"><strong>Nombre:</strong> Ana Rodríguez</div>
                                                <div class="task-category text-muted small"><strong>Identificación:</strong> 204560938</div>
                                                <div class="form-floating mt-3">
                                                    <textarea class="form-control" placeholder="Notas adicionales..." id="notas"></textarea>
                                                    <label for="notas">Notas adicionales</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item">
                                            <div class="task-content">
                                                <div class="task-title">Preparación del paciente</div>
                                                <div class="progress mb-3">
                                                    <div id="progressBar" class="progress-bar bg-success" style="width: 0%;">0%</div>
                                                </div>
                                                <form id="checklistForm">
                                                    <div class="form-check mb-4">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="consentimiento">
                                                        <div class="form-check-label">Consentimiento firmado es requerido. No se puede cerrar el checklist sin este paso.</div>
                                                        <button class="btn btn-outline-success btn-sm">Firmar electrónicamente</button>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="examenes">
                                                        <label class="form-check-label" for="examenes">Exámenes de laboratorio entregados</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="ayuno">
                                                        <label class="form-check-label" for="ayuno">Ayuno confirmado (mínimo 8 horas)</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="medicacion">
                                                        <label class="form-check-label" for="medicacion">Medicación preoperatoria administrada</label>
                                                    </div>

                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="ropa">
                                                        <label class="form-check-label" for="ropa">Ropa quirúrgica entregada</label>
                                                    </div>

                                                    <div class="form-check mb-4">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="evaluacion">
                                                        <label class="form-check-label" for="evaluacion">Evaluación preanestésica completada</label>
                                                    </div>

                                                    <div class="d-grid gap-2">
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mensajeModal">
                                                            Confirmar Checklist
                                                        </button>
                                                        <button type="button" class="btn btn-primary" onclick="crearPlantilla()">Crear Nueva Plantilla</button>
                                                        <button type="button" class="btn btn-secondary" onclick="exportarPDF()">Exportar a PDF</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="task-content">
                                                <div class="task-title">Historial de procedimientos</div>
                                                <ul class="list-group">
                                                    <li class="list-group-item">Cirugía - Septiembre 2023 </li>
                                                    <li class="list-group-item">Cirugía - Enero 2024 </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="list-group-item">
                                            <div class="task-content">
                                                <div class="task-title">Resultados de laboratorio</div>
                                                <div class="task-category text-muted small">PDF adjunto disponible</div>
                                                <button class="btn btn-outline-secondary btn-sm">Ver resultado</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Widget: Alertas de Mis Pacientes -->
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="department-card task-widget">
                        <div class="department-content">
                            <h3><strong><i class="bi bi-exclamation-triangle-fill"></i> Alertas de Mis Pacientes</strong></h3>
                            <p>Pacientes con condiciones críticas o seguimiento urgente.</p>
                            <div class="list-group list-group-flush mt-4">
                                <div class="list-group-item">
                                    <div class="task-content">
                                        <div class="task-title text-danger">Luis Chaves</div>
                                        <div class="task-category text-muted small">Alergia a medicamentos reportada</div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="task-content">
                                        <div class="task-title text-danger">Pedro Sánchez</div>
                                        <div class="task-category text-muted small">Presión arterial muy elevada</div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="task-content">
                                        <div class="task-title text-danger">Ana Martínez</div>
                                        <div class="task-category text-muted small">Fiebre persistente</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <a href="../pacientes/pacientes.php" class="btn" style="background-color: #2596be; border-color: #2596be; color: #fff;">Ver todos los pacientes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
                      
      </div>
    </section>
    
  </main>
  
  <?php include '../../app/navbars/footer.php'; ?>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>
  <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="../../assets/js/main.js"></script>
  </body>
</html>
