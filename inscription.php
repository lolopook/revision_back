<?php
	try {
		$bdd = new PDO("mysql:host=localhost:3306;dbname=revision_themes_actus;charset=utf8", "root", "root");
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>inscription</title>
</head>
<body>
    
  <form action="./controller/create_user.php" method="post">
        <input type="text" placeholder="firstname" name="firstname">
        <input type="text" placeholder="lastname" name="lastname">
        <input type="mail" placeholder="mail" name="mail">
        <input type="text" placeholder="password" name="password">
        <button type="submit">Envoyer</button>
  </form>

</body>
</html>