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


</head>
<body class="index-page">
    <?php include '../../app/navbars/LayoutClinico.php'; // Usando el layout de recepción como base ?>

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
                                <h3><strong><i class="bi bi-calendar3"></i>  Mi Agenda del Día</strong></h3>
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
                                        <h3><strong><i class="fas fa-tasks"></i>  Mis Tareas Pendientes</strong></h3>
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
                                        <h3><strong><i class="bi bi-exclamation-triangle-fill"></i>  Alertas de Mis Pacientes</strong></h3>
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
