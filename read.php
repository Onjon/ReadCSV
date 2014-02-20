<?php
/*
@Author Name : Onjon Shahadat Hossain
@Email : onjon_sh@yahoo.com

@Project Name : Read a CSV File
@Version : 1.0.1
@Release Date : 28th October, 2013
*/ 

// File Open As Read Mode 
$fo = fopen( 'Ticket.csv' , 'r' ) ;
// Loop until the last line 
while( $line = fgets( $fo ) ) {
    // Initialize a string variable 
    $ticket = "" ;
    // Find the Content Length of each line
    $len = strlen( $line ) ;
    
    for( $i = 0 ; $i < $len ; $i++ ) {
        // Skip spaces and other special character
        if( ( $line[ $i ] >= '0' && $line[ $i ] <= '9' ) || ( $line[ $i ] >= 'a' && $line[ $i ] <= 'z' ) || ( $line[ $i ] >= 'A' && $line[ $i ] <= 'Z' ) ) {
            // Set Ticket 
            $ticket .= $line[ $i ] ;
        }
    }
    // Print Tickets 
    echo "......" . $ticket . "....." . "<br/>" ;
}
// Close File 
fclose( $fo ) ;
?>