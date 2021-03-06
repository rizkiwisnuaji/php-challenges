<?php

$palindrome = ["Madam", "lol", "mom", "daD", "teSt", "levEel"];

echo nl2br( "==========================\n");

// OVERKILL ?
foreach ( $palindrome as $row )
{
	if ( strtolower($row) === strrev(strtolower($row)) ) {
		
		echo nl2br( strtolower($row) . " is PALINDROME ! \n\n");
		
	} else {
		
		echo nl2br( strtolower($row) . " is NOT PALINDROME ! \n\n");
		
	}
	
}

echo nl2br( "==========================\n\n");

echo nl2br( "==========================\n");

// BETTER ?
foreach ( $palindrome as $row )
{
	
	if ( strtolower($row[0] . $row[1] . $row[2]) === strtolower($row[strlen($row) - 1] . $row[strlen($row) - 2] . $row[strlen($row) - 3]) ) {
		
		echo nl2br(strtolower($row) . " is PALINDROME ! \n\n");
			
	} else {
	
		echo nl2br(strtolower($row) . " is NOT PALINDROME ! \n\n");
		
	}
	
	
}

echo nl2br( "==========================\n\n");
