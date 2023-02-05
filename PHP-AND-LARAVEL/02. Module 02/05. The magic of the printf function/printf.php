<?php
$fname = "Isaac";
$lname = "Newton";

printf( 'His Name is %2$s %1$s', $fname, $lname );
printf( 'The binary equivalent of %1$d is %1$b ', 12 );

echo "\n";

$n = 45.126;
printf( "%.2f", $n );

echo "\n";

$m = 123; //? Do it like this 0123
$n = 27; //? Do it like this 027

printf( "%04d", $m );
printf( "%04d", $n );

echo "\n";

$o = 123.3243; //? Do it like this 0123
$k = 27.155; //? Do it like this 027

printf( "%08.2f", $o );

echo "\n";
printf( "%08.2f", $k );