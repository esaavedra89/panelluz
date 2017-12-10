<?php
session_start();
?>
<?php
if (isset($_SESSION['k_username'])){

}else{
    echo '<script language="JavaScript">
location.href="../inc/login.php";
</script>';
}

?>

<nav class="navbar navbar-expand-lg  fixed-top" id="mainNav">
    <div class="container-fluid">
        <img src="../img/logohdv2.png" class="img-responsive" alt="Panelluz" width="60">
        <a class="navbar-brand js-scroll-trigger" href="#top">Panelluz-Admin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger active" ui-sref="principal">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" ui-sref="inventario">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" ui-sref="proveedores">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" ui-sref="calendario">Calendario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" ui-sref="archivos">Archivos</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger" ui-sref="fichaTecnica">Ficha Tecnica</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger" ui-sref="deudas">Deudas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link js-scroll-trigger" href="../inc/salir.php">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
