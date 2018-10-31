<?php
require_once ('vendor/autoload.php');

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function (){
    $view = new View();
    echo $view->render('views/page1.html');
});
//Define a default route
$f3->route('GET /page1', function (){
    echo '<h1>Git Lab: Page 1 is done.</h1>';
    $view = new View();
    echo $view->render('views/page1.html');
});

$f3->route('GET /page2/@param', function (){
    echo '<h1>Git Lab: Page 2 is done.{{@param}}</h1>';

});

// Run fat free
$f3->run();