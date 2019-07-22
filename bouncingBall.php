<?php
function bouncingBallwhile($h, $bounce, $window) {
    if($h>0 ||$bounce>0||$bounce<1||$window<$h)
    {   
         
    $n=-1;
    
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
function bouncingBallfor($h, $bounce, $window) {
    if($h>0 ||$bounce>0||$bounce<1||$window<$h)
    {   
        
    for($n=-1;$h>$window;$n++){$h *=$bounce;}    
    $result=2*$n+1;
    echo $result;
    }
    else{ echo "-1";}
}
bouncingBallwhile(10,0.66,1.5);
echo "<br>";
bouncingBallfor(30,0.66,1.5);
echo "<br>";
bouncingBallfor(1,0.66,1.5);
?>
