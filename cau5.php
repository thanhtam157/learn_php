<?php
function replaceString($strre, $strnew, $obj){
    echo "Câu 5:" .(str_replace($strre, $strnew, $obj));
  }
      //commant
      replaceString("Xin chào", "Hello", "Xin chào các bạn");
      echo("</br>");
?>  