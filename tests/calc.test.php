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

  /**
   * @expectedException Exception
   */
  public function testFirstArgIsNull()
  {
    calc();
  }

  public function testSum()
  {
    $this->assertEquals( calc(1, 1), 2 );
    $this->assertEquals( calc(1, 1, 'sum'), 2 );
    $this->assertEquals( calc(1, 1, 'sub'), 0 );
    $this->assertEquals( calc(4, 4, 'mul'), 16 );
    $this->assertEquals( calc(8, 4, 'div'), 2 );
  }

}