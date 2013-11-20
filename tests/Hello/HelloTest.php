<?php

namespace Hello;

require_once "vendor/autoload.php";

class HelloTest extends \PHPUnit_Framework_TestCase
{

    public function testRunMethod()
    {
        $hello = new Hello;
        $this->assertEquals("Hello Composer", $hello->run());
    }
}