<?php

/**
 * Determine whether a variable is considered to be empty. A variable is considered empty if it does not exist or if
 * its value equals FALSE. empty() does not generate a warning if the variable does not exist.
 */

$array = [];

var_export( empty($array) );

echo "<br>\n";

var_export( empty($nonExistingVariable) );

echo "<br>\n";

$test = 0;

var_export( empty($test));