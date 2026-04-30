<?php
session_start();
include 'conexion.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave   = $_POST['clave'];

    $stmt = $cn->prepare("SELECT * FROM admins WHERE usuario=? AND clave=?");
    $stmt->bind_param("ss", $usuario, $clave);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows > 0) {
        $_SESSION['admin'] = $usuario;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>
<h2>Ingreso al Sistema</h2>

<?php if($error) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
    <input name="usuario" placeholder="Usuario" required><br><br>
    <input type="password" name="clave" placeholder="Contraseña" required><br><br>
    <button type="submit">Ingresar</button>
</form>
</body>
</html>