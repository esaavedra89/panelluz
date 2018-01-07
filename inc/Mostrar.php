<?php
$Articulos = $_POST["Articulos"];
$Comprados = $_POST["Comprados"];
$PrecioSI = $_POST["PrecioSI"];
$message="";
$Vendidos="";
$Disponibles="";
require("conexion.php");

$sql= mysqli_query($mysqli, "SELECT * FROM invent");
while($result = mysqli_fetch_array($sql)){
    $Id = $result['Id'];
    $Articulos = $result['Articulos'];
    $Comprados = $result['Comprados'];
    $PrecioSI = $result['PrecioSI'];

    $message .='
    <tr>
    <td>'. $Id .'</td>
    <td>'. $Articulos .'</td>
    <td>'. $Comprados .'</td>
    <td>'. $Disponibles .'</td>
    <td>'. $Vendidos .'</td>
    <td>'. $PrecioSI .'</td>
    </tr>
    ';
}

echo $message;