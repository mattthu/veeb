<?php
/**
 * Created by PhpStorm.
 * User: Matthu
 * Date: 19.05.2018
 * Time: 17:12
 */
require_once 'funktsioonid.php';
loeVormFailist('aegvorm.html');
$eesnimi = $_POST["eesnimi"];
$perenimi = $_POST["perenimi"];
$aeg = $_POST["paev"].".".$_POST["kuu"].".".$_POST["aasta"];
#echo $aeg.' ,   '.$eesnimi.'    ,   '.$perenimi;
echo "Sisestatud nimi:".$eesnimi." ".$perenimi."<br>";
echo "Sisestatud kuupäev:".$aeg;
# Andmebaasi saatmiseks
$servername = "localhost";
$username = "Saladus";
$password = "Saladus";
$dbname = "Pole tehtud";
echo "<br><br>INSERT INTO nimed (eesnimi, perenimi, aeg) VALUES ('$eesnimi', '$perenimi', '$aeg')";