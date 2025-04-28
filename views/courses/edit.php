<?php
require_once __DIR__ . '/../partials/header.php';
require_once '../../models/Course.php';
$course = new Course();
$c = $course->getById($_GET['id']);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h1 class="h4 mb-0">Editar Curso: <?= htmlspecialchars($c['nombre_curso']) ?></h1>
                </div>
                <div class="card-body">
                    <form action="../../controllers/CourseController.php?action=update&id=<?= $c['id'] ?>" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="nombre_curso" class="form-label">Nombre del Curso</label>
                            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" 
                                   value="<?= htmlspecialchars($c['nombre_curso']) ?>" required>
                            <div class="invalid-feedback">Por favor ingrese el nombre del curso.</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="codigo_curso" class="form-label">Código del Curso</label>
                                <input type="text" class="form-control" id="codigo_curso" name="codigo_curso" 
                                       value="<?= htmlspecialchars($c['codigo_curso']) ?>" required>
                                <div class="invalid-feedback">Por favor ingrese el código del curso.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="profesor_responsable" class="form-label">Profesor Responsable</label>
                                <input type="text" class="form-control" id="profesor_responsable" name="profesor_responsable" 
                                       value="<?= htmlspecialchars($c['profesor_responsable']) ?>" required>
                                <div class="invalid-feedback">Por favor ingrese el nombre del profesor.</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" 
                                       value="<?= htmlspecialchars($c['fecha_inicio']) ?>" required>
                                <div class="invalid-feedback">Por favor seleccione la fecha de inicio.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fecha_fin" class="form-label">Fecha de Finalización</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" 
                                       value="<?= htmlspecialchars($c['fecha_fin']) ?>" required>
                                <div class="invalid-feedback">Por favor seleccione la fecha de finalización.</div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="horario" class="form-label">Horario</label>
                            <input type="text" class="form-control" id="horario" name="horario" 
                                   value="<?= htmlspecialchars($c['horario']) ?>" required>
                            <small class="text-muted">Formato: Días HoraInicio-HoraFin</small>
                            <div class="invalid-feedback">Por favor ingrese el horario del curso.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nivel_dificultad" class="form-label">Nivel de Dificultad</label>
                            <select class="form-select" id="nivel_dificultad" name="nivel_dificultad" required>
                                <option value="Básico" <?= $c['nivel_dificultad'] == 'Básico' ? 'selected' : '' ?>>Básico</option>
                                <option value="Intermedio" <?= $c['nivel_dificultad'] == 'Intermedio' ? 'selected' : '' ?>>Intermedio</option>
                                <option value="Avanzado" <?= $c['nivel_dificultad'] == 'Avanzado' ? 'selected' : '' ?>>Avanzado</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione el nivel de dificultad.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción del Curso</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" 
                                      rows="4" required><?= htmlspecialchars($c['descripcion']) ?></textarea>
                            <div class="invalid-feedback">Por favor ingrese una descripción del curso.</div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="listar_cursos.php" class="btn btn-outline-secondary me-md-2">
                                <i class="bi bi-arrow-left"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Actualizar Curso
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

