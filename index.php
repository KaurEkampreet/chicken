<?php
/*Ekampreet Kaur
* date: Jan/15/2020
* URL: http://ekaur.greenriverdev.com/328/chicken/index.php
* description:
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require autload file
require("vendor/autoload.php");


//instantiate F3
$f3 = Base::instance();

//DEFINE A DEFAULT ROUTE
$f3->route('GET /', function() {
    echo "Hello";
});

//runf3
$f3->run();



?>
