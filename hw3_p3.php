<?php

// accepts user input and assigns to a variable
$dollarAmount = readline("\nEnter the dollar amount: $");

// tests to see if the dollar amount is a valid value (any positive number)
// if not valid, the code block is skipped
if ($dollarAmount >= 0) {

    // converts the dollar amount to cents
    $cents = ceil(($dollarAmount * 100));



    // QUARTERS

    // determines the number of quarters needed by dividing the cents value by 25 and rounding down to the integer
    $numberOfQuarters = floor($cents / 25);
    // calculates the remaining cents using modulo
    $cents = $cents % 25;

    // prints the number of quarters to the console
    echo "\nQuarters: " . $numberOfQuarters;



    // DIMES
        
    // determines the number of dimes needed by dividing the cents value by 10 and rounding down to the integer
    $numberOfDimes = floor($cents / 10);
    // calculates the remaining cents using modulo
    $cents = $cents % 10;
    // prints the number of dimes to the console
    echo "\nDimes: " . $numberOfDimes;
    


    // NICKELS
        
    // determines the number of nickels needed by dividing the cents value by 5 and rounding down to the integer
    $numberOfNickels = floor($cents / 5);
    // calculates the remaining cents using modulo
    $cents = $cents % 5;
    // prints the number of dimes to the console
    echo "\nNickels: " . $numberOfNickels;
    


    // PENNIES

    // prints the number of pennies to the console (all remaining cents)
    echo "\nPennies: " . $cents . "\n\n";
    
}


// if the user entered value is not valid (anything other than a positive number), then this code block runs
else {
    // prints a message to the console
    echo "\nInvalid dollar value. Please try again.\n\n";
}


?>