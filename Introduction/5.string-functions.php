<?php
    /*
        8. PHP String Functions
        - PHP has a lot of built-in functions to handle strings.
        - Some of the most commonly used string functions are:
            1. strlen() - returns the length of a string
            2. str_word_count() - counts the number of words in a string
            3. strrev() - reverses a string
            4. strpos() - searches for a specific text within a string
            5. str_replace() - replaces some characters with some other characters in a string
    */

      // Example:
      echo strlen("Hello World!"); // outputs 12
      echo str_word_count("Hello World!"); // outputs 2
      echo strrev("Hello World!"); // outputs !dlroW olleH
      echo strpos("Hello World!", "World"); // outputs 6
      echo str_replace("World", "Dolly", "Hello World!"); // outputs Hello Dolly!