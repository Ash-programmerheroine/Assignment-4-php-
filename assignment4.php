<?php
#1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
function sortByLength($array) {
    usort($array, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $array;
}

$words = array("apple", "banana", "pear", "orange", "grapefruit", "kiwi");

$sortedWords = sortByLength($words);

echo "Original array: " . implode(", ", $words) . "\n";
echo "Sorted array: " . implode(", ", $sortedWords) . "\n";
//Output: Original array: apple, banana, pear, orange, grapefruit, kiwi
//Output: Sorted array: pear, kiwi, apple, banana, orange, grapefruit



#2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatenateEnd($string1, $string2) {
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $result = $string1;

    for ($i = $length2 - 1; $i >= 0; $i--) {
        $result .= $string2[$i];
    }

    return $result;
}
$string1 = "Hello, world!";
$string2 = "PHP is awesome.";

$result = concatenateEnd($string1, $string2);

echo $result;//Output: Hello, world!.emosewa si PHPArray




#3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function removeFirstAndLast($array) {
    array_shift($array); // Remove the first element
    array_pop($array); // Remove the last element
    return $array;
}
$fruits = array("apple", "banana", "orange", "grape");

$newFruits = removeFirstAndLast($fruits);

print_r($newFruits); // Outputs Array ( [0] => banana [1] => orange )





#4.Write a PHP function to check if a string contains only letters and whitespace.
function containsOnlyLettersAndWhitespace($string) {
    return ctype_alpha(str_replace(' ', '', $string));
}

echo containsOnlyLettersAndWhitespace('I love PHP') ? 'true' : 'false';
echo PHP_EOL;




#5.Write a PHP function to find the second largest number in an array of numbers.
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    foreach ($arr as $num) {
        if ($num > $largest) {
            $secondLargest = $largest;
            $largest = $num;
        } else if ($num > $secondLargest && $num < $largest) {
            $secondLargest = $num;
        }
    }

    return $secondLargest;
}

$arr1 = [3, 5, 2, 8, 1];
$arr2 = [1, 2, 3, 4, 5];
$arr3 = [9, 2, 6, 4, 7, 5];

echo findSecondLargest($arr1) . "\n"; //  output 5
echo findSecondLargest($arr2) . "\n"; // output 4
echo findSecondLargest($arr3) . "\n"; // output 7
