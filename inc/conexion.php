<?php
$host = "149.56.26.168";
$user = "panelluz_admin";
$pass = "@g}9h-Hh(vs9";
$db = "panelluz_ingreso";

$mysqli = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($mysqli,"utf8");

if($mysqli){
    echo "<p class='text-center text-success font-weight-bold'>Connect with Database</p>";
}else{
    echo "<p class='text-center text-danger font-weight-bold'>No connection with Database</p>";
}