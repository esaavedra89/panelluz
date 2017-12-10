<?php

session_start();

session_destroy();
echo '<script>
alert("Ha salido correctamente");
</script>';
?>

<script language="JavaScript">
    location.href="login.php";
</script>
