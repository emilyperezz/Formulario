<?php

if (isset($_POST["acres"])){;
 $acres=$_POST["acres"];
}else{
  $acres="0";
}

if (isset($_POST["precio"])){;
 $precio=$_POST["precio"];
}else{
  $precio="0";
}


$int=  (int)$acres;
$mtrs2= ($acres*4047);
$float=  (float)$mtrs2;
$hectarea= ($mtrs2/10000);
$float=  (float)$hectarea;
$preciototal=($precio* $hectarea);
?>

<form action="/tutorial/Ejercicio4.php" method="post">
<table border="1" callspacing="0"cellpadding="5">
<tr>
<td colspan="2"><h2>Ejercicio 1</h2></td>
</tr>
<tr>
  <td width="150">Número de acres:</td>
  <td> <input type="text" name="acres" id=""> </td>
</tr>
<tr>
  <td width="150">Precio por Hectárea:</td>
  <td> <input type="text" name="precio" id=""> </td>
</tr>
<tr>
    <td colspan="2" align="center"> <input type="submit" value="Calcular"> </td>
</tr>
</table>
</form>


<strong>Número de hectareas: </strong><span><?php echo $hectarea; ?></span>
<strong>Precio de la estancia: </strong><span><?php echo $preciototal; ?></span>



