<?php
$array = [1, 2, 3];
echo implode(',', $array), "\n";

foreach ($array as &$value) {}    // by reference
echo implode(',', $array), "\n";

foreach ($array as $value) {}     // by value (i.e., copy)
echo implode(',', $array), "\n";

/*
 * Expected output:
 * 1,2,3 1,2,3 1,2,3
 *
 * Actual output:
 * 1,2,3 1,2,3 1,2,2
 */