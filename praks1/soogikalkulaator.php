<?php
/**
 * Created by PhpStorm.
 * User: matthias.kurs
 * Date: 30.01.2018
 * Time: 11:28
 */
// Vajalikud muutujad
$soogiHind = 2.55; // hind, EUR
$soodusProtsent = 15; // %
$opilaseToetus = 1.80; // EUR
// arvutused
if($soogiHind > 0 and $soodusProtsent > 0 and $opilaseToetus > 0) {
    $soodusHind = $soogiHind * ((100 - $soodusProtsent) / 100);
    $hindOpilasele = $soodusHind - $opilaseToetus;
    echo "Söögi hind õpilasele on ".$hindOpilasele."<br />";
} else {
    echo "Andmed ei ole täielikud<br />";
}