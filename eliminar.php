<?php
require_once("./autoload.php");

$id=$_GET["id"];

/*echo "<script type=\"text/javascript\">alert(\"Usuario Eliminado\");</script>";
exit();*/
        header("Location: index.php");
$objUsuario = new Users();
$delete= $objUsuario->deluser($id);
echo($delete);
?>