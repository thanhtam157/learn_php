<?php
//hàm strstr()
function str_strstr($str, $search){
  $check = strstr($str, $search);
  if ( $check= NULL){
    echo("Câu 17 : Không tìm thấy");
  }else{
    echo("Câu 17 : Chuỗi nằm trong chuỗi được chỉ định");
  }
}
      //commant
      str_strstr("Xin chào các bạn", "bạn");
      echo("</br>");
?>