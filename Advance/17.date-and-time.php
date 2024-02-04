<?php
    /*
        20. PHP Date and Time
        - PHP Date and Time functions are used to format dates and times
        - The PHP date() function formats a timestamp to a more readable date and time
        - The PHP strtotime() function is used to convert a human-readable date to a timestamp
        - The PHP mktime() function returns the Unix timestamp for a date
        - The PHP time() function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
        - The PHP date_default_timezone_set() function sets the default timezone used by all date/time functions in a script
        - The PHP date_create() function returns a new DateTime object
        - The PHP date_format() function formats a DateTime object
        - The PHP date_add() function adds some days, months, years, hours, minutes, and seconds to a DateTime object
        - The PHP date_diff() function returns the difference between two DateTime objects
        - The PHP date_parse() function returns the details of a date
        - The PHP checkdate() function checks the validity of the date
        - The PHP strftime() function formats a local time/date according to locale settings
    */

    // Example 1: The PHP date() function
    echo "Today is " . date("Y/m/d") . "<br>";
    
    // Example 2: The PHP strtotime() function
    echo "Created date is " . date("Y-m-d h:i:sa", strtotime("2019-03-21 15:00:00")) . "<br>";

    // Example 3: The PHP mktime() function
    $d = mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

    // Example 4: The PHP time() function
    echo "The current time is " . time() . "<br>";

    // Example 5: The PHP date_default_timezone_set() function
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa") . "<br>";

    // Example 6: The PHP date_create() function
    $date = date_create("2013-03-15");
    echo date_format($date, "Y/m/d") . "<br>";

    // Example 7: The PHP date_add() function
    $date = date_create("2013-03-15");
    date_add($date, date_interval_create_from_date_string("40 days"));
    echo date_format($date, "Y/m/d") . "<br>";

    // Example 8: The PHP date_diff() function
    $date1 = date_create("2013-03-15");
    $date2 = date_create("2013-12-12");
    $diff = date_diff($date1, $date2);
    echo $diff->format("The difference between two dates is: %R%a days") . "<br>";

    // Example 9: The PHP date_parse() function
    print_r(date_parse("2013-03-15 12:34:45.678"));
    echo "<br>";

    // Example 10: The PHP checkdate() function
    var_dump(checkdate(12, 31, 2000));
    echo "<br>";

    // Example 11: The PHP strftime() function
    setlocale(LC_TIME, "en_US");
    echo strftime("%A %d %B %Y %X") . "<br>";
?>
