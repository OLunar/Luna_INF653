<?php
// Input student's marks
$marks = 85; // change this value to test different inputs

// Assign grade based on marks
if ($marks >= 90) {
    $grade = 'A';
} elseif ($marks >= 80) {
    $grade = 'B';
} elseif ($marks >= 70) {
    $grade = 'C';
} elseif ($marks >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the result
echo "Input: $marks\n";
echo "Output: You got a $grade!\n";
?>
