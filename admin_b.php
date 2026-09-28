<!-- admin_b.php -->
<?php require 'db.php'; ?>
<h2>Administrativo Nivel B</h2>
<form action="admin_b.php" method="POST">
    <input type="text" name="alumno" placeholder="Alumno" required>
    <input type="text" name="concepto" placeholder="Concepto (Inscripción/Colegiatura)" required>
    <input type="number" name="monto" placeholder="Monto" required>
    <button type="submit" name="pago">Registrar Pago</button>
</form>

<?php
if (isset($_POST['pago'])) {
    $stmt = $db->prepare("INSERT INTO pagos (alumno, concepto, monto) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['alumno'], $_POST['concepto'], $_POST['monto']]);
    echo "<p>Pago registrado.</p>";
}
?>