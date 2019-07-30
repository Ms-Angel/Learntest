<?php

/*題目
Some numbers have funny properties. For example:

89 --> 8¹ + 9² = 89 * 1

695 --> 6² + 9³ + 5⁴= 1390 = 695 * 2

46288 --> 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51

Given a positive integer n written as abcd... (a, b, c, d... being digits) and a positive integer p

we want to find a positive integer k, if it exists, such as the sum of the digits of n taken to the successive powers of p is equal to k * n.
In other words:

Is there an integer k such as : (a ^ p + b ^ (p+1) + c ^(p+2) + d ^ (p+3) + ...) = n * k

If it is the case we will return k, if not return -1.

Note: n and p will always be given as strictly positive integers.

*/
//$n="";
//$p="";

//$n=$_POST['n'];
//$p=$_POST['p'];

function digPow($n, $p) {
   $newarray=str_split($n);
   $x=count($newarray);
   $z=0;
   for($y=0;$y<$x;$y++)
   {
       $z=$z+pow($newarray[$y],$p);
       $p++;
   }
   if($z%$n==0)
   {
       $result=$z/$n;
       echo "n=$n:p=$p:result=$result:z=$z:x=$x<br>";
   }else{echo "n=$n:p=$p:result=-1<br>";} 
}
digPow($n,$p);

function digPowforeach($n, $p) {
    $newarray=str_split($n);
    $x=count($newarray);
    $z=0;
    foreach($newarray as $value)
    {
        $z=$z+pow($value,$p);
        $p++;
    }
    if($z%$n==0)
    {
        $result=$z/$n;
        echo "n=$n:p=$p:result=$result:z=$z:x=$x<br>";
    }else{echo "n=$n:p=$p:result=-1<br>";}
 }

 digPowforeach(55,3);
?>