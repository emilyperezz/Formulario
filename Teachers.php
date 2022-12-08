<?php
require_once("autoload.php");

 class teachers extends Conexion {
  private $name;
  private $lastname;
  private $email;
  private $course;
  private $conexion;

  public function __construct(){
   $this->conexion= new Conexion();
   $this->conexion= $this->conexion->connect();
  }

  public function insertTeacher(string $name, string $lastname, string $email, string $course){

    $this->name = $name;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->course = $course;
    
    
    
    $sql= "INSERT INTO teachers( name, lastname, email, course) VALUES (?,?,?,?)";

    $insert = $this->conexion->prepare($sql);
    $arrayData = array ($this->name, $this->lastname, $this->email, $this->course);
    $insert->execute($arrayData);
  }
 }



?>