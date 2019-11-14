<?php
class usuario {
  private $nombre;
  private $mail;
  private $contraseña;
  private $avatar;

  public function__constructor($nombreUsuario, $mailUsuario, $contraseñaUsuarieruo, $avatarUsuario){
  $this-> nombre = $nombreUsuario;
  $this-> mail = $mailUsuario;
  $this-> contraseña = $contraseñaUsuario;
  $this-> avatar = $avatarUsuarios;
}

public function getNombre(){
  return $this->nombre;
}

public function getMail(){
  return $this->mail;
}

public function getContraseña(){
  return $this->contraseña;
}

public function getAvatar(){
  return $this->avatar;
}
public function setNombre($nombre){
 $this->nombre = $nombre;
}

public function setMail($mail){
  $this->mail = $mail;
}
public function setPass($contraseña){
  $this->pass =$this->encriptarPass($contraseña);
}
private function encriptarPass($contraseña){
  return password_hash($contraseña, PASSWORD_DEFAULT);
}
public function setAvatar($avatar){
  $this->avatar = $avatar;
}
}
 ?>
