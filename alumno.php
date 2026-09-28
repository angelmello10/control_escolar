<!-- alumno.php -->
<?php require 'db.php'; ?>
<h2>Portal del Alumno</h2>
<form action="alumno.php" method="POST">
    <label>Evaluar Profesor:</label>
    <input type="text" name="profesor" placeholder="Nombre profesor" required>
    <input type="number" name="calificacion" min="1" max="10" required>
    <button type="submit" name="evaluar">Enviar Evaluación</button>
</form>

<?php
if (isset($_POST['evaluar'])) {
    echo "<p>Evaluación enviada con éxito.</p>";
}
?>
