<?php

use PHPUnit\Framework\TestCase;
require_once 'PassWord.php';

class PassWord extends  TestCase
{
    public function verrifyPassWord($chaine){

        if( strlen($chaine) === 8 && preg_match("/[A-Za-z0-9]?(*-+;°_*)+",$chaine)
            &&  preg_match("/[A-Za-z]?[0-9]+(*-+;°_*)+",$chaine) ) {
            return TRUE ;
        }

        return FALSE;
    }


}