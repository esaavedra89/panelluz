<?php
session_start();
?>
<?php
if (isset($_SESSION['k_username'])){

}else{
    echo '<script language="JavaScript">location.href="../inc/login.php";</script>';
}

?>

<div class="container principal">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center principal-titulo">Principal</h1>
        </div>
        <div class="col-lg-4">
            <div>
                <a class="nav-link js-scroll-trigger" ui-sref="inventario">Inventario</a>
            </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
    </div>
</div>
