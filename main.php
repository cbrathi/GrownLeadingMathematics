<?php
// Include the functions file
include 'functions.php';

// Declare variables of different data types
$studentName = "John Doe";  // String
$studentAge = 20;          // Integer
$studentGrades = [88, 76, 92, 85];  // Array

// Calculate the average grade using a custom function
$averageGrade = calculateAverage($studentGrades);

// Determine the grade letter using a decision-making structure
$gradeLetter = getGradeLetter($averageGrade);

// Output the results
echo "Student Name: $studentName<br>";
echo "Student Age: $studentAge<br>";
echo "Student Grades: " . implode(", ", $studentGrades) . "<br>";
echo "Average Grade: $averageGrade<br>";
echo "Grade Letter: $gradeLetter<br>";
?>
