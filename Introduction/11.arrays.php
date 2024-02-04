<?php
    /*
        14. PHP Arrays
        - An array stores multiple values in one single variable.
        - In PHP, there are three types of arrays:
            1. Indexed arrays - Arrays with a numeric index
            2. Associative arrays - Arrays with named keys
            3. Multidimensional arrays - Arrays containing one or more arrays
        - Syntax:
            $arrayName = array(value1, value2, value3, ...);
    */

    //- Example:
    // 1. Indexed arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";

    // 2. Associative arrays
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age['Peter'] . " years old.<br>";

    // 3. Multidimensional arrays
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    echo "I like " . $cars[0][0] . ", " . $cars[1][0] . " and " . $cars[2][0] . "<br>";

    // 4. Loop through an indexed array
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // 5. Loop through an associative array
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // 6. Loop through a multidimensional array
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    // 7. Sorting indexed arrays
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    $clength = count($cars);

    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // 8. Sorting associative arrays
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // 9. Sorting associative arrays in descending order
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // 10. Sorting indexed arrays in descending order
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
    $clength = count($cars);
    for ($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // 11. Sorting associative arrays according to the key
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // 12. Sorting associative arrays according to the key in descending order
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    krsort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }