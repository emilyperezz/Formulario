<?php

if (isset($_POST["dolares"])){;
 $dolares=$_POST["dolares"];
}else{
  $dolares="0";
}

if (isset($_POST["euros"])){;
 $euros=$_POST["euros"];
}else{
  $euros="0";
}

if (isset($_POST["pesos"])){;
 $pesos=$_POST["pesos"];
}else{
  $pesos="0";
}

if (isset($_POST["TazaDolares"])){;
 $TazaDolares=$_POST["TazaDolares"];
}else{
  $TazaDolares="0";
}

if (isset($_POST["TazaEuros"])){;
 $TazaEuros=$_POST["TazaEuros"];
}else{
  $TazaEuros="0";
}

if (isset($_POST["TazaPesos"])){;
 $TazaPesos=$_POST["TazaPesos"];
}else{
  $TazaPesos="0";
}

$float=(float) $dolares;
$float=(float) $euros;
$float=(float) $pesos;
$float=(float) $TazaDolares;
$float=(float) $TazaEuros;
$float=(float) $TazaPesos;
$bs1=($dolares*$TazaDolares);
$float=(float) $bs1;
$bs2=($euros*$TazaEuros);
$float=(float) $bs2;
$bs3=($pesos*$TazaPesos);
$float=(float) $bs3;
$TotalBs=($bs1+$bs2+$bs3);
$float=(float) $TotalBs;
$Porcentaje1=($TotalBs*0.4);
$Porcentaje2=($TotalBs*0.6);
?>



<form action="index.php?modulo=ejercicio6" method="post">
<table border="1" callspacing="0" cellpadding="5">
<tr>
  <td colspan="2"><h2>Ejercicio 6</h2></td>
</tr>
<tr>
  <td width="200">Donaciones en dólares</td>
  <td><input type="text" name="dolares" id=""></td>
</tr>
<tr>
  <td width="150">Donaciones en euros </td>
  <td><input type="text" name="euros" id=""></td>
</tr>
<tr>
  <td width="150">Donaciones en pesos</td>
  <td><input type="text" name="pesos" id=""></td>
</tr>
<tr>
  <td width="150">Taza de dólares a bs</td>
  <td><input type="text" name="TazaDolares" id=""></td>
</tr>
<tr>
  <td width="150">Taza de euros a bs</td>
  <td><input type="text" name="TazaEuros" id=""></td>
</tr>
<tr>
  <td width="150">Taza de pesos a bs</td>
  <td><input type="text" name="TazaPesos" id=""></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" value="Calcular"></td>
</tr>
</table>


</form>

<strong>El total de donaciones en Bs es de: </strong><span><?php echo $TotalBs; ?></span>
<br>
<strong>Al comedor le correponde: </strong><span><?php echo $Porcentaje1; ?></span>
<br>
<strong>A gastos administrativos le corresponde: </strong><span><?php echo $Porcentaje2; ?></span>