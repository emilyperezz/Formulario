<?php
require_once("autoload.php");

 class users extends Conexion {
  private $name;
  private $lastname;
  private $email;
  private $password;
  private $date;
  private $address;
  private $avatar;
  private $active;
  private $conexion;

  public function __construct(){
   $this->conexion= new Conexion();
   $this->conexion= $this->conexion->connect();
  }

  public function insertUsuario(string $name, string $lastname, string $email, string $password, string $date, string $address, string $avatar, int $active){

    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->date = $date;
    $this->address = $address;
    $this->avatar = $avatar;
    $this->active = $active;

  
    
    $sql= "INSERT INTO users( name, lastname, email, password, date_of_birth, address, avatar,active) VALUES (?,?,?,?,?,?,?,?)";
    

    $insert = $this->conexion->prepare($sql);
    $arrayData = array ($this->name, $this->lastname, $this->email,$this->password, $this->date, $this->address, $this->avatar, $this->active);
    $insert->execute($arrayData);
   

    
    
  }
  public function getUsuarios()
  {
  $sql= "SELECT * FROM users";
  $execute=$this->conexion->query($sql);
  $request= $execute->fetchall(PDO::FETCH_ASSOC);
  return $request;
  }

  public function updateUser(int $id, string $name, string $lastname, string $email, string $password, string $date, string $address, string $avatar, int $active)
  {
    $this->id= $id;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->date = $date;
    $this->address = $address;
    $this->avatar = $avatar;
    $this->active = $active;

    $sql = "UPDATE users SET name=?, lastname=?, email=?, password=?, date_of_birth=?, address=?, avatar=?, active=? WHERE id = $id";
    $update= $this->conexion->prepare($sql);
    $arrayData = array ($this->name, $this->lastname, $this->email,$this->password, $this->date, $this->address, $this->avatar, $this->active);
    $resExecute= $update->execute($arrayData);
    dd($arrayData);
    return $resExecute;


  }
  public function getUser($id){
$sql= "SELECT * FROM users WHERE id=?";
$arrWhere= array($id);
$query= $this->conexion->prepare($sql);
$query->execute($arrWhere);
$request= $query->fetch(PDO::FETCH_ASSOC);
return $request;
  }

 public function deluser($id)
 {
  $sql= "DELETE FROM users WHERE id=?";
  $arrWhere= array($id);
  $delete= $this->conexion->prepare($sql);
  $del=$delete->execute($arrWhere);
  return $del; 

 
  }


 

 }


?>