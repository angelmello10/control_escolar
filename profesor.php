<!-- profesor.php -->
<?php require 'db.php'; ?>
<h2>Modulo Profesor</h2>
<form action="profesor.php" method="POST">
    <input type="text" name="alumno" placeholder="Nombre Alumno" required>
    <input type="text" name="materia" placeholder="Materia" required>
    <input type="number" step="0.1" name="nota" placeholder="Nota" required>
    <button type="submit" name="guardar">Guardar Calificación</button>
</form>

<?php
if (isset($_POST['guardar'])) {
    $stmt = $db->prepare("INSERT INTO calificaciones (alumno, materia, nota) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['alumno'], $_POST['materia'], $_POST['nota']]);
    echo "<p>Calificación registrada.</p>";
}
?>
