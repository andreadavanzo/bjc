<?php

// BJC The Böhm-Jacopini Counter - https://github.com/andreadavanzo/bjc
// SPDX-License-Identifier: AGPL-3.0-only
// Copyright (c) Andrea Davanzo and contributors

declare(strict_types=1);

require_once __DIR__ . '/count.php';

$options = getopt('f:');

if (!isset($options['f'])) {
  fwrite(STDERR, "Usage: php bjc_parse.php -f <file>\n");
  exit(1);
}

$file = $options['f'];

if (!is_file($file) || !is_readable($file)) {
  fwrite(STDERR, "Error: cannot read file: {$file}\n");
  exit(1);
}

$code = file_get_contents($file);
$count = bjc_count($code);

echo sprintf(
    "%d,%d,%d\n",
    $count['sequence'],
    $count['selection'],
    $count['repetition']);
