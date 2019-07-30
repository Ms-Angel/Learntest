<?php
/*Sum of the first nth term of Series
1+1/4+1/7+1/10+.......第n項的總和
*/
function series_sum($n) {
    $a=1/(1+3*$n);
    $b=1+$a;
    $ans=$b*($n+1)/2;
    echo $ans."<br>";
  }
  series_sum(4);

function series_sum1($n) {
    if($n==0)
    {
        echo $n=0.00;
    }else{
    $ans=0;
    for($x=0;$x<=$n;$x++)
    {
       $ans+=1/(1+(3*$x));
    }
    echo round($ans, 2);
      echo "<br>";
    }
  }
  series_sum2(100);
  function series_sum2($n) {
    if($n==0)
    {
        echo $n=0.00;
    }else{
    $ans=0;
    for($x=1;$x<=3*$n-2;$x=$x+3)
    {
       $ans+=1/$x;
    }
    echo round($ans, 2);}
  }
  series_sum2(0);
?>
