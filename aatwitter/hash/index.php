<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserer.php" method="POST" enctype="multipart/form-data">

        <label for="image">Image:</label>
        <input type="text" name="image" id="image">

        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">


        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password">

            <input type="submit" value="Envoyer">

    </form>
</body>
</html>