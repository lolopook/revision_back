<?php

    $dsn = 'mysql:dbname=revision_themes_actus;host=localhost:3306';
    $user = 'root';
    $password = 'root';

    try {
        $bdd = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

    function generateRandomString($length = 64) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if (!empty($_POST)){

        $req = $database->prepare("INSERT INTO users (id, firstname, lastname, mail, password, user_ref ) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        $req->execute(
            array(
                htmlspecialchars($_POST["firstname"]),
                htmlspecialchars($_POST["lastname"]),
                htmlspecialchars($_POST["mail"]),
                password_hash($_POST["password"],PASSWORD_BCRYPT),
                generateRandomString(),
                )
            );
            header("Location: ../index.php");

    } else {
        echo "Bug";
    }
?>