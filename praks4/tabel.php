<?php
/**
 * Created by PhpStorm.
 * User: Matthu
 * Date: 20.05.2018
 * Time: 14:05
 */
class tabel {
    var  $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudearv;
    public function __construct(array $pealkirjad) {
        $this->pealkirjad = $pealkirjad;
        $this->veergudearv = count($pealkirjad);
    }
    function lisarida($rida) {
        if(count($rida) != $this->veergudearv) {
            return false;
        }
        array_push($this->tabeliSisu,$rida);
        return true;