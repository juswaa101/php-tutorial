<?php
    /*
        21. PHP Include
        - The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
        - Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.
        - The include and require statements are identical, except upon failure:
            - include will produce a warning (E_WARNING) and the script will continue
            - require will produce a fatal error (E_COMPILE_ERROR) and the script will stop
    */

    // Example 1: Include a PHP file
    include 'footer.php';

    // Example 2: Include a HTML file
    include 'footer.html';

    // Example 3: Include a file with a function
    include 'functions.php';
    echo "The sum of 2 and 3 is " . sum(2, 3) . "<br>";
?>