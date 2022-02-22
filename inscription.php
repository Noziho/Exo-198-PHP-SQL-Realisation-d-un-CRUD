<?php
require __DIR__ . '/functionForm.php';
require __DIR__ . '/functionEleves.php';

if (!dataIsset('first_name', 'last_name', 'age', 'validate')) {
    header("Location: /404.php");
    exit();
}

add_student($_POST['last_name'],$_POST['first_name'], $_POST['age'] );

header("Location: /index.php");