<?
  $servername = "localhost";
  $username = "username";
  $password = "password";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("No hay conexión con la base de datos " . $conn->connect_error);
  }

