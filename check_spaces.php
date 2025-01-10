<?php 

function containsSpaces($string) {
    return strpos($string, ' ') !== false;
}

// Test cases
var_dump(containsSpaces("hello world")); // Output: bool(true)

?>
