
  <?php

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
  
  ?>

<strong>Nombre:</strong><span><?php echo $nombres; ?></span>
<hr>
<strong>Apellidos:</strong><span><?php echo $apellidos; ?></span>
<hr>
<strong>Correo Electrónico:</strong><span><?php echo $correo_electronico; ?></span>
<hr>
<strong>Clave:</strong><span><?php echo $clave; ?></span>

  
  
  
  