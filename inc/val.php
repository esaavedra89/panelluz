<?php
session_start();

$usuar="Panelluz";
$usuario=$_POST['usua'];
$pass=$_POST['pass'];

    if($usuario=="" && $pass==""){
            echo '<script>alert("No deje campos vacios");</script>';
            echo '<script language="javascript">
location.href="login.php";
</script>';}
        else if($pass!='panelluz' || $usuario!='panelluz'){
            echo '<script>alert("Error, clave o usuario invalidos");</script>';
            echo '<script language="javascript">
                location.href="login.php";</script>';
        } else if($pass=='panelluz' && $usuario=='panelluz'){
            $_SESSION["k_username"]=$usuar;
            echo '<script>alert("Acceso Consedido");</script>';
            echo '<script>location.href= " ../plantillas/main.php";</script>';
        }


?>
