<?php
/**
 * Activity #3: Grade Evaluator
 */

$versoza_ct_wa = 88;
$versoza_ct_mad = 92;
$versoza_pe = 85;
$versoza_is_dcn = 78;
$versoza_ge_sts = 90;


$versoza_total = $versoza_ct_wa + $versoza_ct_mad + $versoza_pe + $versoza_is_dcn + $versoza_ge_sts;
$versoza_average = $versoza_total / 5;


if ($versoza_average >= 74.5) {
    $versoza_remark = "Passed";
} else {
    $versoza_remark = "Failed";
}

if ($versoza_average >= 90 && $versoza_average <= 100) {
    $versoza_letter_grade = "A";
} elseif ($versoza_average >= 80 && $versoza_average <= 89) {
    $versoza_letter_grade = "B";
} elseif ($versoza_average >= 70 && $versoza_average <= 79) {
    $versoza_letter_grade = "C";
} elseif ($versoza_average >= 60 && $versoza_average <= 69) {
    $versoza_letter_grade = "D";
} else {
    $versoza_letter_grade = "F";
}


echo "Average Grade: " . number_format($versoza_average, 2) . "\n";
echo "Remark: " . $versoza_remark . "\n";
echo "Letter Grade: " . $versoza_letter_grade . "\n";
?>