<?php
include('../../Classes/user_transactions.php');
$user = new user();
$user->id = $_GET['userid'];
$user->delete();
?>
