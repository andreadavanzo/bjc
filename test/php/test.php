<?php

require '../../src/php/initme.php';
require '../../src/php/count.php';

$code = file_get_contents('dummy.php');

print_r(bopini_count($code));


