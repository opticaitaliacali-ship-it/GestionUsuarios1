<?php
session_start();
if(!isset($_SESSION['admin'])){ header('Location: index.php'); exit; }
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Dashboard</title></head>
<body>
<h1>Panel Principal</h1>
<ul>
<li><a href='usuarios.php'>Gestionar Usuarios</a></li>
<li><a href='logout.php'>Cerrar Sesión</a></li>
</ul>
</body></html>