<?php
    /*
        15. PHP Superglobals
        - Superglobals are built-in variables that are always available in all scopes.
        - PHP has several superglobal variables:
            1. $GLOBALS
            2. $_SERVER
            3. $_REQUEST
            4. $_POST
            5. $_GET
            6. $_FILES
            7. $_ENV
            8. $_COOKIE
            9. $_SESSION
        - These are associative arrays.
    */

    //- Example:
    // 1. $GLOBALS
    $x = 75;
    $y = 25;
    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;

    // 2. $_SERVER
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    
    // 3. $_REQUEST
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

    // 4. $_POST
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
    
    // 5. $_GET
    echo "<a href='test_get.php?subject=PHP&web=W3schools.com'>Test $GET</a>";
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

    // 6. $_FILES
    echo '<form action="" method="post" enctype="multipart/form-data">';
    echo '<input type="file" name="file">';
    echo '<input type="submit" name="submit" value="Upload">';
    echo '</form>';

    // 7. $_ENV
    echo "My username is " . $_ENV["USER"] . "<br>";

    // 8. $_COOKIE
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    // 9. $_SESSION
    session_start();
    $_SESSION['color'] = "red";
    $_SESSION['animal'] = "cat";
    echo "Session variables are set.";
?>
