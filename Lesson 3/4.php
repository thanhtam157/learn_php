<?php
//Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkstring($str,$alb)
{
if ($check = strpos($str, $alb) == true)
{
    echo "Đúng";
}else{
    echo "Sai";
}
}
$str = "Chào bạn mình là Tâm";
$alb = "Tâm";
checkstring($str, $alb);
?>