<?php
/** Complete the square sum function so that it squares
 * each number passed into it and then sums the results together.
 */
function square_sum($numbers) : int {
    $tmp = 0;
 foreach ($numbers as $number){
     $tmp += ($number*$number);
 }
 return $tmp;
}
echo square_sum([2,2,1]);
echo sqrt(9);