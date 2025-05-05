<?php

function find_max_value(array $arr): int|false
{
  if (empty($arr)) {
    $max_value = false;
  } else {
    $max_value = $arr[0];

    foreach ($arr as $value) {
      if ($value > $max_value) {
        $max_value = $value;
      }
    }
  }

  return $max_value;
}
