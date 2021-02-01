<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="test";

$conn =mysql_connect($dbhost,$dbuser, $dbpass, $dbname);

if(!$conn){
    die("No hay conexión" .mysql_connect_error());
}

$nombre = $_POST("txtusuario");
$pass = $_POST("txtpass");

$query = mysql_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass. "'");
$nr = mysql_num_rows($query);

if ($nr == 1){
//locacion+pagina.html
echo "bienvenido: " .$nombre;
}
else if ($nr == 0)
{
echo "no ingreso";
}
?>