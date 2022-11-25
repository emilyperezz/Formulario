<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial de página Web</title>

 <link rel="stylesheet" href="estilos.css">

</head>
<body>

  <table border="0" width="100%">
<tr> 
<td colspan="2" height="90" bgcolor="#EFEFEF" ><div id="TituloPagina" >Tutorial de Página Web</div></td>
</tr>
<tr>
  <td colspan="2" height="10"></td>
</tr>

<td width="200" valign="top">
  <!-- INICIO DE MENÚS -->
<table width="100%" border="1" cellspacing="0" cellpadding="5">
<tr>
  <td><a href="index.php">Principal</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=registrar">Registrar</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ingresar">Ingresar</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=dashboard">Dashboard</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio1">Ejercicio 1</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio2">Ejercicio 2</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio3">Ejercicio 3</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio4">Ejercicio 4</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio5">Ejercicio 5</a></td>
</tr>
<tr>
  <td><a href="index.php?modulo=ejercicio6">Ejercicio 6</a></td>
</tr>
</table>
  <!-- FIN DE MENÚS -->
</td>
<td height="800" valign="top">
  <!-- INICIO CONTENEDOR PRINCIPAL -->

  <?php

  
if(isset($_GET["modulo"])){
  $modulo=$_GET["modulo"];
}else{
  $modulo="";
}
  if($modulo== "registrar"){
include("./modulos/registrar.php");
}else if($modulo== "ingresar"){
 include("./modulos/ingresar.php");
}else if($modulo== "dashboard"){
 include("./modulos/dashboard.php");
}else if($modulo== "ejercicio1"){
 include("./modulos/ejercicio1.php");
}else if($modulo== "ejercicio2"){
 include("./modulos/ejercicio2.php");
}else if($modulo== "ejercicio3"){
 include("./modulos/ejercicio3.php");
}else if($modulo== "ejercicio4"){
 include("./modulos/ejercicio4.php");
}else if($modulo== "ejercicio5"){
 include("./modulos/ejercicio5.php");
}else if($modulo== "ejercicio6"){
 include("./modulos/ejercicio6.php");
}

  ?>

  <!-- FIN DE CONTENEDOR PRINCIPAL -->
</td>

<tr>
</table>

</body>
</html>

