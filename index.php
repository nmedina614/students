<?php


error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();
$f3->set("DEBUG", 3);



$f3 -> set('DEBUG', 3);
//define a page1 route


$f3->route('GET /', function() {

    echo "hello";

    /*$template = new Template();
    echo $template->render('views/home.html');*/

});




$f3->run();