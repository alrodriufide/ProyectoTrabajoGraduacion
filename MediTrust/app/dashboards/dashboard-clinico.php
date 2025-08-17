<!-- Descomentar cuando se tenga el proyecto completo para que se cree el layout dinamicamente -->
<!--@{
    ViewBag.Title = "Dashboard Clínico";
    Layout = "~/Views/Shared/_LayoutClinico.cshtml";
}-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard Clínico - MediSoft</title>

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

    <style>
        body {
            background-color: #f8f9fa;
                .page-title { margin-bottom: 30px; }
    .card-header { background-color: #3498db; color: #fff; }
    .btn-primary { background-color: #3498db; border: none; }
    .btn-primary:hover { background-color: #2980b9; }
    .badge-status { font-size: 0.9em; }
        }

        .progress-bar {
            transition: width 0.5s ease-in-out;
        }

        .checklist-container {
            max-width: 600px;
            margin: 40px auto;
        }

        .estado-box {
            border-left: 5px solid #0d6efd;
            background-color: #fff;
            padding: 1rem;
            border-radius: .5rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

            .estado-box h5 {
                color: #0d6efd;
                margin-bottom: 0.5rem;
            }

        .alerta-roja {
            border-left-color: #dc3545 !important;
        }

        .alerta-verde {
            border-left-color: #198754 !important;
        }
    </style>


</head>

<body class="index-page">
    <?php include '../../app/navbars/LayoutClinico.php'; // Usando el layout de recepción como base
    ?>

    <main class="main">

        <!-- Page Title con Fondo de Imagen -->
        <div class="page-title">
            <div class="container">
                <h1><strong>Dashboard Clínico</strong></h1>
                <p>Bienvenido, Dr. Carlos Soto. Aquí tienes tu resumen del día.</p>
            </div>
        </div><!-- End Page Title -->

        <section id="dashboard-widgets" class="featured-services section light-background">
            <div class="container">
                <div class="row gy-4">

                    <!-- Widget: Mi Agenda del Día -->
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="department-card h-100">
                            <div class="department-content">
                                <h3><strong><i class="bi bi-calendar3"></i> Mi Agenda del Día</strong></h3>
                                <div class="mt-4">

                                    <div class="appointment-item">
                                        <div class="appointment-time">08:00<br>08:30</div>
                                        <div class="appointment-details border-confirmada">
                                            <p class="appointment-motive motive-confirmada">Control</p>
                                            <h5 class="appointment-title">Ana Martínez</h5>
                                            <p class="appointment-description">Revisión de presión arterial y ajustes.</p>
                                        </div>
                                    </div>

                                    <div class="appointment-item">
                                        <div class="appointment-time">09:30<br>10:00</div>
                                        <div class="appointment-details border-en-sala">
                                            <p class="appointment-motive motive-en-sala">Consulta General</p>
                                            <h5 class="appointment-title">Pedro Sánchez</h5>
                                            <p class="appointment-description">Evaluación inicial de síntomas digestivos.</p>
                                        </div>
                                    </div>

                                    <div class="appointment-item">
                                        <div class="appointment-time">11:00<br>11:30</div>
                                        <div class="appointment-details border-por-confirmar">
                                            <p class="appointment-motive motive-por-confirmar">Seguimiento</p>
                                            <h5 class="appointment-title">Luis Chaves</h5>
                                            <p class="appointment-description">Monitoreo post tratamiento con antibióticos.</p>
                                        </div>
                                    </div>

                                    <div class="appointment-item">
                                        <div class="appointment-time">15:00<br>15:30</div>
                                        <div class="appointment-details border-cancelo">
                                            <p class="appointment-motive motive-cancelo">Cancelada</p>
                                            <h5 class="appointment-title">María López</h5>
                                            <p class="appointment-description">Paciente canceló la cita esta mañana.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna derecha: tareas y alertas -->
                    <div class="col-lg-5">
                        <div class="row gy-4">
                            <!-- Widget: Mis Tareas Pendientes -->
                            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="department-card task-widget">
                                    <div class="department-content">
                                        <h3><strong><i class="fas fa-tasks"></i> Mis Tareas Pendientes</strong></h3>
                                        <div class="list-group list-group-flush mt-4">
                                            <div class="list-group-item">
                                                <input class="form-check-input me-3" type="checkbox" id="tarea1">
                                                <div class="task-content">
                                                    <div class="task-title">Revisar análisis de sangre de Pedro</div>
                                                    <div class="task-category text-muted small">Laboratorio</div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <input class="form-check-input me-3" type="checkbox" id="tarea2">
                                                <div class="task-content">
                                                    <div class="task-title">Completar formulario de evolución</div>
                                                    <div class="task-category text-muted small">Gestión Clínica</div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <input class="form-check-input me-3" type="checkbox" id="tarea3">
                                                <div class="task-content">
                                                    <div class="task-title">Llamar a Ana para seguimiento</div>
                                                    <div class="task-category text-muted small">Comunicación</div>
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

    <script>
        const checklistItems = document.querySelectorAll('.checklist-item');
        const progressBar = document.getElementById('progressBar');

        checklistItems.forEach(item => {
            item.addEventListener('change', actualizarProgreso);
        });

        function actualizarProgreso() {
            const total = checklistItems.length;
            const completados = [...checklistItems].filter(i => i.checked).length;
            const porcentaje = Math.round((completados / total) * 100);
            progressBar.style.width = porcentaje + '%';
            progressBar.textContent = porcentaje + '%';
        }

        function crearPlantilla() {
            alert("Funcionalidad para crear nueva plantilla: ¡próximamente implementada!");
            // Funcion plantilla nueva
        }

        function exportarPDF() {
            alert("Exportar a PDF");
            // Lógica con html2pdf.js o similar
        }
    </script>
</body>