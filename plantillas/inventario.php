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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1 class="text-center"><span class="icon-android">Inventario</h1>
<div ng-include=" '../plantillas/menu.php' "></div>
