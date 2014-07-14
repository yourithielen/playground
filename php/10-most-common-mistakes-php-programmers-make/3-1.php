<?php
/**
 * - Objects are passed by reference, arrays by value.
 * - Always check API documentation to see if a function returns a value, an array copy or a reference
 * to an object.
 */

class Config
{
    private $values = [];

    public function getValues() {
        return $this->values;
    }
}

$config = new Config();

// getValues() returns a COPY of the $values array, so this adds a 'test' element
// to a COPY of the $values array, but not to the $values array itself.
$config->getValues()['test'] = 'test';

// getValues() again returns ANOTHER COPY of the $values array, and THIS copy doesn't
// contain a 'test' element (which is why we get the "undefined index" message).
echo $config->getValues()['test'];