<?php
/** In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it.
 * The start and the end number are both inclusive!
 * examples:
 * 1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
    4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
 */
function penketas($m){
    print_r($m);
    return $m[0];
}
echo '<pre>';
function dont_give_me_five($start, $end) {
    $count = 0;


    for ($i = $start; $i <= $end; $i++){

        $str = preg_replace_callback('/5/m', 'penketas', "$i");

    var_dump($str);
        if(is_array($str)){
            $count++;
        }


       echo '<br>';

    }
    return $count;
}
print_r( dont_give_me_five(4,17));