<?php

require_once 'connect.php';

if (isset($_GET['update'])) {
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		$update = $db->prepare('UPDATE user_crud SET 
		username = ?,
    email = ?,
    phone = ?,
    password = ?                 
		WHERE id=?');

		$update->execute([
			$username, $email, $phone, $password, $_GET['update']
		]);
		header('Location:index.php');
	}

	$update_visi = $db->prepare('SELECT * FROM user_crud');
	$update_visi->execute([]);
	$visi = $update_visi->fetch(PDO::FETCH_ASSOC);
}
