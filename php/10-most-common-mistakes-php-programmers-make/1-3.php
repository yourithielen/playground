<?php
#The main thing to remember is that foreach does not create a scope.

$array = [1,2,3];

foreach($array as &$value) {}

//$value is still available
var_dump($value);

//Kill it with fire!
unset($value);

var_dump( isset($value) );
