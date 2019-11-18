<?php
class Usuario {
  private $name;
  private $mail;
  private $password;
  private $avatar;

  public function __construct($nameUsuario, $mailUsuario, $passwordUsuario, $avatarUsuario){
  $this-> name = $nameUsuario;
  $this-> mail = $mailUsuario;
  $this-> contraseña = $passwordUsuario;
  $this-> avatar = $avatarUsuario;
}

public function getName(){
  return $this->name;
}

public function getMail(){
  return $this->mail;
}

public function getPassword(){
  return $this->password;
}

public function getAvatar(){
  return $this->avatar;
}
public function setName($name){
 $this->name = $name;
}

public function setMail($mail){
  $this->mail = $mail;
}
public function setPass($password){
  $this->pass =$this->encriptarPass($password);
}
private function encriptarPass($password){
  return password_hash($password, PASSWORD_DEFAULT);
}
public function setAvatar($avatar){
  $this->avatar = $avatar;
}
}
 ?>
