<?php


class berlinClock
{
    public function secondePairImpair(int $_shesh): string
    {
        if ($_shesh % 2 == 0) {
            return "allumé";
        }
        return "éteint";
    }
    public function heure(int $_nbre)
    {
        $varDiv = $_nbre/5;
        $varReste = $_nbre%5;
        $arrayLigne2 = [4];
        $arrayLigne3=[4];
        $string = "";
        for ($i=0; $i<4;$i++){
            $arrayLigne2[$i]="eteint";
            $arrayLigne3[$i]="eteint";
        }
        for ($i=0; i<$varDiv;$i++){
            $arrayLigne2[$i]="allumé";
        }
        for ($i=0; i<$varReste;$i++){
            $arrayLigne3[$i]="allumé";
        }
    }

    public function minute()
    {

    }
}