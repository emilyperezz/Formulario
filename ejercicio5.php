<?php
if (isset($_POST["distancia"])){;
 $distancia=$_POST["distancia"];
}else{
  $distancia="0";
}

if (isset($_POST["tiempo"])){;
 $tiempo=$_POST["tiempo"];
}else{
  $tiempo="0";
}

$float= (float)$distancia;
$float= (float)$tiempo;
$km=($distancia/1000);
$minutos=($tiempo * 60);

?>


<form action="/tutorial/Ejercicio5.php" method="post">
<table border="1" callspacing="0" cellpadding="5">
<tr>
  <td colspan="2"><h2>Ejercicio 5</h2></td>
</tr>
<tr>
  <td width="200">Distancia recorrida en metros</td>
  <td><input type="text" name="distancia" id=""></td>
</tr>
<tr>
  <td width="150">Tiempo en horas</td>
  <td><input type="text" name="tiempo" id=""></td>
</tr>
<tr>
  <td colspan="2" align="center"> <input type="submit" value="Calcular"> </td>
</tr>
</table>
</form>

<strong>La velocidad en km/min es: </strong><span><?php echo $km;?></span>
<strong>/</strong><span><?php echo $minutos; ?></span>
