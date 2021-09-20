<?
require '../modelo/conexion.php';


$email = $_POST["email"];
$clave = $_POST["clave"];

mysqli_select_db ($conn,"aplicacion");
$query = 'SELECT NOMBRES, APELLIDOS FROM USUARIOS WHERE EMAIL ="'.$email.'" AND CLAVE="'.$clave.'";';
$result = mysqli_query($conn, $query); 
$rowCount = mysqli_num_rows($result);
if ($rowCount==0)
{
  echo "0";
}
else
{
  session_start();
  echo "1";
  if ($result) 
  {
    while ($fila = $result->fetch_row()) 
    {
        $_SESSION["nombres"]=$fila["nombres"];
        $_SESSION["apellidos"]=$fila["apellidos"];
    }
    $resultado->close();
  }
}

