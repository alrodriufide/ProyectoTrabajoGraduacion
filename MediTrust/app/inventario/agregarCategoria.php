<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Formulario de insumos - MediSoft</title>

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
    body { padding-top: 70px; }
    .card-header { background-color: #3498db; color: #fff; }
    .page-title { margin-bottom: 30px; }
    .appointment-time { font-weight: bold; font-size: 1rem; }
    .appointment-item { border-left: 5px solid #3498db; padding: 10px 15px; margin-bottom: 10px; background-color: #f9f9f9; }
    .time-slot { cursor: pointer; padding: 8px 12px; border: 1px solid #ddd; border-radius: 5px; margin: 5px; text-align: center; }
    .time-slot:hover { background-color: #3498db; color: #fff; }
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


      .custom-tabs {
    border-bottom: 2px solid #dee2e6;
}

.custom-tab-link {
    color: black;
    background-color: #f8f9fa;
    border: 1px solid transparent;
    border-radius: 0.5rem 0.5rem 0 0;
    padding: 0.75rem 1.25rem;
    transition: all 0.3s ease;
}

.custom-tab-link:hover {
    background-color: #e9ecef;
    color: #0a58ca;
    border-color: #0d6efd;
}

.custom-tab-link.active {
    background-color: #0d6efd;
    color: #fff;
    border-color: #0d6efd #0d6efd #fff;
}
</style>
</head>
<body>

    <?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

    <?php include '../../app/navbars/LayoutDirector.php'; // Usando el layout de recepción como base ?>

    <main class="main " style="margin-top: 70px;">

        <!-- Formulario Categoría Section -->
        <section id="formulario-categoria" class="section py-4">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0 text-dark">Formulario de Categoría</h5>
                    </div>
                    <div class="card-body">
                        <form action="../inventario/listaInsumos.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="nombreCategoria" class="form-label">Nombre de la Categoría <span class="text-danger">*</span></label>
                                    <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control" required>
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="../inventario/listaInsumos.php" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Guardar
                                </a>
                                <a href="../inventario/listaInsumos.php" class="btn btn-danger">
                                    <i class="bi bi-x-circle"></i> Cancelar
                                </a>
                            </div>
                    </div>
                    </form>
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