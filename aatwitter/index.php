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
        <a href="hash/index.php">Inscription</a>
        <a href="formulairetwitt/index.php">Nouveau post</a>

    <form action="rechercher.php" method ="GET">
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value ="Envoyer">
    </form>

    </nav>

    <?php

require_once 'hash/connection.php';

$requete=$database->prepare('SELECT * FROM articles ORDER BY date DESC');
$requete->execute();

$articles=$requete -> fetchAll(PDO::FETCH_ASSOC);

$requete2=$database->prepare('SELECT * FROM users LIMIT 1');
$requete2->execute();
$users=$requete2 -> fetchAll(PDO::FETCH_ASSOC);

foreach($articles as $article){
    ?>
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

?>

</body>
</html>