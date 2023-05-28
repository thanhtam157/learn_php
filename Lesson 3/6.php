<?php
//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.

function sapXepTangDan($mang) {
    sort($mang);
    return $mang;
}


$mang = array(5, 3, 1, 4, 2);
$mangSapXep = sapXepTangDan($mang);

echo "Mảng sau khi được sắp xếp theo thứ tự tăng dần:<br>";
foreach ($mangSapXep as $giaTri) {
    echo $giaTri . " ";
}

?>