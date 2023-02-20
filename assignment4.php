<?php
//Write a PHP function to sort an array of strings by their length, in ascending order5. (Hint: You can use the usort() function to define a custom sorting function.)

function sortStringsByLength($arr)
{
 usort($arr, function ($a, $b) {
  return strlen($a) - strlen($b);
 });
 return $arr;
}

$arr        = array("apple", "banana", "kiwi", "orange", "pear");
$sorted_arr = sortStringsByLength($arr);
print_r($sorted_arr);

//Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string .

function concatenateStrings($str1, $str2)
{
 $len1 = strlen($str1);
 $len2 = strlen($str2);
 if ($len2 >= $len1) {

  $result = $str1 . $str2;
 } else {

  $start  = $len1 - $len2;
  $result = substr($str1, 0, $start) . $str2 . substr($str1, $start);
 }
 return $result;
}

$str1   = "hello";
$str2   = "ostad";
$result = concatenateStrings($str1, $str2);
echo $result;

//Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

function removeFirstAndLast($arr)
{
 array_shift($arr);
 array_pop($arr);
 return $arr;
}

$arr     = array(1, 2, 3, 4, 5);
$new_arr = removeFirstAndLast($arr);
print_r($new_arr);

// Write a PHP function to check if a string contains only letters and whitespace.

function letterAndWhitespace($str)
{
 return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}

// Example usage
$str1    = "Hello world";
$str2    = "Hello world123";
$result1 = letterAndWhitespace($str1);
$result2 = letterAndWhitespace($str2);
var_dump($result1);
var_dump($result2);

// Write a PHP function to find the second largest number in an array of numbers.

function findSecondLargest($arr)
{
 $n = count($arr);
 if ($n < 2) {

  return null;
 }
 $largest       = $arr[0];
 $secondLargest = $arr[1];
 for ($i = 2; $i < $n; $i++) {
  if ($arr[$i] > $largest) {
   $secondLargest = $largest;
   $largest       = $arr[$i];
  } elseif ($arr[$i] > $secondLargest && $arr[$i] < $largest) {
   $secondLargest = $arr[$i];
  }
 }
 return $secondLargest;
}

$arr1    = array(1, 2, 3, 4, 5);
$arr2    = array(5, 4, 3, 2, 1);
$arr3    = array(1);
$result1 = findSecondLargest($arr1);
$result2 = findSecondLargest($arr2);
$result3 = findSecondLargest($arr3);
var_dump($result1);
var_dump($result2);
var_dump($result3);
