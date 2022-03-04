<?php session_start(); 

require_once("questions.php");

?>

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

            <?php
                if(isset($_POST) && !empty($_POST)){
                    if($_POST["reponse"] === $question[4]['reponse1']){
                        echo "<h2>Bravo !</h2>";
                        $_SESSION["score"] += 1;
                        
                        
                    }else{
                        echo '<h2>Mauvaise réponse !</h2>';
                        echo "<p>Il fallait répondre 'strtoupper'</p>";
                    }
                    if($_SESSION["score"] === 5){
                        $resultat = "Bravo ! Score maximal";
                    }
                    elseif($_SESSION["score"] === 4){
                        $resultat = "Pas mal du tout !";
                    }
                    elseif($_SESSION["score"] === 3){
                        $resultat = "Peut mieux faire !";
                    }
                    elseif($_SESSION["score"] === 2){
                        $resultat = "Pas terrible !";
                    }
                    elseif($_SESSION["score"] === 1){
                        $resultat = "Vous êtes mauvais !";
                    }
                    elseif($_SESSION["score"] === 0){
                        $resultat = "Vous êtes très nul !";
                    }
                    echo "<p>SCORE : " . $_SESSION["score"] . " ". $resultat . "</p>";
                    echo "<button class='btn btn-warning' onclick=\"window.location.href='quizz.php'\">FIN DU QUIZZ !</button>";
            }else { ?>
            <form action="question5.php" method="post" >
                <h2>Question 5 :</h2>
                <h4><?= $question[4]["question5"] ?></h4>
               
                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $question[4]['reponse1'] ?>">
                    <label for="radio1"><?= $question[4]['reponse1']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio2" value="<?= $question[4]['reponse2'] ?>">
                    <label for="radio2"><?= $question[4]['reponse2']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio3" value="<?= $question[4]['reponse3'] ?>">
                    <label for="radio3"><?= $question[4]['reponse3']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio4" value="<?= $question[4]['reponse4'] ?>">
                    <label for="radio4"><?= $question[4]['reponse4']?></label>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">VALIDER</button>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>


