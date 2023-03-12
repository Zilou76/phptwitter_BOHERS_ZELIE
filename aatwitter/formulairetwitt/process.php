<?php

require '../hash/connection.php';

$data = [

    "message" => $_POST['message'],
    "date" => date('Y-m-d H:i:s')
];

$requete = $database->prepare('INSERT INTO articles(message, date) VALUES (:message, :date)');
$requete->execute($data);

header('Location: ../index.php');
        

?>