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
    body {
        background-color: #f8f9fa;
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
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
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

<?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

    <main class="main">

        <!-- Page Title con Fondo de Imagen -->
        <div class="page-title">
        <div class="container">
            <h1><strong>Checklist Prequirúrgico</strong></h1>
        </div>
        </div><!-- End Page Title -->

        <section id="dashboard-widgets" class="featured-services section light-background">
            <div class="container checklist-container">

                <div class="row gy-4">
    
                    <!-- Plantillas asociadas y edición -->
                    <div class="estado-box">
                        <h5>Gestión de plantillas</h5>
                        <p>Plantilla asociada a cirugía: Colecistectomía laparoscópica</p>
                        <button class="btn btn-outline-primary btn-sm">Duplicar plantilla existente</button>
                        <button class="btn btn-outline-secondary btn-sm">Ver historial de ediciones</button>
                    </div>

                    <!-- Selección de Paciente y Plantilla -->
                    <div class="estado-box">
                        <h5>Paciente con cirugía programada</h5>
                        <p><strong>Acción:</strong> Plantilla prequirúrgica seleccionada</p>
                        <div class="mb-2"><strong>Nombre:</strong> Ana Rodríguez</div>
                        <div><strong>Identificación:</strong> 204560938</div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" placeholder="Notas adicionales..." id="notas"></textarea>
                            <label for="notas">Notas adicionales</label>
                        </div>
                    </div>

                    <!-- Indicador visual de progreso -->
                    <div class="mb-4">
                        <label class="form-label">Preparación del paciente</label>
                        <div class="progress">
                            <div id="progressBar" class="progress-bar bg-success" style="width: 0%;">0%</div>
                        </div>
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

                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success" style="background-color: #2596be; border-color: #2596be; color: #fff;" data-bs-toggle="modal" data-bs-target="#mensajeModal">
                                Confirmar Checklist
                            </button>
                            <button type="button" class="btn btn-outline-primary" onclick="crearPlantilla()">Crear Nueva Plantilla</button>
                            <button type="button" class="btn btn-outline-secondary" onclick="exportarPDF()">Exportar a PDF</button>
                        </div>
                    </form>

                    <!-- Modal de mensaje -->
                    <div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-success text-white">
                                    <h5 class="modal-title" id="modalLabel">✅ Checklist enviado con éxito</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    El protocolo ha sido marcado como cumplido. Se ha enviado notificación al equipo médico.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerta por checklist incompleto -->
                    <div class="estado-box alerta-roja">
                        <h5>Checklist incompleto a 24h</h5>
                        <p><strong>Encabezado del correo:</strong> Alerta: existen ítems pendientes</p>
                        <p><strong>Cuerpo:</strong> Por favor, atender en un plazo de 24 horas antes de su cita.</p>
                    </div>

                    <!-- Historial y consultas -->
                    <div class="estado-box">
                        <h5>Historial de procedimientos</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Cirugía - Septiembre 2023 <span class="badge float-end" style="background-color: #2596be; border-color: #2596be; color: #fff;">Checklist completo</span> </li>                            
                            <li class="list-group-item">Cirugía - Enero 2024 <span class="badge bg-danger float-end">Checklist incompleto</span></li>
                        </ul>
                    </div>

                    <!-- Consentimiento obligatorio -->
                    <div class="estado-box alerta-roja">
                        <h5>Consentimiento obligatorio</h5>
                        <p>Consentimiento firmado es requerido. No se puede cerrar el checklist sin este paso.</p>
                        <button class="btn btn-outline-success btn-sm">Firmar electrónicamente</button>
                    </div>

                    <!-- Laboratorio y resultados -->
                    <div class="estado-box">
                        <h5>Resultados de laboratorio</h5>
                        <p>PDF adjunto disponible.</p>
                        <button class="btn btn-outline-secondary btn-sm">Ver resultado</button>
                    </div>

                    <!-- Permisos de usuario -->
                    <div class="estado-box alerta-roja">
                        <h5>Acceso denegado</h5>
                        <p>Acción no permitida, consulte con su administrador.</p>
                    </div>

                    <!-- Envío de checklist -->
                    <div class="estado-box">
                        <h5>Checklist enviado</h5>
                        <p>📤 Correo enviado exitosamente el 02/08/2025 a las 15:00 por <strong>Enfermero Carlos Soto</strong></p>
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
            alert("Exportar a PDF: puedes usar libs como html2pdf.js o jspdf para esta funcionalidad.");
            // Lógica con html2pdf.js o similar
        }
    </script>
</body>
