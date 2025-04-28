<?php require_once __DIR__ . '/../partials/header.php'; ?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary bg-gradient text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i>Registro de Estudiante</h3>
                        <span class="badge bg-light text-primary fs-6">Nuevo</span>
                    </div>
                </div>
                
                <div class="card-body">
                    <form id="studentForm" action="../../controllers/StudentController.php?action=create" method="POST" novalidate>
                        <div class="row g-3 mb-4">
                            <!-- Nombre Completo -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" name="nombre" 
                                           placeholder="Nombre" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}">
                                    <label for="nombre">Nombre(s)</label>
                                    <div class="invalid-feedback">Por favor ingrese un nombre válido</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="apellido" name="apellido" 
                                           placeholder="Apellido" required pattern="[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}">
                                    <label for="apellido">Apellido(s)</label>
                                    <div class="invalid-feedback">Por favor ingrese un apellido válido</div>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="Email" required>
                                    <label for="email">Correo Electrónico</label>
                                    <div class="invalid-feedback">Por favor ingrese un email válido</div>
                                    <div class="valid-feedback">¡Se ve bien!</div>
                                </div>
                            </div>
                            
                            <!-- Teléfono y Fecha Nacimiento -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="telefono" name="telefono" 
                                           placeholder="Teléfono" required pattern="[0-9]{10,15}">
                                    <label for="telefono">Teléfono</label>
                                    <div class="invalid-feedback">Ingrese un número válido (10-15 dígitos)</div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="fecha_nacimiento" 
                                           name="fecha_nacimiento" required max="<?= date('Y-m-d'); ?>">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <div class="invalid-feedback">Seleccione una fecha válida</div>
                                </div>
                            </div>
                            
                            <!-- Género -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="genero" name="genero" required>
                                        <option value="" selected disabled>Seleccione...</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                        <option value="Prefiero no decir">Prefiero no decir</option>
                                    </select>
                                    <label for="genero">Género</label>
                                    <div class="invalid-feedback">Por favor seleccione una opción</div>
                                </div>
                            </div>
                            
                            <!-- Foto (opcional) -->
                            <div class="col-12 mt-3">
                                <label for="foto" class="form-label">Foto del Estudiante (Opcional)</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                                <div class="form-text">Formatos aceptados: JPG, PNG (Max. 2MB)</div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <button type="button" class="btn btn-outline-secondary me-md-2" id="btnCancelar">
                            <a href="../views/students/index.php" class="text-decoration-none">
                                <i class="bi bi-x-circle me-1"></i> Cancelar
                            </a>
                            </button>
                            <button type="submit" class="btn btn-primary" id="btnSubmit">
                                <i class="bi bi-save-fill me-1"></i> Registrar Estudiante
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="card-footer bg-light">
                    <small class="text-muted">Todos los campos marcados con <span class="text-danger">*</span> son obligatorios</small>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Validación del formulario
(function() {
    'use strict';
    
    // Fetch form and apply validation
    const form = document.getElementById('studentForm');
    const btnCancelar = document.getElementById('btnCancelar');
    
    // Cancel button action
    btnCancelar.addEventListener('click', function() {
        if(confirm('¿Está seguro que desea cancelar? Los datos no guardados se perderán.')) {
            window.location.href = 'list.php';
        }
    });
    
    // Form validation
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        
        form.classList.add('was-validated');
    }, false);
    
    // Real-time validation for email
    const emailInput = document.getElementById('email');
    emailInput.addEventListener('input', function() {
        if (emailInput.validity.valid) {
            emailInput.classList.add('is-valid');
            emailInput.classList.remove('is-invalid');
        } else {
            emailInput.classList.add('is-invalid');
            emailInput.classList.remove('is-valid');
        }
    });
    
    // Date validation (must be in the past)
    const fechaInput = document.getElementById('fecha_nacimiento');
    fechaInput.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        const today = new Date();
        
        if (selectedDate > today) {
            this.setCustomValidity('La fecha debe ser anterior al día actual');
        } else {
            this.setCustomValidity('');
        }
    });
})();
</script>

