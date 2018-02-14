<?php
/**
 * Created by PhpStorm.
 * User: matthias.kurs
 * Date: 14.02.2018
 * Time: 13:28
 */
echo '
    <form method="post" action="'.$_SERVER["PHP_SELF"].'">
        Sisesta arv vahemikus 0-50:
        <input type="number" name="kasutajaArv"><br />
        <input type="submit" value="Kontrolli">
        </form>
    ';