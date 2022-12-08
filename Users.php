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

  public function insertUsuario(string $name, string $lastname, string $email, string $password, string $date, string $address, string $avatar){

    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->date = $date;
    $this->address = $address;
    $this->avatar = $avatar;
    
    
    $sql= "INSERT INTO users( name, lastname, email, password, date_of_birth, address, avatar,active) VALUES (?,?,?,?,?,?,?,1)";

    $insert = $this->conexion->prepare($sql);
    $arrayData = array ($this->name, $this->lastname, $this->email,$this->password, $this->date, $this->address, $this->avatar);
    $insert->execute($arrayData);
  }
 }



?>