<?php
require_once("./autoload.php");

//AQUI VAS A RECIBIR LAS VARIABLES POR POST
if (isset($_POST["nombres"])){;
 $nombres=$_POST["nombres"];
}else{
  $nombres="";
}

if (isset($_POST["apellidos"])){;
 $apellidos=$_POST["apellidos"];
}else{
  $apellidos="";
}

if (isset($_POST["correo_electronico"])){;
  $correo_electronico=$_POST["correo_electronico"];
}else{
  $correo_electronico="";
}

if (isset($_POST["clave"])){;
 $clave=$_POST["clave"];
}else{
  $clave="";
}

if (isset($_POST["date"])){;
 $date=$_POST["date"];
}else{
  $date="";
}
//$date = $fecha_hora_actual = date('Y-m-d H:i:s');

$date = date('Y-m-d H:i:s',strtotime($date));


if (isset($_POST["address"])){;
 $address=$_POST["address"];
}else{
  $address="";
}

if (isset($_POST["avatar"])){;
  $avatar=$_POST["avatar"];
}else{
  $avatar="";
}

//y aqui es donde vas a crear la instancia
$users = new Users();

$users->insertUsuario($nombres, $apellidos, $correo_electronico, $clave, $date, $address, $avatar);

?>

<form action="index.php?modulo=registrar" method="post">

<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" ><h3>Formulario de Registro</h3></td>
  </tr>
  <tr>
    <td width="150">Nombres:</td>
    <td> <input type="text" name="nombres" id=""> </td>
  </tr>
  <tr>
    <td width="150">Apellidos:</td>
    <td> <input type="text" name="apellidos" id=""> </td>
  </tr>
  <tr>
    <td width="150">Correo Electrónico:</td>
    <td> <input type="text" name="correo_electronico" size="30" id=""> </td>
  </tr>
  <tr>
    <td width="150">Clave de acceso:</td>
    <td> <input type="password" name="clave" id=""> </td>
  </tr>
    <tr>
    <td width="150">Fecha de nacimiento:</td>
    <td> <input type="date"  name="date" id=""> </td>
  </tr>
    <tr>
    <td width="150">Dirección:</td>
    <td> <input type="text" name="address" id=""> </td>
  </tr>
    <tr>
    <td width="150">Avatar:</td>
    <td> <input type="text" name="avatar" id=""> </td>
  </tr>
  <tr>
    <td colspan="2" align="center"> <input type="submit" name="registrar"</td>



</form>




</tr>
</table>
