<?php
$name = "Earth";
$age = 12;
var_dump( $name ); //? It will show dataType and Value

var_dump( $age );

$name1 = "Somel";
$name2 = "Ahmed";
var_dump( $name1, $name2 );

$result = true;
var_dump( $result );

//! ---------Data Types ---------------

/*
Integer int
Double/Float
Boolean
Null
String
Array
Object
 */

$name = "Earth";
$upperName = strtoupper( $name );
echo "We're Living on {$upperName}";

//! --------------printf()----------
echo "\n";
printf( "We're living on %s", $name );

$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The Smallest planet is ".$planet1." and The biggest planet is ".$planet2."\n";

printf("The Smallest planet is %s and The biggest planet is %s\n ",$planet1,$planet2);
printf("The Smallest planet is %s and The biggest planet is %s\n ", strtoupper($planet1) , strtoupper($planet2) );