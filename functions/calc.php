<?php

function calc($a = null, $b = null)
{
  if (!$a) throw new Exception;
  if (!$b) $b = 0;
  return $a + $b;
}