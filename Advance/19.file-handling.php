<?php 
    /*
        22. PHP File Handling
        - The file functions allow us to work with files.
        - The file functions allow us to create, read, write, and delete files.
    */

    // Example 1: Open a file
    $file = fopen("welcome.txt", "r") or die("Unable to open file!");
    echo fread($file, filesize("welcome.txt"));
    fclose($file);

    // Example 2: Create a file
    $file = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($file, $txt);
    
    $txt = "Jane Doe\n";
    fwrite($file, $txt);
    fclose($file);  

    // Example 3: Read a file
    $file = fopen("welcome.txt", "r") or die("Unable to open file!");
    echo fread($file, filesize("welcome.txt"));
    fclose($file);

    // Example 4: Read a single line
    $file = fopen("welcome.txt", "r") or die("Unable to open file!");
    echo fgets($file);
    fclose($file);

    // Example 5: Check end-of-file
    $file = fopen("welcome.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);

    // Example 6: Read a single character
    $file = fopen("welcome.txt", "r") or die("Unable to open file!");
    echo fgetc($file);
    fclose($file);

    // Example 7: Write to a file
    $file = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($file, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($file, $txt);
    fclose($file);

    // Example 8: Append to a file
    $file = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($file, $txt);
    $txt = "Daisy Duck\n";
    fwrite($file, $txt);
    fclose($file);
?>
