<?php
    /*
        17. PHP Form Handling
        - The PHP superglobals $_GET and $_POST are used to collect form data.
        - The PHP $_REQUEST superglobal variable is used to collect data after submitting an HTML form.
        - The PHP $_REQUEST superglobal variable can also collect data sent with the GET method, but POST method is more secure and reliable.
        - Syntax:
            $_REQUEST
            $_POST
            $_GET
            $_FILES
    */

    // 1. $_REQUEST
    echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
    echo "Name: <input type='text' name='fname'>";
    echo "<input type='submit'>";
    echo "</form>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    // 2. $_POST
    echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
    echo "Name: <input type='text' name='fname'>";
    echo "<input type='submit'>";
    echo "</form>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

    // 3. $_GET
    echo "<a href='test_get.php?subject=PHP&web=W3schools.com'>Test $GET</a>";
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

    // 4. $_FILES
    echo '<form action="" method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="file">';
    echo '<input type="submit" name="submit" value="Upload">';
    echo '</form>';
?>