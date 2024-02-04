<?php
    /*
    13. PHP Functions
    - A function is a block of statements that can be used repeatedly in a program.
    - A function will not execute immediately when a page loads.
    - A function will be executed by a call to the function.
    - Syntax:
        function functionName() {
            code to be executed;
        }
    */

    //- Example:
    // 1. Creating a function
    function writeMsg() {
        echo "Hello world!";
    }
    // 2. Calling a function
    writeMsg();
    echo "<br>";

    // 3. Function with parameters
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");

    // 4. Function with multiple parameters
    function familyName2($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }

    familyName2("Hege", "1975");
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983");

    // 5. The return statement
    function addNumbers($a, $b) {
        $sum = $a + $b;
        return $sum;
    }
    echo "5 + 10 = " . addNumbers(5, 10) . "<br>";
    echo "7 + 13 = " . addNumbers(7, 13) . "<br>";

    // 6. PHP Function Arguments
    // - Information can be passed to functions through arguments.
    // - Arguments are specified after the function name, inside the parentheses.
    // - You can add as many arguments as you want, just separate them with a comma.
    // - The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function to write out the family name:
    function familyName3($fname) {
        echo "$fname Refsnes.<br>";
    }
    familyName3("Jani");
    familyName3("Hege");
    familyName3("Stale");
    familyName3("Kai Jim");

    // 7. PHP Default Argument Value
    // - The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);

    // 8. PHP Functions - Returning values
    // - To let a function return a value, use the return statement:
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";

?>
