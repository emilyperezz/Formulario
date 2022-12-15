<?php
require_once("./autoload.php");


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

if(isset($_POST["nombres"])){
$teachers = new Teachers();

$teachers->insertTeacher($nombres, $apellidos, $correo_electronico,  $curso);

    if(isset($_POST["submit"])){
    
    

    echo "<script type=\"text/javascript\">alert(\"Profesor Registrado\");</script>";

    }
    exit();
    header("Location: index.php?=registrar");
  }
?>






<form action="index.php?modulo=registrarProfesores" method="post">

<table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" ><h3>Formulario de Registro</h3></td>
  </tr>
  <tr>
    <td width="150">Nombres:</td>
    <td> <input type="text" name="nombres" id="" autocomplete="nombres" required> </td>
  </tr>
  <tr>
    <td width="150">Apellidos:</td>
    <td> <input type="text" name="apellidos" id="" autocomplete="apellidos" required></td>
  </tr>
  <tr>
    <td width="150">Correo Electrónico:</td>
    <td> <input type="email" name="correo_electronico" size="30" id="" autocomplete="correo_electronico" required> </td>
  </tr>
  <tr>
    <td width="150">Materia:</td>
    <td> <input type="text" name="curso" id="" autocomplete="materia" required> </td>
  </tr>
 
  
    <td colspan="2" align="center"> <input type="submit" name="submit" value="Registrar"></td>



</form>