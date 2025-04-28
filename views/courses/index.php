<?php
require_once __DIR__ . '/../partials/header.php';
require_once '../../models/Course.php';
$course = new Course();
$courses = $course->getAll();
?>
<body class="bg-light">
    
<div class="container py-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 text-primary">Gestión de Cursos</h1>
    <a href="create.php" class="btn btn-primary">Nuevo Curso</a>
  </div>

  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">Listado de Cursos</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Código</th>
              <th>Profesor</th>
              <th>Horario</th>
              <th class="text-end">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($courses as $c): ?>
            <tr>
              <td><span class="badge bg-primary">#<?= htmlspecialchars($c['id']) ?></span></td>
              <td><?= htmlspecialchars($c['nombre_curso']) ?></td>
              <td><span class="badge bg-secondary"><?= htmlspecialchars($c['codigo_curso']) ?></span></td>
              <td><?= htmlspecialchars($c['profesor_responsable']) ?></td>
              <td><span class="badge bg-danger"><?= htmlspecialchars($c['horario']) ?></span></td>
              <td class="text-end">
                <a href="edit.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-warning me-1" title="Editar">✏️</a>
                <a href="../../controllers/CourseController.php?action=delete&id=<?= $c['id'] ?>"
                   class="btn btn-sm btn-danger"
                   title="Eliminar"
                   onclick="return confirm('¿Estás seguro de eliminar este curso?');">
                   🗑️
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
