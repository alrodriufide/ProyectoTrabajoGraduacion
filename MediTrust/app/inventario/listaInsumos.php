<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard Recepción - MediSoft</title>

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

    <main class="main ">
        <!-- Page Title con Fondo de Imagen -->
        <div class="page-title">
            <div class="container">
                <h1><strong>Inventario de Insumos</strong></h1>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Nav tabs -->
<ul class="nav nav-tabs custom-tabs mb-3" id="inventarioTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active custom-tab-link" id="insumos-tab" data-bs-toggle="tab" data-bs-target="#insumos" type="button" role="tab" aria-controls="insumos" aria-selected="true">
            <i class="bi bi-box-seam me-1"></i> Inventario de Insumos
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link custom-tab-link" id="categorias-tab" data-bs-toggle="tab" data-bs-target="#categorias" type="button" role="tab" aria-controls="categorias" aria-selected="false">
            <i class="bi bi-tags me-1"></i> Categorías del Inventario
        </button>
    </li>
</ul>


        <!-- Tab panes -->
        <div class="tab-content" id="inventarioTabsContent">
            <!-- Inventario de Insumos -->
            <div class="tab-pane fade show active" id="insumos" role="tabpanel" aria-labelledby="insumos-tab">
                <section id="inventario-insumos" class="section py-4">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="card shadow-sm mb-5">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <a href="../inventario/agregarInsumo.php" class="btn btn-light btn-sm" style="background-color: #2596be; border-color: #2596be; color: #fff;">
                                    <i class="bi bi-plus-circle"></i> Agregar Insumo
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Buscar por nombre o SKU...">
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">SKU</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Stock Actual</th>
                                                <th scope="col">Stock Mínimo</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SKU001</td>
                                                <td>Guantes</td>
                                                <td><span class="badge bg-success">150</span></td>
                                                <td>50</td>
                                                <td>
                                                    <a href="../inventario/editarInsumo.php" class="btn btn-outline-warning btn-sm"
                                                       onclick="guardarDatos('SKU001', 'Guantes', 150, 50)">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalConfirmacion"><i class="bi bi-trash"></i></button>
                                                    <div class="d-flex justify-content-end mb-3">
                                                        <button type="button" class="btn btn-outline-success btn-sm me-2">
                                                            <i class="bi bi-file-earmark-excel"></i> Exportar a Excel
                                                        </button>
                                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="bi bi-file-earmark-pdf"></i> Exportar a PDF
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>SKU002</td>
                                                <td>Jeringas</td>
                                                <td><span class="badge bg-warning text-dark">80</span></td>
                                                <td>30</td>
                                                <td>
                                                    <a href="../inventario/editarInsumo.php" class="btn btn-outline-warning btn-sm"
                                                       onclick="guardarDatos('SKU002', 'Jeringas', 80, 30)">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalConfirmacion"><i class="bi bi-trash"></i></button>
                                                    <div class="d-flex justify-content-end mb-3">
                                                        <button type="button" class="btn btn-outline-success btn-sm me-2">
                                                            <i class="bi bi-file-earmark-excel"></i> Exportar a Excel
                                                        </button>
                                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="bi bi-file-earmark-pdf"></i> Exportar a PDF
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Categorías del Inventario -->
            <div class="tab-pane fade" id="categorias" role="tabpanel" aria-labelledby="categorias-tab">

                <!-- Categorías Section -->
                <section id="categorias-inventario" class="section py-4">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="card shadow-sm mb-5">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <a href="agregarCategoria.php" class="btn btn-light btn-sm" style="background-color: #2596be; border-color: #2596be; color: #fff;">
                                    <i class="bi bi-plus-circle"></i> Nueva Categoría
                                </a>
                            </div>

                            <div class="card-body">
                                <!-- Tabla de categorías -->
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CAT001</td>
                                                <td>Medicamentos</td>
                                                <td>
                                                    <a href="../inventario/editarCategoria.php?id=CAT001" class="btn btn-outline-warning btn-sm">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalConfirmacion">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>CAT002</td>
                                                <td>Instrumental</td>
                                                <td>
                                                    <a href="../inventario/editarCategoria.php?id=CAT002" class="btn btn-outline-warning btn-sm">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalConfirmacion">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Formulario de nueva categoría -->
    <div id="formNueva" class="card p-3 mb-4 d-none">
        <h5>Agregar Nueva Categoría</h5>
        <input id="nombreCategoria" class="form-control mt-2 mb-3" placeholder="Nombre de la categoría" />
        <button class="btn btn-success me-2">Guardar</button>
        <button class="btn btn-outline-secondary">Cancelar</button>
    </div>

    <!-- Editor de categorías -->
    <div id="editorCategorias" class="card p-3 d-none">
        <h5>Editar/Eliminar Categorías</h5>
        <ul id="listaCategorias" class="list-group mt-3"></ul>
    </div>
    </div>

    <!-- Modal de Confirmaci�n -->
    <div class="modal fade" id="modalConfirmacion" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    ¿Desea borrar este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.js"></script>

    <?php include '../../app/navbars/footer.php'; ?>

</body>
</html>