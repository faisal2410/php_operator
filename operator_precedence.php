<?php
// Here are some code examples to demonstrate PHP operator precedence:

//✅ Arithmetic Operators:

// $a = 5;
// $b = 3;
// $c = 2;

// $result = $a + $b * $c; // Multiplication has higher precedence than addition
// echo $result; // Output: 11

//✅ Logical Operators:

// $isTrue = true;
// $isFalse = false;
// $isAnotherTrue = true;

// $result = $isTrue && $isFalse || $isAnotherTrue; // AND has higher precedence than OR
// var_dump($result); // Output: bool(true)


//✅ Comparison Operators:

// $a = 5;
// $b = 10;
// $c = 5;

// $result = $a < $b && $b >= $c; // Comparison operators have higher precedence than logical operators
// var_dump($result); // Output: bool(true)

// ✅Ternary Operator:

// $a = 5;
// $b = 10;

// $result = $a > $b ? "Greater" : "Smaller"; // Ternary operator has lower precedence than comparison operators
// echo $result; // Output: "Smaller"

// Assignment Operators:

// $a = 5;
// $b = 3;
// $c = 2;

// $a *= $b + $c; // Addition has higher precedence than assignment
// echo $a; // Output: 25

//✅ String Concatenation:

// $str1 = "Hello";
// $str2 = "World";
// $str3 = " from PHP";

// $result = $str1 . $str2 . $str3; // Concatenation has higher precedence than assignment
// echo $result; // Output: "HelloWorld from PHP"
