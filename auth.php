<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=tasks;","root", "");

$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo -> prepare($sql);
$statement -> execute(['email' => $email]);
$user = $statement -> fetch(PDO::FETCH_ASSOC);

if(empty($user)){
  $_SESSION['error'] = "Неправильный логин или пароль";
  header("Location: /auth_form.php");
  exit;
}
if(!password_verify($password, $user['password'])){
  $_SESSION['error'] = "Неправильный логин или пароль";
  header("Location: /auth_form.php");
  exit;
}

$_SESSION['user'] = ["email" => $user['email'], "id" => $user['id']];
header("Location: /index.php")
?>
