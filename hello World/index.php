<?php
echo "Hello World \n";

// Create a function that takes in two numbers as arguments and returns the result of adding them together.
function sum(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo 'sum of 5 , 3 is ' . sum(5, 3) . "\n";

// Create a function that takes in a string as an argument and returns the number of vowels in the string using a loop.
function countVowels(string $word): int
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $c = 0;
    foreach (str_split($word) as $l) {
        if (in_array($l, $vowels)) {
            $c++;
        }
    }
    return $c;
}

echo 'number of vowels in apple are ' . countVowels("apple") . "\n";

// Create a function that takes in a number and returns the result of raising it to the power of 3.
function powerOf3(int $num): int
{
    return pow($num, 3);
}

echo '5 to the power 3 is ' . powerOf3(5) . "\n";

// Create a function that takes in a number as an argument and returns true if it is even and false if it is odd.
function isEven(int $num): string
{
    if ($num % 2) {
        return 'false';
    } else {
        return 'true';
    }
}

echo '21 is even? ' . isEven(21) . "\n";

// Create a function that takes in a string as an argument and returns the string with all the characters in reverse order.
function reverse(string $word): string
{
    return strrev($word);
}

echo 'reverse of apple is ' . reverse('apple') . "\n";

// Create a function that takes in two numbers as arguments, and using a loop, returns the result of multiplying them together.
function multiply(int $num1, int $num2): int
{
    $ans = 0;
    for ($i = 0; $i < $num2; $i++) {
        $ans += $num1;
    }
    return $ans;
}

echo '5 * 3 is ' . multiply(5, 3) . "\n";

// Create a function that takes in an numbers and using a loop, returns the sum of all the numbers.
function sumOfNumbers(array $nums): int
{
    $ans = 0;
    foreach ($nums as $n) {
        $ans += $n;
    }
    return $ans;
}

echo 'sum of 1,2,3,4,5,6 is ' . sumOfNumbers([1, 2, 3, 4, 5, 6]) . "\n";

// Create a function that takes in a number as an argument and returns the result of finding the square root of that number.

$squareRoot = fn (int $num): int => sqrt($num);

echo 'square root of 16 is ' . $squareRoot(16) . "\n";

// Create a function that takes in a string as an argument and returns true if it is a palindrome, and false if it is not.
function isPalindrome(string $word): string
{
    $isPalindrome = 'true';
    $lenOfWord = strlen($word);
    for ($i = 0; $i < $lenOfWord / 2; $i++) {
        if ($word[$i] != $word[$lenOfWord - $i - 1]) {
            $isPalindrome = 'false';
            break;
        }
    }
    return $isPalindrome;
}

echo 'is apple is Palindrome?  ' . isPalindrome('apple') . "\n";
echo 'is racecar is Palindrome?  ' . isPalindrome('racecar') . "\n";


// Create a function that takes in a number as an argument and returns the result of finding the factorial of that number.
function factorial(int $num): int
{
    $ans = 1;
    for ($i = 1; $i <= $num; $i++) {
        $ans *= $i;
    }
    return $ans;
}

echo 'factorial of 5 is ' . factorial(5) . "\n";

// Create a function that takes in a number n as an argument and returns the result of finding the nth number in the Fibonacci sequence using recursion.
function fibonacci($num)
{
    if ($num <= 2) {
        return 1;
    }
    return fibonacci($num - 2) + fibonacci($num - 1);
}

echo '5th fibonacci number is ' . fibonacci(5) . "\n";

// Create a function that takes in a number as an argument and returns the factorial of that number using recursion.
function factRecurssion($num)
{
    if ($num <= 1) {
        return 1;
    }
    return $num * factRecurssion($num - 1);
}

echo 'factorial of 5 is ' . factRecurssion(5) . "\n";
