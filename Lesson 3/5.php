<?php
//Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function MaxMin($mang) {
    $lonNhat = $mang[0];
    $nhoNhat = $mang[0];

    foreach ($mang as $giaTri) {
        if ($giaTri > $lonNhat) {
            $lonNhat = $giaTri;
        }
        if ($giaTri < $nhoNhat) {
            $nhoNhat = $giaTri;
        }
    }

    return array('lonNhat' => $lonNhat, 'nhoNhat' => $nhoNhat);
}

$mang = array(10, 5, 8, 3, 2, 9);
$result = MaxMin($mang);

echo "Giá trị lớn nhất trong mảng là: " . $result['lonNhat'] . "<br>";
echo "Giá trị nhỏ nhất trong mảng là: " . $result['nhoNhat'] . "<br>";
?>