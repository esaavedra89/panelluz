<?php
require"conexion.php";


$usuario = $mysqli->query("SELECT usuario, clave FROM usuario WHERE usuario = '".$_POST['usuario']."' AND clave = '".$_POST['clave']."'");

if($usuario->num_rows == 1):
    $datos = $usuario->fetch_assoc();
//Retorna un array asociativo correspondiente a la fila obtenida o NULL si no hubiera más filas.
//en este caso obtiene la respuesta, que es el correo
    echo json_encode(array('error' => false, 'tipo'=>$datos['usuario']));
else:
    echo json_encode(array('error' => true));
endif;

$mysqli->close();