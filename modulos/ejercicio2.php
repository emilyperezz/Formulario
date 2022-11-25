<?php

if(isset($_POST["nombre"])){;
$nombre=$_POST["nombre"];
}else{
  $nombre="";
}

if(isset($_POST["hijos"])){;
$hijos=$_POST["hijos"];
}else{
  $hijos="0";
}

if(isset($_POST["sueldo"])){
  $sueldo=$_POST["sueldo"];
}else{
$sueldo="0";
}

$float=(float) $hijos;
$float=(float) $sueldo;
$bono=($sueldo * 0.15);
$float=(float) $bono;
$prima=($hijos*0.3);
$float=(float) $prima;
$TotalAsignacciones=($bono+$prima);
$float=(float) $TotalAsignacciones;
$descuento=($sueldo*0.1);
$float=(float) $descuento;
$deduccion=($sueldo*0.18);
$float=(float) $deduccion;
$TotalDeducciones= ($descuento+$deduccion);
$float=(float) $TotalDeducciones;
$SueldoNeto= (($TotalAsignacciones+$sueldo)-$TotalDeducciones);
?>




<form action="index.php?modulo=ejercicio2" method="post">

<table border="1" callspacing="0" cellpadding="5">
<tr>
  <td colspan="2"><h2>Ejercicio 2</h2></td>
</tr>
<tr>
<td width="150">Nombres</td>
<td><input type="text" name="nombre" id=""></td>
</tr>
<tr>
  <td width="150">Número de Hijos</td>
  <td><input type="text" name="hijos" id=""></td>
</tr>
<tr>
  <td>Sueldo Básico</td>
  <td><input type="text" name="sueldo" id=""></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" value="Calcular"></td>
</tr>
</table>
</form>

<strong>Su nombre es: </strong><span><?php echo $nombre; ?></span>
<br>
<strong>Su total de asignaciones es de: </strong><span><?php echo $TotalAsignacciones; ?></span>
<br>
<strong>Su total de deducciones es de: </strong><span><?php echo $TotalDeducciones; ?></span>
<br>
<strong>Su sueldo neto es de: </strong><span><?php echo $SueldoNeto; ?></span>