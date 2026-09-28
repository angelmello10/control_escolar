<!-- admin_a.php -->
<?php require 'db.php'; ?>
<h2>Administrativo Nivel A</h2>
<form action="admin_a.php" method="POST">
    <input type="text" name="materia" placeholder="Nombre de la Materia" required>
    <button type="submit" name="crear_materia">Registrar Materia</button>
</form>

<?php
if (isset($_POST['crear_materia'])) {
    echo "<p>Materia {$_POST['materia']} creada exitosamente.</p>";
}
?>