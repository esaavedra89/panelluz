
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="j4PELN_hkfvW7Bwly759VEr-fAW7qfiJGKm6iRYvxFQ" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="es">
    <meta content='Panelluz' property='og:title'/>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logohdv2.png">
    <title>Panelluz Registro</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/full-slider.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">
    <!--Se añadio otro css-->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <style>
        *{
    font-family: Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
        }
        form{
    margin-top: 150px;
            position: relative;
            border: 1px solid #45d829;
            width: 350px;
            padding-top: 80px;
            padding-bottom: 40px;
            border-radius: 10px;
            /*fondo de formulario con opacidad*/
            background-color: rgba(217, 220, 210, 0.7);

        }

        /*Hacer que Imagen se adapte a pantalla*/
        body{
    background: url(../img/carousel/naturaled.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .img-responsive{
    width: 90px;
            margin-top: -60px;
            margin-bottom: 30px;
        }
        label{
    margin-top: 10px;
            font-weight: bold;
        }
        input:focus{
    border-color: #45d829;
        }
        button{
    margin-top: 15px;
            font-size: 16px !important;
            padding: 15px !important;

        }
        .swal-overlay {
    background-color: rgba(43, 165, 137, 0.45);
        }

    </style>
</head>
<body>
<!--<img src="../img/carousel/iluminacion_led_dimmable.jpg" class="figure-img">-->
<center>
    <form id="formulario" action="val.php" method="post">
        <div>
            <img src="../img/logohdv2.png" class="img-responsive">
        </div>
        <label>Usuario</label><br>
        <input type="text" name="usua" id="usuario" placeholder=" Usuario" size="20"><br>
        <label>Clave</label><br>
        <input type="password" name="pass" id="clave" placeholder=" Clave" size="20"><br>
        <button type="button" onclick="Regresar()" class="btn-xl">Regresar</button>
        <button type="submit"  class="btn-xl" >Ingresar</button><!--onclick="return ingreso()"-->
    </form>
</center>
<script>
    function ingreso() {
        var usuario = document.getElementById("usuario").value;
        var clave = document.getElementById("clave").value;

        if(usuario==="" || clave=== "" ){
            //alert("No debe dejar los campos en blanco!");
            swal("Advertencia!", "No debe dejar los campos en blanco!", "warning",
            {
                timer:2500
            });
            return false;
        }else if(usuario=="panelluz" && clave=="panelluz"){
            //alert("Excelente");
            swal("Buen trabajo!", "Pero aun no se configura el acceso", "success");
            setTimeout(function() {
            },4000);
            $('#formulario')[0].reset();
            location.href= " ../plantillas/main.php";
        }else {
            //alert("Error, clave invalidad");
            swal("Error!", "Usuario o clave invalidas!", "error",{
                timer:2500
            });
            return false;
        }
    }

    function Regresar() {
        location.href= "../index.html";
    }



</script>
<script type="text/javascript" src="../vendor/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>
<!--<script src="../js/in.js"></script>-->

</body>
</html>