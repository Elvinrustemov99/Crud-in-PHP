<?php

require_once 'connect.php';

$read = $db->prepare('SELECT * FROM user_crud');
$read->execute([]);
$row = $read->fetchAll(PDO::FETCH_ASSOC);