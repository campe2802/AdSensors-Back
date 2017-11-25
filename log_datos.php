<?php
include ("conexion.php");
       
$conexion = mysqli_connect($host,$user,$pw,$db) or die("problema al conectar el host");
//mysqli_select_db($db,$conexion) or die("problemas al conectar la bd");

//mysql_query("INSERT INTO arduinoEthernet (valor) VALUES ('$_GET[valor]')",$conexion);
mysqli_query($conexion,"INSERT INTO `logs`(`Temperatura`,`Humedad`) VALUES ('" . $_GET['valor'] . "','" . $_GET['humedad'] . "')");
 

?>