<?php
// Connection base de données //

$pdo = new PDO('mysql:dbname=human-heart;host=localhost', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Erreurs SQL transformé en erreurs PHP
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // Mode de récupération