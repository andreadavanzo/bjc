<?php

require '../../src/php/count.php';

$filename = $argv[1] ?? 'dummy.php';

if (file_exists($filename)) {
  echo "Analyzing file: " . $filename . "\n";
  $code = file_get_contents($filename);
  if (is_string($code)) {
    print_r(bjc_count($code));
    $error_code = 0;
  } else {
    echo "Error getting file contents\n";
    $error_code = 1;
  }
} else {
  echo "Error: File not found\n";
  $error_code = 1;
}

exit($error_code);