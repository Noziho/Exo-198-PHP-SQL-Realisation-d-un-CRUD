<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/DB_Connect.php';

function add_student(string $nom, string $prenom, int $age)
{
    $sql = DB_Connect::dbConnect()->prepare("
        INSERT INTO eleves (nom, prenom, age)
        VALUES(:nom, :prenom, :age);
    ");

    $sql->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':age' => $age
    ]);

    echo "L'utilisateur à été ajouté.";
}

function read_eleves()
{
    $stmt = DB_Connect::dbConnect()->prepare("SELECT * FROM eleves");

    if ($stmt->execute()) {

        foreach ($stmt->fetchAll() as $value) {
            { ?>
                <div><?php
                foreach ($value as $key => $eleves) {
                    echo $key . "=>" . $eleves . "<br>";

                }
            } ?>
            </div><?php
        }
    }
}

function update_eleves ($prenom, $nom, $age, $idEleve) {
    $stmt = DB_Connect::dbConnect()->prepare("
        UPDATE eleves SET prenom = :prenom, nom = :nom, age = :age WHERE id = :id
    ");

    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':id', $idEleve);

    $stmt->execute();

    echo "Eleve mis à jour avec succès";
}

function delete_eleves ($idEleve) {
    $stmt = DB_Connect::dbConnect()->prepare("
        DELETE FROM eleves WHERE id = :id
    ");

    $stmt->bindParam(':id', $idEleve);

    $stmt->execute();

    echo "Eleve supprimé avec succès";

}
