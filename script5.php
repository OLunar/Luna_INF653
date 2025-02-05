<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return true; // Divisible by 400
            } else {
                return false; // Divisible by 100 but not by 400
            }
        } else {
            return true; // Divisible by 4 but not by 100
        }
    } else {
        return false; // Not divisible by 4
    }
}

// Input year
$year = 2024; // You can change this value to test different inputs

// Check if the year is a leap year
if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>
