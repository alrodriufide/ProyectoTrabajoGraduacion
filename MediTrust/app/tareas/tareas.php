<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tareas - MediSoft</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

  <!-- Main CSS File -->
  <link href="../../assets/css/main.css" rel="stylesheet">

  <!-- Estilos Adicionales -->
  <style>
    /* Estilos personalizados para criticidad */
    .priority-low { color: #28a745; } /* Verde */
    .priority-medium { color: #ffc107; } /* Amarillo */
    .priority-high { color: #dc3545; } /* Rojo */

    .task-actions .change-status-btn {
        margin-right: 5px; /* Ajusta según necesites */
    }
    /* Estilos para estados de tarea */
    .task-status-inprocess {
        border-left: 4px solid #ffc107 !important; /* Amarillo */
    }
    .task-status-done {
        border-left: 4px solid #28a745 !important; /* Verde */
        opacity: 0.8;
    }
    .task-done .task-title {
        text-decoration: line-through;
        color: #6c757d;
    }
    .task-done .task-category {
        color: #6c757d !important;
    }

    /* Estilo para los elementos de filtro */
    .filter-section {
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
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

<body class="appointment-page">

  <?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

  <main class="main">

    <!-- Page Title -->
   
    <div class="page-title">
      <div class="container">
        <h1><strong>Tareas Internas</strong></h1>
        <p>Tareas Internas del consultorio</p>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Appointmnet Section -->
    <section id="dashboard-widgets" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

            <!-- Columna para los widgets -->
            <div class="col-lg-6">
                <div class="row gy-5">
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="department-card task-widget">
                            <div class="department-content">
                                    
                                <h3><strong><i class="fas fa-tasks"></i> Lista de Tareas</strong></h3>

                                <!-- Sección de Filtros -->
                                <div id="task-filters" class="filter-section mb-4 p-3 rounded fs-6"> 
                                    <div class="row g-3">
                                        <!-- Filtro por Paciente -->
                                        <div class="col-md-3">
                                        <label for="filter-patient" class="form-label">Filtrar por Paciente:</label>
                                        <input type="text" id="filter-patient" class="form-control" placeholder="Paciente">
                                        </div>

                                        <!-- Filtro por Doctor -->
                                        <div class="col-md-3">
                                        <label for="filter-doctor" class="form-label">Filtrar por Doctor:</label>
                                        <select id="filter-doctor" class="form-select">
                                            <option value="">Doctor</option>
                                            <option value="Dr. Rivera">Dr. Erick Rivera</option>
                                            <option value="Dra. Wilson">Dra. Lisa Wilson</option>
                                            <option value="Dr. Soto">Dr. Carlos Soto</option>
                                            <option value="Dra. Grey">Dra. Melissa Grey</option>
                                        </select>
                                        </div>

                                        <!-- Ordenar por Criticidad -->
                                        <div class="col-md-3">
                                        <label for="sort-priority" class="form-label">Ordenar por Criticidad:</label>
                                        <select id="sort-priority" class="form-select">
                                            <option value="high">Urgente</option>
                                            <option value="medium">Regular</option>
                                            <option value="low">Baja</option>
                                        </select>
                                        </div>

                                        <!-- Botón Limpiar -->
                                        <div class="col-md-3 d-flex align-items-end">
                                            <button id="clear-filters" class="btn w-100" style="background-color: #2596be; border-color: #2596be; color: #fff;">Limpiar Filtros</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Sección de Filtros -->

                                <div class="list-group list-group-flush mt-4">
                                        <!-- Tarea 1 -->
                                    <div class="list-group-item task-item task-status-inprocess" data-task-id="task1" data-status="inProcess"> 
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Cita de Luis Morales</div>
                                                <div class="task-category text-muted small">Agendamiento</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>Luis Morales |
                                                    <i class="me-1"></i>2023-11-15 |
                                                    <i class="bi bi-person-circle me-1"></i>Dr. Rivera |
                                                    <i class="bi bi-flag-fill me-1 priority-high"></i>Alta
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-1" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 2 -->
                                    <div class="list-group-item task-item task-status-inprocess" data-task-id="task2" data-status="inProcess"> 
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Control para María Jiménez</div>
                                                <div class="task-category text-muted small">Seguimiento</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>María Jiménez |
                                                    <i class="me-1"></i>2023-11-16 |
                                                    <i class="bi bi-person-circle me-1"></i>Dra. Wilson |
                                                    <i class="bi bi-flag-fill me-1 priority-medium"></i>Regular
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-0" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 3 -->
                                    <div class="list-group-item task-item task-status-inprocess" data-task-id="task3" data-status="inProcess"> 
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Revisar expediente de María Jiménez</div>
                                                <div class="task-category text-muted small">Inventario</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>María Jiménez |
                                                    <i class="me-1"></i>2023-11-10 |
                                                    <i class="bi bi-person-circle me-1"></i>Dr. Soto |
                                                    <i class="bi bi-flag-fill me-1 priority-low"></i>Baja
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-1" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 4 -->
                                    <div class="list-group-item task-item task-status-done" data-task-id="task4" data-status="done"> 
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2 task-done">  
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Preparar historial clínico para Jorge Alvarado (Dr. Rivera)</div>
                                                <div class="task-category text-muted small">Preparación</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>Jorge Alvarado |
                                                    <i class="me-1"></i>2023-11-05 |
                                                    <i class="bi bi-person-circle me-1"></i>Dr. Rivera |
                                                    <i class="bi bi-flag-fill me-1 priority-high"></i>Alta
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <span class="badge bg-success">Finalizada</span>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 5 -->
                                    <div class="list-group-item task-item task-status-inprocess" data-task-id="task3" data-status="inProcess"> 
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Llamar a Sofía Mendoza para confirmar asistencia</div>
                                                <div class="task-category text-muted small">Comunicación</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>Sofía Mendoza |
                                                    <i class="me-1"></i>2023-11-17 |
                                                    <i class="bi bi-person-circle me-1"></i>Dra. Grey |
                                                    <i class="bi bi-flag-fill me-1 priority-medium"></i>Regular
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-1" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 6 -->
                                    <div class="list-group-item task-item" data-task-id="task6" data-status="toDo">
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Actualizar estado de paciente Carlos Rojas en el sistema</div>
                                                <div class="task-category text-muted small">Actualización de datos</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>Carlos Rojas |
                                                    <i class="me-1"></i>2023-11-18 |
                                                    <i class="bi bi-person-circle me-1"></i>Dr. Rivera |
                                                    <i class="bi bi-flag-fill me-1 priority-low"></i>Baja
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-1" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tarea 7 -->
                                    <div class="list-group-item task-item" data-task-id="task7" data-status="toDo">
                                        <div class="d-flex w-100 justify-content-between align-items-start mb-2">
                                            <div class="task-content flex-grow-1">
                                                <div class="task-title">Revisar y adjuntar resultados de laboratorio de Pedro Gómez</div>
                                                <div class="task-category text-muted small">Documentación</div>
                                                <div class="task-details text-muted small mt-1">
                                                    <i class="bi bi-person me-1"></i>Pedro Gómez |
                                                    <i class="me-1"></i>2023-11-14 |
                                                    <i class="bi bi-person-circle me-1"></i>Dra. Wilson |
                                                    <i class="bi bi-flag-fill me-1 priority-high"></i>Alta
                                                </div>
                                            </div>
                                            <div class="task-actions">
                                                <button class="btn btn-sm btn-outline-warning change-status-btn me-1" data-new-status="inProcess">En Proceso</button>
                                                <button class="btn btn-sm btn-outline-success change-status-btn" data-new-status="done">Finalizar</button>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 m-2">
                                                <button class="btn btn-sm btn-outline-primary rounded-circle me-1" type="button" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger rounded-circle" type="button" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!-- Appointment Form -->
          <div class="col-lg-6 mt-5">
            <div class="appointment-form-wrapper bg-white p-4 p-md-5 rounded-4 shadow" data-aos="fade-up" data-aos-delay="200">
              <form action="forms/appointment.php" method="post" class="appointment-form php-email-form">
                <div class="row gy-3">
                    

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nombre del Paciente" required="">
                  </div>

                  <div class="col-md-6">
                    <select name="estado" class="form-select" required="">
                      <option value="">Seleccione el Estado</option>
                      <option value="toDo">Por hacer</option>
                      <option value="inProcess">En Proceso</option>
                      <option value="done">Finalizado</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <input type="text" name="category" class="form-control" placeholder="Tipo de Tarea" required="">
                  </div>

                  <div class="col-md-6">
                    <select name="department" class="form-select" required="">
                      <option value="">Criticidad</option>
                      <option value="bajo">Baja</option>
                      <option value="medio">Regular</option>
                      <option value="alto">Urgente</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <input type="date" name="date" class="form-control" required="">
                  </div>

                  <div class="col-md-6">
                    <select name="doctor" class="form-select" required="true">
                      <option value="">Doctor que Atiende</option>
                      <option value="dr-rivera">Dr. Erick Rivera</option>
                      <option value="dr-soto">Dr. Carlos Soto</option>
                      <option value="dr-wilson">Dra. Lisa Wilson</option>
                      <option value="dr-grey">Dra. Melissa Grey</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="3" placeholder="Por favor describa su tarea"></textarea>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. We will contact you shortly!</div>

                    <div class="mt-3 text-center">
                        <a href="#" class="btn bi bi-calendar-plus me-2"  style="background-color: #2596be; border-color: #2596be; color: #fff;">   Agregar Tarea</a>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div><!-- End Appointment Form -->

        
      </div>

    </section><!-- /Appointmnet Section -->

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