<?php
// str_pad()
function str_padd($str, $len, $str_ad, $pad_ty){
  print_r("Câu 15: " .str_pad($str, $len, $str_ad, $pad_ty));
}
    //commant
    str_padd( "Xin chào ","95","-chữ được chèn vào đầu cuối-",STR_PAD_BOTH);
    echo("</br>");
?>