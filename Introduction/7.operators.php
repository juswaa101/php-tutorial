<?php
    /*
        10. PHP Operators
        - Operators are used to perform operations on variables and values.
        - PHP divides the operators into the following groups:
            1. Arithmetic operators
            2. Assignment operators
            3. Comparison operators
            4. Increment/Decrement operators
            5. Logical operators
            6. String operators
            7. Array operators
    */
    
    // 1. Arithmetic operators
    $x = 10;
    $y = 6;
    echo $x + $y; // outputs 16
    echo $x - $y; // outputs 4
    echo $x * $y; // outputs 60
    echo $x / $y; // outputs 1.6666666666667
    echo $x % $y; // outputs 4
    echo $x ** $y; // outputs 1000000

    // 2. Assignment operators
    $x = 10;
    echo $x; // outputs 10
    $x += 20;
    echo $x; // outputs 30
    $x -= 10;
    echo $x; // outputs 20
    $x *= 10;
    echo $x; // outputs 200
    $x /= 10;
    echo $x; // outputs 20
    $x %= 10;
    echo $x; // outputs 0

    // 3. Comparison operators
    $x = 100;
    $y = "100";
    var_dump($x == $y); // outputs true
    var_dump($x === $y); // outputs false
    var_dump($x != $y); // outputs false
    var_dump($x !== $y); // outputs true
    var_dump($x > $y); // outputs false
    var_dump($x < $y); // outputs false
    var_dump($x >= $y); // outputs true
    var_dump($x <= $y); // outputs true

    // 4. Increment/Decrement operators
    $x = 10;
    echo ++$x; // outputs 11
    echo $x++; // outputs 11
    echo --$x; // outputs 11
    echo $x--; // outputs 11

    // 5. Logical operators
    $x = 100;
    $y = 50;

    // and (&&) - true if both $x and $y are true
    if ($x == 100 && $y == 50) {
        echo "Hello World!";
    }

    // or (||) - true if either $x or $y is true
    if ($x == 100 || $y == 80) {
        echo "Hello World!";
    }
    
    // xor - true if either $x or $y is true, but not both
    if ($x == 100 xor $y == 80) {
        echo "Hello World!";
    }

    // not (!) - true if $x is not true
    if ($x !== 90) {
        echo "Hello World!";
    }

    // 6. String operators
    $txt1 = "Hello";
    $txt2 = "World!";
    echo $txt1 . " " . $txt2; // outputs Hello World!

    // 7. Array operators
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    print_r($x + $y); // outputs Array ( [a] => red [b] => green [c] => blue [d] => yellow )