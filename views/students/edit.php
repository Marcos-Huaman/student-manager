<?php
require_once __DIR__ . '/../partials/header.php';
require_once '../../models/Student.php';
$student = new Student();
$stu = $student->getById($_GET['id']);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-user-edit me-2"></i>Editar Estudiante</h5>
                    <span class="badge bg-light text-dark">ID: <?= htmlspecialchars($stu['id']) ?></span>
                </div>

                <div class="card-body">
                    <form action="../../controllers/StudentController.php?action=update&id=<?= $stu['id'] ?>" 
                          method="POST" 
                          enctype="multipart/form-data"
                          class="needs-validation" 
                          novalidate>

                        <div class="row g-3">
                            <!-- Nombre -->
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                       value="<?= htmlspecialchars($stu['nombre']) ?>" required>
                                <div class="invalid-feedback">Por favor ingrese el nombre.</div>
                            </div>

                            <!-- Apellido -->
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido"
                                       value="<?= htmlspecialchars($stu['apellido']) ?>" required>
                                <div class="invalid-feedback">Por favor ingrese el apellido.</div>
                            </div>

                            <!-- Email -->
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="<?= htmlspecialchars($stu['email']) ?>" required>
                                    <div class="invalid-feedback">Ingrese un correo válido.</div>
                                </div>
                            </div>

                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="tel" class="form-control" id="telefono" name="telefono"
                                           value="<?= htmlspecialchars($stu['telefono']) ?>" required>
                                    <div class="invalid-feedback">Ingrese un teléfono válido.</div>
                                </div>
                            </div>

                            <!-- Fecha Nacimiento -->
                            <div class="col-md-6">
                                <label for="fecha_nacimiento" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                                       value="<?= htmlspecialchars($stu['fecha_nacimiento']) ?>" required>
                                <div class="invalid-feedback">Seleccione una fecha válida.</div>
                            </div>

                            <!-- Género -->
                            <div class="col-12">
                                <label for="genero" class="form-label">Género</label>
                                <select class="form-select" id="genero" name="genero" required>
                                    <option value="">Seleccione...</option>
                                    <option value="Masculino" <?= $stu['genero'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                                    <option value="Femenino" <?= $stu['genero'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
                                    <option value="Otro" <?= $stu['genero'] == 'Otro' ? 'selected' : '' ?>>Otro</option>
                                </select>
                                <div class="invalid-feedback">Seleccione un género.</div>
                            </div>

                            <!-- Foto Actual -->
                            <div class="col-12">
                                <label class="form-label">Foto Actual</label>
                                <div class="mb-3">
                                    <?php if (!empty($stu['foto'])): ?>
                                        <img src="../../uploads/<?= htmlspecialchars($stu['foto']) ?>" class="img-thumbnail" width="100">
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Sin foto</span>
                                    <?php endif; ?>
                                </div>
                                <label for="foto" class="form-label">Nueva Foto (opcional)</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                <div class="form-text">Dejar en blanco para conservar la actual.</div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="list.php" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left me-1"></i>Volver
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>Guardar Cambios
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Validación Bootstrap -->
<script>
(() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>
