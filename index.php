<?php
//1

$text = "aujourdhui comme tout les jours jai faim";

$text = addslashes($text);

echo $text. "<br><br>";

//2

$testText = "Il Fait Froid";

echo strtolower($testText);
echo " - ";
echo strtoupper($testText);
echo " - ";
echo ucwords($testText);

echo "<br><br>";

//3

$textMaj = "ONLY CAPSLOCK";

echo $textMaj;
echo " - ";
echo strtolower($textMaj);
echo " - ";
echo lcfirst($textMaj);

echo "<br><br>";

//4

$quatre = "il faut écrire beaucoup";
echo $quatre;

echo "<br><br>";

$mots = explode(" ", $quatre);

foreach ($mots as $mot){
    echo $mot. "<br>";
}

echo "<br><br>";

//5

$tableWords = ['first', 'Second', 'third', 'fourth'];
$chaine = implode($tableWords);
echo $chaine;

echo "<br><br>";

//6

$six = "chaisse poele chaussure";
echo strrev($six);
echo "<br>";
echo str_shuffle($six);

echo "<br><br>";

//7

$sept = "<strong>Hello, </strong> nous apprenons <span style='color: red;'>PHP</span>";
echo $sept;
echo"<br>";
echo strip_tags($sept);

echo "<br><br>";

//8

$huit = "Encore un text de mon choix";

echo str_pad($huit, 500, '|', STR_PAD_LEFT);

echo "<br><br>";

//9

$neuf = "un vélo voler volant";

$tableNine = str_split($neuf);

foreach ($tableNine as $element){
    echo $element . "<br>";
}
echo "<br> <br>";

//10

$dix = "la drogue c'est mal m'voyais";

echo $dix . "<br>";
echo str_ireplace('inspiration','World',$dix);
echo "<br> <br>";

//11

$onze = "ceci et un petit test";
$position = strpos($onze, "test");

echo "Position du mot test dans ma phrase: $position  <br>";

if($position == true){
    echo "Le mot test est présent dans la chaine de caractère";
}
else{
    echo "le mot n'est pas présent dans la chaine de caractère";
}
echo "<br><br>";

//12

$douze = "test";
$position = strpos($onze, $search);

if($position === 0){
    echo "test se trouve en début de chaîne";
}
else{
    echo "test ne se trouve pas en début de chaîne";
}

echo "<br><br>";

//13

if($position === strlen($onze) - strlen($search)){
    echo "la chaîne '$search' a été trouvée en fin de chaîne !";
}
else{
    echo "La chaîne '$search' n'est pas été trouvée en fin de chaîne !";
}
?>