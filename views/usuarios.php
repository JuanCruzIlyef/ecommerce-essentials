<?php
//registro
required 'class/users/usuario.php';

$errors = []
if ($_POST){
  if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors ['email'] = 'El mail no es valido';
  if (empty($errors)) {
 $user = new User;
 $user -> setEmail($_POST['email']);
 $user -> setPassword($_POST['password']);

 $usuarios = get_users();
 $usuarios[] = $users;
 save_users($usuarios);

    redirect('login');
  }
}

?>
