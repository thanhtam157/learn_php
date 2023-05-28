<?php
//Hàm preg_replace()
function str_preg_replace($pattern, $replace, $str){
  echo("Câu 18: " . preg_replace($pattern, $replace, $str));
}

      //commant
      str_preg_replace("/Xinchao/", "Hello", "Xinchao cac ban");
      echo("<br/>");
?>