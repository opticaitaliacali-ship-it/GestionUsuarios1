<?php
session_start();
if(isset($_SESSION['admin'])) header('Location: dashboard.php');
?>
<!DOCTYPE html>
<html><head><meta charset='utf-8'><title>Login</title></head>
<body>
<form method='post' action='dashboard.php'>
<h2>Login</h2>
<input name='usuario' placeholder='Usuario'><br>
<input type='password' name='clave' placeholder='Clave'><br>
<button type='submit'>Ingresar</button>
</form>
</body></html>