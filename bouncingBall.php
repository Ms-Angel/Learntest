<?php
function bouncingBall($h, $bounce, $window) {
    if($h>0 ||$bounce>0||$bounce<1||$window<$h)
    {   $n=-1;
        //$b=pow($bounce,$n)*$h;
    //for($n=1;$b>$window;$n++){$b=pow($bounce,$n)*$h;}
    while($h>$window)
    {
        $h*=$bounce;
        $n++;
    }
    $result=2*$n+1;
    echo $result;
    }
    else{ echo "-1";}
}
bouncingBall(10,0.66,1.5);
echo "<br>";
bouncingBall(30,0.66,1.5);
echo "<br>";
bouncingBall(1,0.66,1.5);
?>
