<?php 
// strncmp(string $string1, string $string2, int $length)
function checktstr($str1, $strn2, $length){
    echo "Câu 6:" .(strncmp($str1, $strn2, $length));
  }
      //commant
      checktstr("Xin chào các bạn", "Xin chào", 0);
      echo("</br>");
?>