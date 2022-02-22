<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/inscription.php" method="post">
    <label for="last_name">Nom: </label>
    <input type="text" id="last_name" name="last_name" minlength="3" maxlength="80">

    <label for="first_name">Prénom: </label>
    <input type="text" id="first_name" name="first_name" minlength="3" maxlength="50">

    <label for="age">Âge: </label>
    <input type="number"  id="age" name="age" max="120">

    <input type="submit" name="validate">
</form>

<a href="/listUser.php">Liste des élèves</a>

</body>
</html>