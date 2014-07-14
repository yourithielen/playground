<?php
// Proper ways:

for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i) . "\n";
}

//Or:
$letters = range('a', 'z');

for ($i = 0; $i < count($letters); $i++) {
    echo $letters[$i] . "\n";
}