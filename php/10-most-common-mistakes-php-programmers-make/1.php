<?php
$array = [1,2,3,4];

foreach($array as &$value) {}

$value = '$value holds a reference to the last item of the array since foreach doesn\'t create a scope.';

var_dump($array);

var_dump($value);