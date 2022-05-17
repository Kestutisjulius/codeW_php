<?php
/** In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it.
 * The start and the end number are both inclusive!
 * examples:
 * 1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
    4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
 */
echo '<pre>';
function dont_give_me_five($start, $end) {
    $count = 0;
    for ($i = $start; $i <= $end; $i++){

        if($i % 5 == 0 && $i ){
            continue;
        } else{
            $count ++;
        }
    }
    return $count;
}
print_r( dont_give_me_five(1,9));