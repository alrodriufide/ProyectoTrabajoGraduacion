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
  
</head>

<body class="index-page">

  <?php include '../../app/navbars/LayoutRecepcion.php'; // Usando el layout de recepción como base ?>

  <main class="main">

    <!-- Page Title con Fondo de Imagen -->
    <div class="page-title">
      <div class="container">
        <h1><strong>Dashboard de Recepción</strong></h1>
        <p>Bienvenida, Laura. Aquí tienes el resumen de la actividad de hoy.</p>
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
                      <h5 class="appointment-title">Ana Fuentes (con Dr. Rivera)</h5>
                      <p class="appointment-description">Revisión post-operatoria de implante.</p>
                    </div>
                  </div>

                  <!-- Cita 2 -->
                  <div class="appointment-item">
                    <div class="appointment-time">10:00<br>10:30</div>
                    <div class="appointment-details border-por-confirmar">
                      <p class="appointment-motive motive-por-confirmar">Primera Consulta</p>
                      <h5 class="appointment-title">Pedro Gómez (con Dra. Fonseca)</h5>
                      <p class="appointment-description">Evaluación para posible ortodoncia.</p>
                    </div>
                  </div>
                  
                  <!-- Cita 3 -->
                  <div class="appointment-item">
                    <div class="appointment-time">11:00<br>11:30</div>
                    <div class="appointment-details border-en-sala">
                      <p class="appointment-motive motive-en-sala">Cirugía Menor</p>
                      <h5 class="appointment-title">Carlos Rojas (con Dr. Rivera)</h5>
                      <p class="appointment-description">Extracción de cordal inferior.</p>
                    </div>
                  </div>

                  <!-- Cita 4 -->
                  <div class="appointment-item">
                    <div class="appointment-time">12:00<br>12:30</div>
                    <div class="appointment-details border-cancelo">
                      <p class="appointment-motive motive-cancelo">Limpieza Dental</p>
                      <h5 class="appointment-title">Luisa Fernández (con Dr. Rivera)</h5>
                      <p class="appointment-description">Paciente canceló cita esta mañana.</p>
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
                                
                            <h3><strong><i class="fas fa-tasks"></i>  Mis Tareas Pendientes</strong></h3>
                            <div class="list-group list-group-flush mt-4">
                              <div class="list-group-item">
                                <input class="form-check-input me-3" type="checkbox" value="" id="task1">
                                <div class="task-content">
                                  <div class="task-title">Confirmar cita de Pedro Gómez</div>
                                  <div class="task-category text-muted small">Agendamiento</div>
                                </div>
                              </div>
                              <div class="list-group-item">
                                <input class="form-check-input me-3" type="checkbox" value="" id="task2">
                                <div class="task-content">
                                  <div class="task-title">Agendar control para Ana Fuentes</div>
                                  <div class="task-category text-muted small">Seguimiento</div>
                                </div>

                              </div>
                              <div class="list-group-item">
                                <input class="form-check-input me-3" type="checkbox" value="" id="task3">
                                <div class="task-content">
                                  <div class="task-title">Registrar entrada de insumos (Pedido #123)</div>
                                  <div class="task-category text-muted small">Inventario</div>
                                </div>
       
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Widget: Pacientes por Atender -->
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <div class="department-card task-widget">
                        <div class="department-content">
                               
                            <h3><strong><i class="bi bi-person-check-fill"></i>  Pacientes en Sala de Espera</strong></h3>
                            <p>Checklist de pacientes que han llegado a la clínica.</p>
                            <div class="list-group list-group-flush mt-4">
                              <!-- Paciente 1 - Presente -->
                              <div class="list-group-item">
                                <input class="form-check-input" type="checkbox" value="" id="patient1" checked>
                                <div class="task-content">
                                  <div class="task-title">Carlos Rojas</div>
                                  <div class="task-category text-muted small">Cita: 11:00 AM con Dr. Rivera</div>
                                </div>
                              </div>
                              <!-- Paciente 2 - No ha llegado -->
                              <div class="list-group-item">
                                <input class="form-check-input" type="checkbox" value="" id="patient2">
                                <div class="task-content">
                                  <div class="task-title">Luisa Fernández</div>
                                  <div class="task-category text-muted small">Cita: 12:00 PM con Dr. Rivera</div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
                        <!-- Columna -->
                <div class="col-lg-7">
                    <div class="row gy-1">
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
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="consentimiento" required>
                                                        <label class="form-check-label" for="consentimiento">Consentimiento informado firmado</label>
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

                                                    <div class="form-check mb-4">
                                                        <input class="form-check-input checklist-item" type="checkbox" id="consentimiento">
                                                        <div class="task-category text-muted small">Consentimiento firmado es requerido. No se puede cerrar el checklist sin este paso.</div>
                                                        <button class="btn btn-outline-success btn-sm">Firmar electrónicamente</button>
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

                    <!-- Modal de mensaje -->
                    <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-white">
                                    <h5 class="modal-title" id="modalLabel">✅ Checklist enviado con éxito</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    El protocolo ha sido marcado como cumplido. Se ha enviado notificación al equipo médico el 02/08/2025 a las 15:00 horas por enfermero Carlos Soto
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal de mensaje -->

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
