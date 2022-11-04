<?php 
    // on récupère la page actuel. 
    if ( isset( $_GET['pg'])) {
        $pg = $_GET['pg'];
    }

    // Page par default
    else {
        $pg = 'home';
    }

?>

<?php 

    // On récupère la page actuelle ou déinit une packge par default
    // forme ternaire ; condition ? valeur si oui : valeur par default
    $pg = isset($_GET['pg']) ? $_GET['pg'] : 'home';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>themes_actus</title>
</head>
<body>
    <nav>

    </nav>
    <h1>Le monde</h1>
    <ul>
        <li><a href="./inscription.php">Inscription</a></li>
        <li><a href="./connexion">Connexion</a></li>
    </ul>
</body>
</html>