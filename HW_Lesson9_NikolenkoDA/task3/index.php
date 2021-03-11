<?php
const STARTREPEAT = 'left';
const ENDREPEAT = 'right';

$arr = [1,2,3,3,3,4,5,6,7];

echo binSearch($arr, 3);

function binSearch($arr, $num)
{
    if (count($arr) == 1 && $arr[0] == $num) return "Число $num с индексом 0";

    $leftIndex = binarySearch($arr, $num, STARTREPEAT);
    if ($leftIndex === null)
        return "Искомое число отсуствует";
    if (checkNum($arr, $leftIndex, ENDREPEAT))
        return "Число $num имеет индекс $leftIndex";

    $rightIndex = binarySearch($arr, $num, ENDREPEAT);
    $repeat = $rightIndex - $leftIndex + 1;
    return "Число $num повторяется $repeat раз от $leftIndex до $rightIndex индекса";

}

function checkNum(array $arr, $index, $check)
{
    if ($check == STARTREPEAT) {
        if ($index === 0) return true;
        if ($arr[$index] === $arr[$index - 1]) return false;
        return true;
    }
    elseif ($check == ENDREPEAT) {
        if ($index == count($arr) - 1) return true;
        if ($arr[$index] === $arr[$index + 1]) return false;
        return true;
    }
}

function binarySearch($arr, $num, $check)
{

    $start = 0;
    $end = count($arr) - 1;

    while ($start <= $end) {

        $base = floor(($start + $end) / 2);

        if ($arr[$base] == $num) {
            if (checkNum($arr, $base, $check)) {
                return $base;
            } elseif ($check == ENDREPEAT) {
                $start = $base + 1;
            } elseif ($check == STARTREPEAT) {
                $end = $base - 1;
            }
        } elseif ($arr[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }

    }
    return null;
}