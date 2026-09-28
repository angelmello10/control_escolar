<!-- index.php -->
<?php $rol = $_GET['rol'] ?? 'invitado'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Practica Escolar</title>
</head>
<body>
<h1>Control Escolar</h1>
<label>Cambiar rol:</label>
<select onchange="location = '?rol=' + this.value;">
<option value="alumno" <?= $rol === 'alumno' ? 'selected' : '' ?>>Alumno</option>
<option value="profesor" <?= $rol === 'profesor' ? 'selected' : '' ?>>Profesor</option>
<option value="admin_a" <?= $rol === 'admin_a' ? 'selected' : '' ?>>Admin A</option>
<option value="admin_b" <?= $rol === 'admin_b' ? 'selected' : '' ?>>Admin B</option>
<option value="director" <?= $rol === 'director' ? 'selected' : '' ?>>Director</option>
<option value="secretario" <?= $rol === 'secretario' ? 'selected' : '' ?>>Secretario</option>
</select>
 
    <h2>Menú Principal</h2>
<ul>
<?php if ($rol === 'alumno'): ?>
<li><a href="alumno.php">Inscripciones y Evaluaciones</a></li>
<?php elseif ($rol === 'profesor'): ?>
<li><a href="profesor.php">Capturar Calificaciones</a></li>
<?php elseif ($rol === 'admin_a'): ?>
<li><a href="admin_a.php">Gestión de Materias y Horarios</a></li>
<?php elseif ($rol === 'admin_b'): ?>
<li><a href="admin_b.php">Control de Pagos y Becas</a></li>
<?php elseif ($rol === 'director'): ?>
<li><a href="director.php">Planes de Estudio y Docentes</a></li>
<?php elseif ($rol === 'secretario'): ?>
<li><a href="secretario.php">Reportes y Estadísticas</a></li>
<?php endif; ?>
</ul>
</body>
</html>
 
