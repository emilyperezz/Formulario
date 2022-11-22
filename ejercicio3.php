<?php

if (isset($_POST["largo"])){;
 $largo=$_POST["largo"];
}else{
  $largo="0";
}

if (isset($_POST["ancho"])){;
 $ancho=$_POST["ancho"];
}else{
  $ancho="0";
}


$float =  (float)$largo;
$float =  (float)$ancho;
$terreno=($largo * $ancho);
$float= (float)$terreno;
$totalplantas=(3/4* $terreno);
?>

<form action="/tutorial/Ejercicio3.php" method="post">
<table border="1" callspacing="0"cellpadding="5">
<tr>
<td colspan="2"><h2>Ejercicio 2</h2></td>
</tr>
<tr>
  <td width="150">Largo del terreno:</td>
  <td> <input type="text" name="largo" id=""> </td>
</tr>
<tr>
  <td width="150">Ancho del terreno:</td>
  <td> <input type="text" name="ancho" id=""> </td>
</tr>
<tr>
    <td colspan="2" align="center"> <input type="submit" value="Calcular"> </td>
</tr>
</table>
</form>

<strong>El numero de plantas es igual a: </strong><span><?php echo $totalplantas; ?></span>
<strong>La longitud de la malla es de: </strong><span><?php echo $terreno; ?></span>
