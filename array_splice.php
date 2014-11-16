<?php

$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 1, "purple");
print_r($input);