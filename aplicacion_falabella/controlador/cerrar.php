<?
@session_start();
session_destroy();
header("Location: http://localhost/aplicacion_falabella/aplicacion_falabella/index.php");