<?php
//Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function paritycheck($number)
{
    if($number % 2 == 0)
    {
        echo "số nhập vào là số chẵn";
    } else
    {
        echo "số nhập vào là số lẻ";
    }

}
paritycheck(3);

?>