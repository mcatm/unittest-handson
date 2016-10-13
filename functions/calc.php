<?php

function calc($a = null, $b = null, $op = 'sum')
{
  if (!$a) throw new Exception;
  switch ($op)
  {
    case 'sum':
    return $a + $b;

    case 'sub':
    return $a - $b;

    case 'mul':
    return $a * $b;

    case 'div':
    return $a / $b;
  }
}