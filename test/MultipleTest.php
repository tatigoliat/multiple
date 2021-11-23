<?php
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
    public function test_buscaMultiple(){
        require "../multiple.php";
        
        $myClass = new Multiple();
        $min =1;
        $max=100;
        $exp = $myClass->buscaMultiple($min, $max);

        $this->assertEquals($max, count($exp));
    }
}