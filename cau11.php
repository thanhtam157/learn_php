<?php
// ltrim()
function str_ltrim($text){
  print_r ("Câu 11:" .(ltrim($text, "$text[0]")));
}
    //commant
    str_ltrim("mhi helloo");
    echo("</br>");
?>