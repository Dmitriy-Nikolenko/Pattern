<?php
function getBracket($str)
{

    for ($i = 0; $i < mb_strlen($str); $i++) {
        if (($str[$i] == '(') || ($str[$i] == ')') || ($str[$i] == '[') || ($str[$i] == ']') || ($str[$i] == '{') || ($str[$i] == '}')) {
            $res[] = $str[$i];
        }
    }
    return $res;
}
$str = "lskadjlksad({[{]}})jdhjksdhj";
$bracket = getBracket($str);
$stack = new SplStack();
foreach ($bracket as $item) {
    $stack->push($item);
}
if (($stack->count() % 2) == 0) {
    $count1 = 0; //Количество скобки ()
    $count2 = 0; //Количество скобки []
    $count3 = 0;//Количество скобки {}

    for (end($bracket); key($bracket) !== null; prev($bracket)) {

        switch (current($bracket)) {
            case ')':
                $count1++;
                break;
            case '(':
                if ($count1 == 0) {
                    $count1 = $count1 - 2;
                    break;
                } else {
                    $count1--;
                    break;
                }
            case ']':
                $count2++;
                break;
            case '[':
                if ($count2 == 0) {
                    $count2 = $count2 - 2;
                    break;
                } else {
                    $count2--;
                    break;
                }
            case '}':
                $count3++;
                break;
            case '{':
                if ($count3 == 0) {
                    $count3 = $count3 - 2;
                    break;
                } else {
                    $count3--;
                    break;
                }
        }
    }
    if ($count1 == 0 && $count2 == 0 && $count3 == 0) {
        echo "Баланс скобок в выражении: {$str}" . PHP_EOL . " НЕ нарушен";
    } else {
        echo "Баланс скобок в выражении: {$str}" . PHP_EOL . "НАРУШЕН";
    }

} else {
    echo "Количество скобок в выражении: {$str}" . PHP_EOL . "НЕ четное";
}

