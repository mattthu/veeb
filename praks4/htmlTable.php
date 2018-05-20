<?php
/**
 * Created by PhpStorm.
 * User: Matthu
 * Date: 20.05.2018
 * Time: 14:05
 */
require_once 'tabel.php';
class htmlTabel extends tabel {
    var $taustaVarv = '';
    public function __construct(array $pealkirjad, $taustaVarv)
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }
    public function setTaustaVarv($taustaVarv) {
        $this->taustaVarv = $taustaVarv;
    }
}