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

if (isset($_POST["curso"])){;
 $curso=$_POST["curso"];
}else{
  $curso="";
}

//y aqui es donde vas a crear la instancia
$teachers = new Teachers();

$teachers->insertTeacher($nombres, $apellidos, $correo_electronico,  $curso);


?>






<form action="index.php?modulo=registrarTeachers" method="post">

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
    <td> <input type="text" name="curso" id=""> </td>
  </tr>
 
  
    <td colspan="2" align="center"> <input type="submit" name="registrar"</td>



</form>