<?php

function printNestedArray($array, $level = 0){
    foreach ($array as $key => $value) {
        echo str_repeat("  ", $level) . "$key: ";

        if (is_array($value)) {
            echo "\n";
            printNestedArray($value, $level + 1);
        } else {
            echo (is_null($value) ? 'null' : $value) . "\n";
        }
    }
}

include 'data.php';
printNestedArray($data);
