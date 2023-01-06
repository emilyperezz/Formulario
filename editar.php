<?php
 require_once("./autoload.php");

  $objUsuario = new Users();
  
  $users=$objUsuario->getUsuarios();
  //print_r($users);
  
  $UpdateUser=$objUsuario->getUser(1);
  
  if(isset($_POST["submit"])){
    $objUsuario-> updateUser($users);
    if(isset($_POST["submit"])){
      {
    
       echo "<script type=\"text/javascript\">alert(\"Usuario Actualizado\");</script>";
        
        exit();
        header("Location: index.php");
      }
    }
  }


//$objUsuario = new Users();


  

?>
        
        <?php foreach($users as $user){ ?>
        <form method="post" enctype="multipart/form-data">
          
          <table border="1" cellspacing="0" cellpadding="5">
            <tr>
              <td colspan="2" ><h3>Formulario de Registro</h3></td>
            </tr>
            <tr>
    <td width="150">Nombres:</td>
    <td> <input type="text" name="name" id="" value="<?php echo $user["name"] ?>" autocomplete="name" required> </td>
  </tr>
  <tr>
    <td width="150">Apellidos:</td>
    <td> <input type="text" name="lastname" value="<?php echo $user["lastname"] ?>" id="" autocomplete="apellidos" required> </td>
  </tr>
  <tr>
    <td width="150">Correo Electrónico:</td>
    <td> <input type="email" name="email" size="30" id="" value="<?php echo $user["email"] ?>" autocomplete="correo_electronico" required> </td>
  </tr>
  <tr>
    <td width="150">Clave de acceso:</td>
    <td> <input type="password" name="password" id="" value="<?php echo $user["password"] ?>" autocomplete="clave" required> </td>
  </tr>
  <tr>
    <td width="150">Fecha de nacimiento:</td>
    <td> <input type="date"  name="date_of_birth" id="" value="<?php echo $user["date_of_birth"] ?>" autocomplete="date" required> </td>
  </tr>
  <tr>
    <td width="150">Dirección:</td>
    <td> <input type="text" name="address" id="" value="<?php echo $user["address"] ?>" autocomplete="address" required> </td>
  </tr>
  <tr>
    <td width="150">Avatar:</td>
    <td> <input type="file" name="avatar" value="<img src="<?php echo $user["avatar"]?> alt="img" width="50" height="50" id="" autocomplete="avatar" required> </td>
  </tr>
  <tr>
    <td width="150">Active:</td>
    <td><input type="checkbox" name="active" value="<?php 
              if ($user["active"] == 1) echo "si";
              else echo "no";
            ?>" id=""> </td>
  </tr>
  <tr>
    <td colspan="2" align="center"> <input type="submit" name="submit" value="Actualizar"></td>
    
    
  </form>
  
  
  
  
</tr>
</table>
<?php }?>