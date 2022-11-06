<?php

try {
	$db = new PDO('mysql:host=localhost;dbname=crud1', 'root', '');
} catch (PDOException $error) {
	echo $error->getMessage();
}