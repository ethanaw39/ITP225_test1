<?php

// prints a message to the screen and accepts user input
$method = readline("\nUse md5 or sha1 to hash your sentence? ");

// tests the user entered value, if equivalent to "md5" the code block runs
if ($method == "md5") {

    // prints a message to the screen and accepts user input
    $sentence = readline("Enter a sentence: ");
    
    // trims the whitespace off of each end of the string
    $sentence = trim($sentence," ");

    // converts the string to lowercase characters
    $sentence = strtolower($sentence);
   
    // prints the hashed string to the screen
    echo md5($sentence . "\n");
}

// tests the user entered value, if equivalent to "sha1" the code block runs
elseif ($method == "sha1") {
    
    // prints a message to the screen and accepts user input
    $sentence = readline("Enter a sentence: ");
    
    // trims the whitespace off of each end of the string
    $sentence = trim($sentence," ");

    // converts the string to lowercase characters
    $sentence = strtolower($sentence);

    // prints the hashed string to the screen
    echo sha1($sentence . "\n");
}

// runs if neither statement above equates to true
else {
    // prints a message to the screen. 
    echo "Sorry, please enter a valid method";
}


?>