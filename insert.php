<?php require_once 'connect.php';

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  
  $insert = $db->prepare('INSERT INTO user_crud SET
			username = ?,
			email = ?,
		  phone = ?,
			password = ?');
  
  $insert->execute([$username, $email, $phone, $password]);
  header('Location:index.php');
}