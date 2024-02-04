<?php
    /*
        12. PHP Loops
        - Loops are used to execute the same block of code again and again, as long as a certain condition is true.
        - PHP has the following loop types:
            1. while - loops through a block of code as long as the specified condition is true
            2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
            3. for - loops through a block of code a specified number of times
            4. foreach - loops through a block of code for each element in an array
        - Loop control statements:
            1. break - it ends the current loop
            2. continue - it skips the current iteration of the loop
    */

    //- Example:
    // 1. while loop
    $x = 1;
    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    
    // 2. do...while loop
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);

    // 3. for loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    // 4. foreach loop
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }

    // 5. break and continue
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }

    for ($x = 0; $x <= 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
?>