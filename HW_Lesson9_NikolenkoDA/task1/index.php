<?php
function searchArr($arr)
{
    $start = 0;
    $end = count($arr) -1;
    if ($arr == [] ) {
        return "Пропущенное число = 1";
    }

    while ($start <= $end) {
        $base = floor(($start + $end) / 2);

        if ($arr[$base] == $base + 1) {
            $start = $base + 1;

        } else if ($arr[$base] > ($base + 1)) {

            if ($arr[$base - 1] == $base) {
                $k = $base + 1 ;
                return "Пропущенное число = {$k}";
            } else {
                $end = $base - 1;
            }
        }


    }
    return "В массиве нет пропущенного числа";
}

$arr = [1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16] ;
echo searchArr($arr);

