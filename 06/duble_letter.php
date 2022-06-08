<?php

function duplicateCount($text) {

    $copy = str_split(strtolower($text));
    $a = [];
    foreach ($copy as $key => $ch){
        for ($i = $key + 1; $i < count($copy); $i++){
            if ($ch == $copy[$i]){
                $a[] = $ch;
            }
        }
    }
    return count(array_unique($a));
}
print_r(duplicateCount('aiabibicieie'));