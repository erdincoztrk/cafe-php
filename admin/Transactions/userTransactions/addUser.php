<?php
include('../../Classes/user_transactions.php');
$user = new user();

$name = $_POST['user_name'];
$surname = $_POST['user_surname'];
$mail = $_POST['user_mail'];
$gsm = $_POST['user_gsm'];
$username = $_POST['user_username'];
$password = $_POST['user_password'];
$authority = $_POST['user_authority'];


$user->name =  $name;
$user->surname =  $surname;
$user->mail =  $mail;
$user->gsm =  $gsm;
$user->username =  $username;
$user->password =  $password;
$user->authority =  $authority;
$user->insert();
?>
