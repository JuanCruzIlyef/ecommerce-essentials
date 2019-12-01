<?php
function get_users(){
  $json = file_get_contents('users.json');
  return json_decode($json, true);
}

function save_users($data){
  $json = json_encode ($data, JSON_PRETTY_PRINT);
  file_put_contents('data/users.json', $json);
}
function redirect($action) {
  header("location:$action");
}


$errors = [];

if ($_POST){

  if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors ['email'] = 'El mail no es valido';
  }

  if (empty($errors)) {
    require 'class/users/Usuario.php';

    $usuario = new User($_POST["name"],$_POST["email"],$_POST["password"]);
    $usuarios = get_users();
    $usuarios[] = $usuario->JsonSerialize();

    save_users($usuarios);
    redirect('?views=login');
  }
}
 ?>
