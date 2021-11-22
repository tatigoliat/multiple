<?php
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
    public function test_buscaMultiple(){
        require "../multiple.php";
        
        $myClass = new Multiple();
        $exec = $myClass->buscaMultiple(1, 100);

        $exp = array(
            array(1=>1, 2=>2, 3=>"Falabella")
        );

        $this->assertEquals($exp, $exec);
    }
}