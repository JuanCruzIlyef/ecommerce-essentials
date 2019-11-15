<?php
class Usuario {
  private $nombre;
  private $mail;
  private $password;
  private $avatar;

  public function __constructor($nombreUsuario, $mailUsuario, $contraseñaUsuarieruo, $avatarUsuario){
  $this->nombre = $nombreUsuario;
  $this->mail = $mailUsuario;
  $this->contraseña = $contraseñaUsuario;
  $this->avatar = $avatarUsuarios;
}

public function getNombre(){
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
