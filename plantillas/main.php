<?php
session_start();
?>
<?php
if (isset($_SESSION['k_username'])){
    //echo 'Bienvenido '.$_SESSION['k_username'];
    //echo '<p><a href="../inc/login.php">Salir</a></p>';
}else{
    echo '<script language="JavaScript">
location.href="../inc/login.php";
</script>';
}

require("../inc/conexion.php");
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="panelluz">
<head>
    <meta charset="UTF-8">
    <title>Panelluz | Principal</title>
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logohdv2.png">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link href="../css/agency.min.css" rel="stylesheet">
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../css/estilos.css" rel="stylesheet">
    <link href="../css/plantillas.css" rel="stylesheet">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/angular.min.js"></script>
    <script src="//unpkg.com/@uirouter/angularjs/release/angular-ui-router.min.js"></script>
</head>
<body id="top">
<div class="container-fluid">
    <div ng-include=" '../plantillas/menu.php' "></div>
    <div class="container">
        <!--<div ng-include=" 'plantillas/formCompra.html' "></div>-->
        <div ui-view></div>
    </div>
</div>
<!--------------------------------------------------------------------->
<!--->
<!--->
<!--->
<!--->
<!--->
<!--->
<!--->
<div ng-include=" '../plantillas/footer.php' "></div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/funcAngular.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>