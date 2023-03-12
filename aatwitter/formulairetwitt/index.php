<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST"> <!-- POST au lieu de GET permet de cacher les infos dans l'url-->
        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">
        
        <!--<button type="submit">Envoyer</button>-->
    </form>
</body>
</html>