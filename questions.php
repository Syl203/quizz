<?php

if(!isset($_SESSION["pseudo"])){
    header('Location:quizz.php');
}

$question = array(
    array(
        "question1" => "Que veut dire PHP ?",
        "reponse1" => "Pneu Hyper Préssurisé",
        "reponse2" => "PHP Hypertext Preprocessor",
        "reponse3" => "Phrase Hautement Pompeuse",
        "reponse4" => "Aucun des trois"
    ),
    array(
        "question2" => "Comment fait on un saut de ligne ?",
        "reponse1" => "hr",
        "reponse2" => "jump",
        "reponse3" => "br",
        "reponse4" => "Aucun des trois"
    ),
    array(
        "question3" => "Qui a inventé le Javascript ?",
        "reponse1" => "Rasmus Lerdorf",
        "reponse2" => "Guido van Rossum",
        "reponse3" => "Anders Hejlsberg",
        "reponse4" => "Brendan Eich"
    ),
    array(
        "question4" => "En quelle année a été inventé le PHP",
        "reponse1" => "1990",
        "reponse2" => "1992",
        "reponse3" => "1994",
        "reponse4" => "1996"
    ),
    array(
        "question5" => "Quelle fonction PHP met texte en majuscule ?",
        "reponse1" => "strtoupper",
        "reponse2" => "strtolower",
        "reponse3" => "htmlspecialchars",
        "reponse4" => "htmlentities"
    )
);
?>