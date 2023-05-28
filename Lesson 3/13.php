<?php
     // loại bỏ các phần tử trùng lặp trong một mảng
    function deleteValue($arr){
        $arrNew = array_unique($arr);
        print_r($arrNew);
    }
            echo "Câu 13: ";
            $array = array('cam', 'táo', 'xoài', 'mận', 'táo');
            deleteValue($array);
?>