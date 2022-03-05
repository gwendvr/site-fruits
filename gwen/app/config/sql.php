<?php 

try {
    $db = new PDO(
        'mysql:host=db;dbname=evaluation_php;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch(Exception $e){
    die('Erreur : '. $e->getMessage());
}

?>