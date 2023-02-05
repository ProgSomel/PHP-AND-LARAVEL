<?php
//! Constant
//? If Constant is defined then We can not changed the value of Constant 
define ('PI',3.1416);

echo "Value of PI is = ".PI;
echo "\n";
echo constant("PI");
$constant = 'constant';
echo "\n";
echo "Value of PI is ={$constant('PI')}";