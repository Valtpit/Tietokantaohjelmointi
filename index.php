<?php
require_once('functions.php');
//tekstit index sivulle
$html = "<h1>Titles by actor</h1>";
$html .= "<p>Write an actors name and the site gives you 10 titles with the actor in it </p><p>Examples of actors: Bill Murray, Johnny Depp</p><p>It might take a while to load</p>";
//Formi jolla haku saa tarvittavat arvot.
$html .= '<form action="titlesByActor.php" method="get">
First name <input type="text" name="FirstName"><br>
Last name: <input type="text" name="LastName"><br>
<input type="submit">
</form>';

echo $html;