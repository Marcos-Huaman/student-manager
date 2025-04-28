<?php
require_once __DIR__ . '/../partials/header.php';
require_once '../../models/Student.php';
$student = new Student();
$students = $student->getAll();
?>
<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">
                <i class="fas fa-users me-2"></i>Gestión de Estudiantes
            </h1>
            <a href="create.php" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Nuevo Estudiante
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-list-alt me-2"></i>Listado de Estudiantes
                </h5>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                    <input type="text" id="searchInput" class="form-control w-25" placeholder="Buscar estudiantes...">
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($students as $s): ?>
                            <tr>
                                <td><span class="badge bg-primary">#<?= htmlspecialchars($s['id']) ?></span></td>
                                <td><?= htmlspecialchars($s['nombre']) ?></td>
                                <td><?= htmlspecialchars($s['apellido']) ?></td>
                                <td><a href="mailto:<?= htmlspecialchars($s['email']) ?>"><?= htmlspecialchars($s['email']) ?></a></td>
                                <td><?= htmlspecialchars($s['telefono']) ?></td>
                                <td class="text-end">
                                    <a href="edit.php?id=<?= $s['id'] ?>" class="btn btn-warning btn-sm me-1" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="../../controllers/StudentController.php?action=delete&id=<?= $s['id'] ?>" 
                                       class="btn btn-danger btn-sm" title="Eliminar"
                                       onclick="return confirm('¿Estás seguro de eliminar este estudiante?');">
                                        <i class="fas fa-trash-alt"></i>
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

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const rowText = row.textContent.toLowerCase();
                row.style.display = rowText.includes(searchText) ? '' : 'none';
            });
        });
    });
    </script>
</body>
</html>
