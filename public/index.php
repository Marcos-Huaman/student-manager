<?php
// index.php en la raíz de /crud-app/public/
require_once __DIR__ . '/../views/partials/header.php';
?>
<body class="bg-light">
<!-- Tabs -->
<div class="container mt-4">
  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="estudiantes-tab" data-bs-toggle="tab" data-bs-target="#estudiantes" type="button" role="tab">
        <i class="bi bi-people-fill me-2"></i>Estudiantes
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos" type="button" role="tab">
        <i class="bi bi-journal-bookmark-fill me-2"></i>Cursos
      </button>
    </li>
  </ul>

  <div class="tab-content mt-3" id="myTabContent">
    <!-- Estudiantes -->
    <div class="tab-pane fade show active" id="estudiantes" role="tabpanel">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm border-0">
            <div class="card-body text-center">
              <a href="../views/students/index.php" class="text-decoration-none">
                <i class="bi bi-person-badge display-1 text-primary mb-3" style="cursor: pointer;"></i>
              </a>
              <h5 class="card-title fw-bold">Gestión de Estudiantes</h5>
              <p class="card-text">
                Administra registros.
              </p>
              <div class="mt-4">
                <a href="../views/students/create.php" class="btn btn-primary me-2">
                  <i class="bi bi-person-plus"></i> Agregar Estudiante
                </a>
                <a href="buscar-estudiantes.php" class="btn btn-outline-primary">
                  <i class="bi bi-search"></i> Buscar Estudiantes
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Cursos -->
    <div class="tab-pane fade" id="cursos" role="tabpanel">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm border-0">
            <div class="card-body text-center">
              <a href="../views/courses/index.php" class="text-decoration-none">
                <i class="bi bi-journal-richtext display-1 text-primary mb-3" style="cursor: pointer;"></i>
              </a>
              <h5 class="card-title fw-bold">Administración de Cursos</h5>
              <p class="card-text">
                Crea, organiza cursos, asigna profesores y realiza seguimiento de rendimiento.
              </p>
              <div class="mt-4">
                <a href="../views/courses/create.php" class="btn btn-primary me-2">
                  <i class="bi bi-plus-circle"></i> Crear Curso
                </a>
                <a href="buscar-cursos.php" class="btn btn-outline-primary">
                  <i class="bi bi-funnel"></i> Filtrar Cursos
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
