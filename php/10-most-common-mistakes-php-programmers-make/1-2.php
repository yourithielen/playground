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

/*
 * Explanation for article:
 *
 * Pass 1: Copies $array[0] (i.e., “1”) into $value (which is a reference to $array[2]), so $array[2] now equals 1. So $array now contains [1, 2, 1].
 * Pass 2: Copies $array[1] (i.e., “2”) into $value (which is a reference to $array[2]), so $array[2] now equals 2. So $array now contains [1, 2, 2].
 * Pass 3: Copies $array[2] (which now equals “2”) into $value (which is a reference to $array[2]), so $array[2] still equals 2. So $array now contains [1, 2, 2].
 */