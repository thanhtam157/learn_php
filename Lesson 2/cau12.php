<?php
//rtrim()
 function str_rtrim($text){
    $leng = strlen($text);
    print_r (rtrim($text, "$text[$leng]"));
}
//commant
 str_rtrim("hhi helloo");
 echo("</br>");
 ?>