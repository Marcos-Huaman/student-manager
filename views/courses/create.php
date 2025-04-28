<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h1 class="h4 mb-0">Agregar Nuevo Curso</h1>
                </div>
                <div class="card-body">
                    <form action="../../controllers/CourseController.php?action=create" method="POST" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="nombre_curso" class="form-label">Nombre del Curso</label>
                            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" 
                                   placeholder="Ingrese el nombre del curso" required>
                            <div class="invalid-feedback">Por favor ingrese el nombre del curso.</div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="codigo_curso" class="form-label">Código del Curso</label>
                                <input type="text" class="form-control" id="codigo_curso" name="codigo_curso" 
                                       placeholder="Ej: MAT-101" required>
                                <div class="invalid-feedback">Por favor ingrese el código del curso.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="profesor_responsable" class="form-label">Profesor Responsable</label>
                                <input type="text" class="form-control" id="profesor_responsable" name="profesor_responsable" 
                                       placeholder="Nombre del profesor" required>
                                <div class="invalid-feedback">Por favor ingrese el nombre del profesor.</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                                <div class="invalid-feedback">Por favor seleccione la fecha de inicio.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="fecha_fin" class="form-label">Fecha de Finalización</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                                <div class="invalid-feedback">Por favor seleccione la fecha de finalización.</div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="horario" class="form-label">Horario</label>
                            <input type="text" class="form-control" id="horario" name="horario" 
                                   placeholder="Ej: Lun-Mie 10:00-12:00" required>
                            <small class="text-muted">Formato: Días HoraInicio-HoraFin</small>
                            <div class="invalid-feedback">Por favor ingrese el horario del curso.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nivel_dificultad" class="form-label">Nivel de Dificultad</label>
                            <select class="form-select" id="nivel_dificultad" name="nivel_dificultad" required>
                                <option value="" selected disabled>Seleccione un nivel</option>
                                <option value="Básico">Básico</option>
                                <option value="Intermedio">Intermedio</option>
                                <option value="Avanzado">Avanzado</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione el nivel de dificultad.</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción del Curso</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" 
                                      rows="4" placeholder="Describa los objetivos y contenido del curso" required></textarea>
                            <div class="invalid-feedback">Por favor ingrese una descripción del curso.</div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-outline-secondary me-md-2">
                                <i class="bi bi-arrow-counterclockwise"></i> Limpiar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Guardar Curso
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

