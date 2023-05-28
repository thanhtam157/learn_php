<?php
//Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sumthenumbers($n)
{
    $count = 0;
    for($i=1; $i <= $n; $i++){
        $count += $i;
    }
    echo "$count";
    
}
sumthenumbers(13);

?>