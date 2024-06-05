<?php
// Function to calculate the average of an array of grades
function calculateAverage($grades) {
    $total = 0;
    foreach ($grades as $grade) {
        $total += $grade;
    }
    return $total / count($grades);
}

// Function to determine the grade letter based on the average grade
function getGradeLetter($average) {
    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}
?>
