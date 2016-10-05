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

  public function testSecondArgIsNull()
  {
    $this->assertEquals( calc(38), 38 );
  }

  public function testFirstArgIsNull()
  {
    calc();
    $this->expectException(Exception::class);
  }

  public function testCalcNotStr()
  {
    // $this->assertEquals( calc('test', 1), null );
  }

}