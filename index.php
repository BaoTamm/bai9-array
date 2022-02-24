<?php
// /* First method to create array. */
// $numbers = array(1, 2, 3, 4, 5);

// foreach( $numbers as $value ) {
//     echo "Value is $value <br />";
// }
// /* Second method to create arry. */
// $numbers[0] = "one";
// $numbers[1] = "two";
// $numbers[2] = "three";
// $numbers[3] = "four";
// $numbers[4] = "five";

// foreach( $numbers as $value ) {
//     echo "Value is $value <br />";
// }

/* First method to associate crete array. */
$salaries = array(
    "mohammad" => 2000,
    "qudir" => 1000,
    "zara" => 500
);
echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
?>