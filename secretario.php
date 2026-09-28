<!-- secretario.php -->
<?php require 'db.php'; ?>
<h2>Secretario Académico - Reportes</h2>
<h3>Lista de Calificaciones Registradas</h3>
<table border="1">
    <tr><th>Alumno</th><th>Materia</th><th>Nota</th></tr>
    <?php
    $res = $db->query("SELECT * FROM calificaciones");
    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
        echo "<tr><td>{$row['alumno']}</td><td>{$row['materia']}</td><td>{$row['nota']}</td></tr>";
    }
    ?>
</table>
