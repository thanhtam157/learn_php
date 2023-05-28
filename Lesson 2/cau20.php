<?php
//filter_var check email hop le
function checkemail($email){
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo ("Câu 20: Email hợp lệ");
  }else{
    echo ("Email không hợp lệ");
  }
}

      //commant
      checkemail("phamthithanhtam@gmail.com");

?>