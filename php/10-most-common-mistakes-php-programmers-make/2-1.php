<?php
// isset — Determine if a variable is set and is not NULL

$arr = [];

$arr['test'] = null;

if(!isset($arr['test'])) {
    echo "key 'test' doesn't exist or is null";
}