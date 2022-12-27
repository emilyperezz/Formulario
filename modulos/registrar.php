<?php
require_once("./autoload.php");

//Se reciben variables por Post

if (isset($_POST["nombres"])){
 $nombres=$_POST["nombres"];
}else{
  $nombres="";
}
 
if (isset($_POST["apellidos"])){
 $apellidos=$_POST["apellidos"];
}else{
  $apellidos="";
}

if (isset($_POST["correo_electronico"])){
  $correo_electronico=$_POST["correo_electronico"];
}else{
  $correo_electronico="";
}

if (isset($_POST["clave"])){
 $clave=$_POST["clave"];
}else{
  $clave="";
}

if (isset($_POST["date"])){
 $date=$_POST["date"];
}else{
  $date="";
}

$date = date('Y-m-d H:i:s',strtotime($date));


if (isset($_POST["address"])){
 $address=$_POST["address"];
}else{
  $address="";
}

if (isset($_POST["active"])){
  $active=($_POST["active"] == "on") ? 1 : 0;
}else{
 $active=0;
}

//$datetime=date('Y-m-d');


if (isset($_FILES["avatar"])){
   $avatar=$nombreImg = $_FILES['avatar']['name'];
    $ruta = $_FILES['avatar']['tmp_name'];
    $destino = "images/imagenes"."/".$datetime=date('Y-m-d').'-'.$nombreImg;
    move_uploaded_file($ruta,$destino);
  }
  
  
 if(isset($_POST["nombres"])){
   $users = new Users();

    $users->insertUsuario($nombres, $apellidos, $correo_electronico, $clave, $date, $address, $destino, $active);

    if(isset($_POST["submit"])){
      {

       echo "<script type=\"text/javascript\">alert(\"Usuario Registrado\");</script>";
        
        exit();
        header("Location: index.php");
      }
    }
  }
  
  



 ?>



<form action="index.php?modulo=registrar" method="post" enctype="multipart/form-data">
  
  <table border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td colspan="2" ><h3>Formulario de Registro</h3></td>
  </tr>
  <tr>
    <td width="150">Nombres:</td>
    <td> <input type="text" name="nombres" id=""  autocomplete="name" required> </td>
  </tr>
  <tr>
    <td width="150">Apellidos:</td>
    <td> <input type="text" name="apellidos" id="" autocomplete="apellidos" required> </td>
  </tr>
  <tr>
    <td width="150">Correo Electrónico:</td>
    <td> <input type="email" name="correo_electronico" size="30" id="" autocomplete="correo_electronico" required> </td>
  </tr>
  <tr>
    <td width="150">Clave de acceso:</td>
    <td> <input type="password" name="clave" id="" autocomplete="clave" required> </td>
  </tr>
  <tr>
    <td width="150">Fecha de nacimiento:</td>
    <td> <input type="date"  name="date" id="" autocomplete="date" required> </td>
  </tr>
  <tr>
    <td width="150">Dirección:</td>
    <td> <input type="text" name="address" id="" autocomplete="address" required> </td>
  </tr>
  <tr>
    <td width="150">Avatar:</td>
    <td> <input type="file" name="avatar" id="" autocomplete="avatar" required> </td>
  </tr>
  <tr>
    <td width="150">Active:</td>
    <td><input type="checkbox" name="active" id=""> </td>
  </tr>
  <tr>
    <td colspan="2" align="center"> <input type="submit" name="submit" value="Registrar"></td>
    
    
</form>




</tr>
</table>
