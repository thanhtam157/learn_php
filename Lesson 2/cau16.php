<?php
// strrchr()
function str_strrchr($str, $char){
  $str_strrchr = strrchr($str, $char);
  if($str_strrchr = false){
    echo ("Câu 16: False");
  }else{
    echo ("Câu 16: True");
  }
}
    //commant
    str_strrchr( "Xin chào các bạn","các bạn");
    echo("</br>");
?>