<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Quizz</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php if(!isset($_SESSION["pseudo"])){ ?>
            <form action="quizz.php" method="post">
                <label for="prenom">Entrez votre pseudo :</label><br>
                <input type="text" name="prenom" placeholder="Votre pseudo" id="prenom"><br><br>
                <button type="submit" class="btn btn-warning">Envoyer</button>
            </form>
            <?php }
            else{ ?>
                <h2>Bienvenue <?= $_SESSION["pseudo"] ?> !</h2>
                <button class='btn btn-warning' type='submit' onclick="window.location.href='question1.php'">Commencer</button>;
            <?php }
            ?>
        </div>
    </div>
</body>
</html>

<?php
    if(isset($_POST) && !empty($_POST)){
        $pseudo = $_POST['prenom'];
        $_SESSION["pseudo"] = $pseudo;
        header("Location: question1.php");
    }
?>