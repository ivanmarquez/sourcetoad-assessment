<?php
function recursiveSort(&$array, $keys) {
    usort($array, function($a, $b) use ($keys) {
        foreach ($keys as $key) {
            $valueA = getValueByKey($a, $key);
            $valueB = getValueByKey($b, $key);

            if ($valueA != $valueB) {
                return ($valueA < $valueB) ? -1 : 1;
            }
        }

        return 0;
    });

    foreach ($array as &$item) {
        foreach ($item as &$value) {
            if (is_array($value)) {
                recursiveSort($value, $keys);
            }
        }
    }
}

function getValueByKey($array, $key) {
    if (array_key_exists($key, $array)) {
        return $array[$key];
    }
    foreach ($array as $subArray) {
        if (is_array($subArray)) {
            $value = getValueByKey($subArray, $key);
            if ($value !== null) {
                return $value;
            }
        }
    }
    return null;
}

include 'data.php';
recursiveSort($data, ['last_name', 'account_id']);
print_r($data);

