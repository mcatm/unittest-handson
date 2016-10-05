<?php
include_once('./vendor/autoload.php');
include_once('./functions/calc.php');

use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase
{

  public function testCalc()
  {
    $this->assertEquals( calc(1, 1), 2 );
    $this->assertEquals( calc(2, 2), 4 );
  }

}