
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <button><a href="index.php">Retour page d'acceuil</a></button>
    </nav>
<?php

require_once 'hash/connection.php';
//var_dump($_GET['recherche']);


if($_GET['recherche']){
    $data = [
        "recherche" => $_GET['recherche']
    ];

    $requete = $database->prepare("SELECT * FROM articles WHERE message LIKE CONCAT('%',:recherche,'%')");
    $requete->execute($data);

    $articles = $requete->fetchAll(PDO::FETCH_ASSOC);

    
$requete2=$database->prepare('SELECT * FROM users LIMIT 1');
$requete2->execute();
$users=$requete2 -> fetchAll(PDO::FETCH_ASSOC);

//var_dump($articles);

    if($articles == null){
        echo 'Pas de data correspondant à votre recherche';
    }else{
        foreach($articles as $article){?>
            <div class="boite">
        
                <div>
                <p><?php echo $users[0]['pseudo']?></p>
                <img src="<?php echo $users[0]['image'];?>" alt="" >
                </div>
                <p> <?php echo $article['message'];?></p>
                <span ><?php echo $article['date'];?></span>
                <div>
                <a href="hash/supprimer.php?id=<?php echo $article['id']; ?>">Supprimer</a>
                </div>
            </div>

    <?php
        }
    }

 
}else{
        echo 'Veuillez remplir le champ de recherche';
    
    }

//header('Location: index.php');
?>
</body>
</html>
