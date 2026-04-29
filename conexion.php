<?php
$cn = new mysqli('localhost','root','','usuarios_app');
if($cn->connect_error){ die('Error de conexión'); }
$cn->set_charset('utf8');
?>