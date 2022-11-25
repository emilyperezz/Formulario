<?php

if (isset($_POST["DimensionA"])){;
 $DimensionA=$_POST["DimensionA"];
}else{
  $DimensionA="0";
}

if (isset($_POST["DimensionB"])){;
 $DimensionB=$_POST["DimensionB"];
}else{
  $DimensionB="0";
}

if (isset($_POST["DimensionC"])){;
 $DimensionC=$_POST["DimensionC"];
}else{
  $DimensionC="0";
}



$float=(float) $DimensionA;
$float=(float) $DimensionB;
$float=(float) $DimensionC;
$D=($DimensionB-$DimensionA);
$float=(float)$D;
$X=($D-$DimensionC);
$float=(float) $X;
$aT=(($D*$X)/2);
$float=(float)$aT;
$aC=($D*$X);
?>




<form action="index.php?modulo=ejercicio1" method="post">
<table border="1" callspacing="0" cellpadding="5" >
  <tr>
    <td colspan="2"><h2>Ejercicio 1</h2></td>
  </tr>
  <tr>
    <td width="150">Dimensión A</td>
  <td><input type="text" name="DimensionA" id=""></td>
    </tr>
    <tr>
  <td width="150">Dimensión B</td>
  <td><input type="text" name="DimensionB" id=""></td>
</tr>
<tr>
  <td width="150">Dimensión C</td>
  <td><input type="text" name="DimensionC" id=""></td>
</tr>

<tr>
    <td colspan="2" align="center"> <input type="submit" value="Calcular"> </td>
</tr>
</table>
</form>

<strong>El área de sembradío es igual a : </strong><span><?php echo $aC; ?></span>
<br>
<strong>El área del terreno libre es igual a : </strong><span><?php echo $aT; ?></span>
