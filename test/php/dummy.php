<?php

/* Bopini, Copyright (c) Andrea Davanzo, License MPL v2.0 */

declare(strict_types=1);

// --- Selection ---
if (true) { // T_IF
  echo "if\n"; // T_ECHO
} elseif (false) { // T_ELSEIF
} else { // T_ELSE
}

switch (2) { // T_SWITCH
  case 1: // T_CASE
    break; // T_BREAK
  default: // T_DEFAULT
    break;
}

$value = match (3) { // T_MATCH
  1 => 'one',
  2 => 'two',
  default => 'three',
};

// --- Repetition ---
for ($i = 0; $i < 1; $i++) { // T_FOR
}

foreach ([1, 2] as $item) { // T_FOREACH
}

$i = 0;
while ($i < 1) { // T_WHILE
  $i++;
}

$j = 0;
do { // T_DO
  $j++;
} while ($j < 1);

// --- Sequence ---
$a = 1;
$a += 2; // T_PLUS_EQUAL
$a -= 1; // T_MINUS_EQUAL
$a *= 2; // T_MUL_EQUAL
$a /= 2; // T_DIV_EQUAL
$a %= 2; // T_MOD_EQUAL
$a .= "string"; // T_CONCAT_EQUAL
$a &= 1; // T_AND_EQUAL
$a |= 1; // T_OR_EQUAL
$a ^= 1; // T_XOR_EQUAL
$a <<= 1; // T_SL_EQUAL
$a >>= 1; // T_SR_EQUAL

$b ??= "fallback"; // T_COALESCE_EQUAL

print "printing\n"; // T_PRINT

include 'another_dummy.php'; // T_INCLUDE
include_once 'another_dummy.php'; // T_INCLUDE_ONCE
require 'another_dummy.php'; // T_REQUIRE
require_once 'another_dummy.php'; // T_REQUIRE_ONCE

function testReturn()
{
  return "returned\n"; // T_RETURN
}

while (true) {
  continue; // T_CONTINUE
  break; // T_BREAK
}

// Additional sequence tokens
$array = (array) 123; // T_ARRAY_CAST
$object = (object) []; // T_OBJECT_CAST
$string = (string) 456; // T_STRING_CAST
$unset = (unset) $a; // T_UNSET_CAST

// Increment/Decrement
$i = 0;
$i++; // T_INC (post-increment)
++$i; // T_INC (pre-increment)
$i--; // T_DEC
--$i; // T_DEC

// T_LIST
list($x, $y) = [1, 2];

// T_NEW
class MyClass {}
$instance = new MyClass(); // T_NEW

// T_CLONE
$clone = clone $instance; // T_CLONE

// T_CATCH
try {
  throw new Exception("Oops");
} catch (Exception $e) { // T_CATCH
}

// T_POW and T_POW_EQUAL
$c = 2 ** 3; // T_POW
$c **= 2; // T_POW_EQUAL

// T_SL and T_SR
$shiftLeft = 4 << 1; // T_SL
$shiftRight = 8 >> 1; // T_SR

// T_UNSET
unset($shiftLeft); // T_UNSET

exit("exit\n"); // T_EXIT