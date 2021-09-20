<?
  require '../modelo/conexion.php';


  $email = $_POST["email"];
  $clave = $_POST["clave"];
  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];

  mysqli_select_db ($conn,"aplicacion");
  $query = 'INSERT INTO USUARIOS (`NOMBRES`, `APELLIDOS`, `EMAIL`,`CLAVE`) VALUES ("'.$nombres.'","'.$apellidos.'","'.$email.'","'.$clave.'")';
  $result = mysqli_query($conn, $query); 
  session_start();
  $_SESSION["nombres"]=$nombres;
  $_SESSION["apellidos"]=$apellidos;
  echo "1";
