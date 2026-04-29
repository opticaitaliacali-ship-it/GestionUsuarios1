<?php
session_start();
if(!isset($_SESSION['admin'])){ header('Location:index.php'); exit; }
include 'conexion.php';

if(isset($_POST['guardar'])){
  $nombre=$_POST['nombre'];
  $cedula=$_POST['cedula'];
  $telefono=$_POST['telefono'];
  $cn->query("INSERT INTO usuarios(nombre,cedula,telefono) VALUES('$nombre','$cedula','$telefono')");
}

if(isset($_GET['eliminar'])){
  $id=$_GET['eliminar'];
  $cn->query("DELETE FROM usuarios WHERE id=$id");
}

$usuarios=$cn->query('SELECT * FROM usuarios ORDER BY id DESC');
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Usuarios</title></head>
<body>
<h2>GESTIÓN DE USUARIOS</h2>
<form method='post'>
<input name='nombre' placeholder='Nombre' required>
<input name='cedula' placeholder='Cédula' required>
<input name='telefono' placeholder='Teléfono' required>
<button name='guardar'>Guardar</button>
</form>
<hr>
<table border='1' cellpadding='5'>
<tr><th>ID</th><th>Nombre</th><th>Cédula</th><th>Teléfono</th><th>Acción</th></tr>
<?php while($u=$usuarios->fetch_assoc()): ?>
<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['nombre'] ?></td>
<td><?= $u['cedula'] ?></td>
<td><?= $u['telefono'] ?></td>
<td><a href='?eliminar=<?= $u['id'] ?>'>Eliminar</a></td>
</tr>
<?php endwhile; ?>
</table>
<br><a href='dashboard.php'>Volver</a>
</body></html>