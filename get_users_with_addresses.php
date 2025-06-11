<?php

require 'connexion.php';

$query = $db->prepare('SELECT users.first_name, users.last_name, address.*
FROM users JOIN address ON users.address = address.id');

$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($user)

?>