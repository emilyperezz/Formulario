<?php
if (isset($_POST["distancia"])){;
 $distancia=$_POST["distancia"];
}else{
  $distancia="0";
}


$float= (float)$distancia;
$h=((2*60)/1);
$float=(float)$h;
$min=($h+25);
$float= (float)$min;
$km=($distancia/1000);
$float=(float)$km;
$distancia2=((1*$distancia)/1000);
$float=(float)$distancia2;
$velocidad=($distancia2*$min);
?>


<form action="index.php?modulo=ejercicio5" method="post">
<table border="1" callspacing="0" cellpadding="5">
<tr>
  <td colspan="2"><h2>Ejercicio 5</h2></td>
</tr>
<tr>
  <td width="200">Distancia recorrida en metros</td>
  <td><input type="text" name="distancia" id=""></td>
</tr>
<tr>
  <td colspan="2" align="center"> <input type="submit" value="Calcular"> </td>
</tr>
</table>
</form>

<strong>La velocidad en km/min es: </strong><span><?php echo $km;?></span>

