<?php

function factorial(int $n): float|false
{
  if ($n < 0) {
    $result = false;
  } else {
    $result = 1.0;
    for ($i = 1; $i <= $n; $i++) {
      $result *= $i;
    }
  }

  return $result;
}

