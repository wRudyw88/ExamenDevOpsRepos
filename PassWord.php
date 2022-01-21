<?php

use PHPUnit\Framework\TestCase;
require_once 'PassWord.php';

class PassWord extends  TestCase
{
    public function verrifyPassWord($chaine){

        if(  strlen($chaine) === 8 ) {
            return TRUE ;
        }

        return FALSE;
    }


}