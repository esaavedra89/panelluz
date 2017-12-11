<?php
session_start();

$usuar="Panelluz";
$pass2="160917++";
$usuario=$_POST['usua'];
$pass=$_POST['pass'];

    if($usuario=="" && $pass==""){
            echo '<script>alert("No deje campos vacios");</script>';
            echo '<script language="javascript">
location.href="login.php";
</script>';}
        else if($pass!=$pass2 || $usuario!=$usuar){
            echo '<script>alert("Error, clave o usuario invalidos");</script>';
            echo '<script language="javascript">
                location.href="login.php";</script>';
        } else if($pass==$pass2 && $usuario==$usuar){
            $_SESSION["k_username"]=$usuar;
            echo '<script>alert("Acceso Consedido");</script>';
            echo '<script>location.href= " ../plantillas/main.php";</script>';
        }
?>
