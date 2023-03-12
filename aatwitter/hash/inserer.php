<?php

require 'connection.php';

if($_POST['pseudo'] !='' && $_POST['password'] != '' && $_POST['image'] != ''){
  
    $data = [
        'image' => $_POST['image'],
        'pseudo' => $_POST['pseudo'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    
     ];

    $requete = $database->prepare('INSERT INTO users(image, pseudo, password) VALUES (:image, :pseudo, :password)');
    $requete->execute($data);

    if($requete){

        header ('Location: index.php');

    }else{
        echo 'Une erreure est survenue.';
    }  
    header('Location: ../index.php');

}
else{
    echo 'Veuillez remplir les champs.';
}

//var_dump($data)
?>