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
  <td>No implementado</td>
</tr>
<tr>
  <td>No implementado</td>
</tr>
</table>
  <!-- FIN DE MENÚS -->
</td>
<td height="800" valign="top">
  <!-- INICIO CONTENEDOR PRINCIPAL -->

  <?php
  $modulo= $_GET['modulo'];
  if($modulo== "registrar"){
include("./modulos/registrar.php");
}else if($modulo== "ingresar"){
 include("./modulos/ingresar.php");
}

  ?>

  <!-- FIN DE CONTENEDOR PRINCIPAL -->
</td>

<tr>
</table>

</body>
</html>

