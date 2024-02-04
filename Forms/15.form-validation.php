<?php
    /*
        18. PHP Form Validation
        - The following example shows how to validate an HTML form with PHP:
            1. Check if the input fields are empty
            2. Check if the e-mail address is well-formed
            3. Check if the URL is well-formed
    */

    // Example 1: Check if the input fields are empty
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    // Example 2: Check if the e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Example 3: Check if the URL is well-formed
    if (!empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL";
        }
    }

