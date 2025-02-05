<?php
// Define the numbers
$number1 = 10;
$number2 = 5;

// Perform operations
$addition = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;

if ($number2 != 0) {
    $division = $number1 / $number2;
    $modulus = $number1 % $number2;
} else {
    $division = "undefined (division by zero)";
    $modulus = "undefined (modulus by zero)";
}

// Display results
echo "Number 1: $number1\n";
echo "Number 2: $number2\n";
echo "Addition: $addition\n";
echo "Subtraction: $subtraction\n";
echo "Multiplication: $multiplication\n";
echo "Division: $division\n";
echo "Modulus: $modulus\n";
?>
