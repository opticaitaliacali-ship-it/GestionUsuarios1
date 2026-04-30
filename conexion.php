<?php
$cn = new mysqli('mysql-opticaitalia.alwaysdata.net','opticaitalia','Samueldavid23','opticaitalia_usuarios_app');
if($cn->connect_error){ die('Error de conexión'); }
$cn->set_charset('utf8');
?>