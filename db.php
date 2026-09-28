<?php
// db.php
$db = new PDO('sqlite:' . __DIR__ . '/escuela.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Crear tablas básicas
$db->exec("
    CREATE TABLE IF NOT EXISTS usuarios (id INTEGER PRIMARY KEY, nombre TEXT, rol TEXT);
    CREATE TABLE IF NOT EXISTS calificaciones (id INTEGER PRIMARY KEY, alumno TEXT, materia TEXT, nota REAL);
    CREATE TABLE IF NOT EXISTS pagos (id INTEGER PRIMARY KEY, alumno TEXT, concepto TEXT, monto REAL);
");
?>