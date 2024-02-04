<?php
    /*
        11. PHP Conditional Statements
        - Conditional statements are used to perform different actions based on different conditions.
        - PHP has the following conditional statements:
            1. if statement - executes some code if one condition is true
            2. if...else statement - executes some code if a condition is true and another code if that condition is false
            3. if...elseif...else statement - executes different codes for more than two conditions
            4. switch statement - selects one of many blocks of code to be executed

        1. if statement
        - The if statement executes some code if one condition is true.
        - Syntax:
            if (condition) {
                code to be executed if condition is true;
            }
            */
        //- Example:
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day!";
        }

        /*
        2. if...else statement
        - The if...else statement executes some code if a condition is true and another code if that condition is false.
        - Syntax:
            if (condition) {
                code to be executed if condition is true;
            } else {
                code to be executed if condition is false;
            }
        */
        //- Example:
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        /*
        3. if...elseif...else statement
        - The if...elseif...else statement executes different codes for more than two conditions.
        - Syntax:
            if (condition) {
                code to be executed if this condition is true;
            } elseif (condition) {
                code to be executed if this condition is true;
            } else {
                code to be executed if all conditions are false;
            }
        */
        
        //- Example:
        $t = date("H");
        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        /*
        4. switch statement
        - The switch statement is used to perform different actions based on different conditions.
        - Syntax:
            switch (n) {
                case label1:
                    code to be executed if n=label1;
                    break;
                case label2:
                    code to be executed if n=label2;
                    break;
                case label3:
                    code to be executed if n=label3;
                    break;
                ...
                default:
                    code to be executed if n is different from all labels;
            }
        */

        //- Example:
        $favcolor = "red";
        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }

        /*
        - Note: The switch statement is used to select one of many blocks of code to be executed.
        - The switch statement is similar to a series of if statements on the same expression.
        - In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to.
        - This is exactly what the switch statement is for.
        */
?>