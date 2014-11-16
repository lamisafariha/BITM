<?php
// defining a multi-dimensional array
$multi_array = [
    "key1" => ["md1", "md2"],
    "key2" => "value2",
    "key3" => "value3",
];

foreach ($multi_array as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $v) {
            echo $v;
            echo '<br/>';
        }
    } else {
        echo $value;
        echo '<br/>';
    }
}

 