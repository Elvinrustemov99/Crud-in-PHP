<?php require_once 'connect.php';

if (isset($_GET['delete'])){
	$del = $_GET['delete'];

	$delete = $db->prepare('DELETE FROM user_crud WHERE id=?');
	$delete->execute([
		$del
	]);
	header('Location:index.php');
}