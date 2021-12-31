<?php
require_once('functions.php');
//Muodostetaan yhteys tietokantaan ja kutsutaan stored procedurea index.php saaduilla arvoilla
$dbcon = createDbConnection();
$sql = "call getTitlesByActor('" . $_GET["FirstName"] . " " . $_GET["LastName"] ."')";

$prepare = $dbcon->prepare($sql);
$prepare->execute();
$rows = $prepare->fetchAll();

//otsikko ja elokuvat näkyviin käyttäjälle
$html = '<h1>10 titles with ' . $_GET["FirstName"] . " " . $_GET["LastName"] . ' in it </h1>';
$html .= "<ul>";

foreach($rows as $row){
    $html .= "<li>" . $row["original_title"] . "</li>";
}
$html .= "</ul>";

echo $html;