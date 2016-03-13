<?php

use PHPUnit_Framework_TestCase;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    	$this->greeting = "Hello";
    }

    public function testEcho()
    {
    	echo $this->greeting;
    }
}