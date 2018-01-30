<?php
/**
 * Created by PhpStorm.
 * User: matthias.kurs
 * Date: 30.01.2018
 * Time: 10:24
 */
// Üherealine kommentaar
/*
 * Mitme realine
 * kommentaaaaaaaaaaar
 *
 */

//Väljastamine
echo "Hello World!"."<br />"; // Käsu lõpp - ;
print "valikaine<br />";
// muutujate defineerimine
$eesnimi = "Matthias"; // eesnimi, string
$perenimi = "Kurs"; // perenimi, string
$bussiNumber = 4; // bussi number, integer
$soiduKestvus = 0.8; // sõidu kestvus, 0.8 tundi, float
//Konstantide defineerimine
define("NUMBER_PI", 3.14);
//Kasutades eel defineeritud muutujaid ja konstante
//väljasta ilus tekst
echo "Olen ".$eesnimi." ".$perenimi."<br />";
echo "Sõidan koolist kesklinna bussiga number ".$bussiNumber."<br />";
echo "Jõuan kesklinna ".$soiduKestvus." tunniga<br />";
echo "Midagi konstantset? PI = ".NUMBER_PI."<br />";