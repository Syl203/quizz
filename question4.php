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
                    if($_POST["reponse"] === $question[3]['reponse3']){
                        echo "<h2>Bravo !</h2>";
                        $_SESSION["score"] += 1;
                    }else{
                        echo '<h2>Mauvaise réponse !</h2>';
                        echo "<p>Il fallait répondre '1994'</p>";
                    }
                    echo "<p>SCORE : " . $_SESSION["score"] . "</p>";
                    echo "<button class='btn btn-warning' onclick=\"window.location.href='question5.php'\">Question suivante</button>";
            }else { ?>
            <form action="question4.php" method="post">
                <h2>Question 4 :</h2>
                <h4><?= $question[3]["question4"] ?></h4>
               
                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio1" value="<?= $question[3]['reponse1'] ?>">
                    <label for="radio1"><?= $question[3]['reponse1']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio2" value="<?= $question[3]['reponse2'] ?>">
                    <label for="radio2"><?= $question[3]['reponse2']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio3" value="<?= $question[3]['reponse3'] ?>">
                    <label for="radio3"><?= $question[3]['reponse3']?></label>
                </div>

                <div class="mt-3">
                    <input type="radio" name="reponse" class="form-check-input" id="radio4" value="<?= $question[3]['reponse4'] ?>">
                    <label for="radio4"><?= $question[3]['reponse4']?></label>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">VALIDER</button>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>


