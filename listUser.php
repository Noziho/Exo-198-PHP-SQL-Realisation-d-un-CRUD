<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/DB_Connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $stmt = DB_Connect::dbConnect()->prepare("
        SELECT * FROM eleves
    ");

    if ($stmt->execute()) {
        foreach ($stmt->fetchAll() as $value) {
            foreach ($value as $key => $student) {
                echo $key . " => " . $student ."<br>";
            }?>
            <a href="/delete_user.php">Supprimez l'élève</a>
            <a href="/update_user.php">Modifiez l'élève</a><?php
            echo "<hr>";
        }
    }
?>



</body>
</html>