<?php
class User implements JsonSerializable
{
  private $name;
  private $mail;
  private $password;
  private $avatar;

  public function __construct($name, $mail, $password){
  $this->name = $name;
  $this->mail = $mail;
  $this->password = $this->encriptarPass($password);
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

public function JsonSerialize(){
  return [
    'name'=>$this ->name,
    'email'=>$this ->mail,
    'password'=>$this ->password
  ];
}

}

?>
