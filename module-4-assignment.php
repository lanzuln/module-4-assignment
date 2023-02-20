<?php
// Module 4: assignment

//________1. first question result
echo "____number 1______";
echo PHP_EOL;
function array_short($sArray) {
    usort($sArray, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $sArray;
}
$sArray = array("a", "ab", "abc", "abcd", "abcde");
$sArray = array_short($sArray);
print_r($sArray);
echo PHP_EOL;

//________2. second question result
echo "_____number 2______";
echo PHP_EOL;
function concatenateTwo_string($strng1, $strng2) {
    $strng2 = strrev($strng2); // Reverse the second string
    return $strng1 . $strng2;
}
$strng1 = "Hello, ";
$strng2 = "world!";
$result = concatenateTwo_string($strng1, $strng2);
echo $result;
echo PHP_EOL;

//________3. Third question result
echo "_____number 3______";
echo PHP_EOL;

function removeFastLast($oldArray) {
    array_shift($oldArray); // Remove the first element
    array_pop($oldArray); // Remove the last element
    return $oldArray;
};

$oldArray = array("iphone", "samsung", "sony", "oneplus", "vivo");
$newArray = removeFastLast($oldArray);
print_r($newArray);

//________4. Fourth question result
echo "_____number 4______";
echo PHP_EOL;

function LettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}

$strng1 = "Hello world";
$strng2 = "Hello, world!";
if (LettersAndWhitespace($strng1)) {
    echo "String 1 contains only letters and whitespace\n";
} else {
    echo "String 1 contains other characters besides letters and whitespace\n";
}
if (LettersAndWhitespace($strng2)) {
    echo "String 2 contains only letters and whitespace\n";
} else {
    echo "String 2 contains other characters besides letters and whitespace\n";
}

//________5. Fifth question result
echo "_____number 5______";
echo PHP_EOL;
function SecondLargest($arr) {
    rsort($arr);
    return $arr[1];
}
$arr = array(1, 4, 2, 6, 5, 3);
$secondLargest = SecondLargest($arr);
echo $secondLargest;
echo PHP_EOL;