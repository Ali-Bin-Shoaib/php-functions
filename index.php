<?php
//* 1 strCountWords
function strCountWords(string $value)
{
    $isLastCharIsSpace = false;
    $wordCount = 0;
    for ($i = 0; $i < strlen($value); $i++) {
        if ($value[$i] == ' ') {
            if ($i != 0 && $value[$i - 1] != ' ') {
                if ($i != strlen($value)) {
                    $wordCount++;
                }
            }
        }
        if ($value[strlen($value) - 1] == ' ')
            $isLastCharIsSpace = true;
    }
    return $isLastCharIsSpace ? $wordCount : $wordCount + 1;
}
// echo strCountWords('   ok   is   fine   ');

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//* 2 strRevers
function strRevers(string $value)
{
    $revers = '';
    for ($i = strlen($value) - 1; $i >= 0; $i--) {
        $revers = $revers . $value[$i];
    }
    return $revers;
}
// echo strRevers('ok');

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//* 3 strToArray
function strToArray(string $value)
{
    $array = [];
    for ($i = 0; $i < strlen($value); $i++) {
        $array[$i] = $value[$i];
    }
    return $array;
};
// print_r(strToArray('do ok'));

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

//* 4 strSplit
function strSplit(string $separator, string $value)
{
    if (strlen($separator) != 1) {
        throw new Exception("Separator must be one character. provided separator: {$separator} with length = " . strlen($separator));
    }
    $arrayIndex = 0;
    $array = [];
    $temp = '';
    for ($i = 0; $i < strlen($value); $i++) {
        if ($value[$i] == $separator) {
            if ($temp != '') {
                // array_push($array, $temp);
                $array[$arrayIndex++] = $temp;
                $temp = '';
            }
        } else {
            $temp .= $value[$i];
        }
    }
    if (count($array) == 0)
    throw new Exception("provided separator does not exist on the provided string value.");

return $array;
}
// print_r(strSplit('/', '/this/is/a/test/for/split/function'));

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++