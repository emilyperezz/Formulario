<?php

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


?>


<form action="index.php?modulo=dashboard" method="post">
  <table border="1" width="100%" cellspacing="0" cellpadding="5">
    
    <tr>
      <td colspan="2" ><h3>Formulario para Ingresar</h3> </td>
    </tr>
   <input type="hidden" name="nombres" id="" value="<?php echo $nombres?>">
  
   <input type="hidden" name="apellidos" id="" value="<?php echo $apellidos?>">
    <tr>
      <td width="200">Correo Electrónico:</td>
      <td><input type="text" name="correo_electronico" id="" value="<?php echo $correo_electronico?>"></td>
    </tr>
    <tr>
      <td>Clave de acceso:</td>
      <td><input type="password" name="clave" id="" value="<?php echo $clave?>" ></td>
    </tr>
    

<tr>
<td colspan="2" align="center"><input type="submit" value="Ingresar"> </td>
</tr>

</table>




</form>



