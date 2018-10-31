<?php
require_once ('vendor/autoload.php');

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function (){
    echo '<h1>Git Lab</h1>
          <p>Hello from Joseph</p>'
    ;
});
//Define a default route
$f3->route('GET /page1', function (){
    echo '<h1>Git Lab: Page 1 is done.</h1>';

});
$f3->route('GET /page2', function (){
    echo '<h1>Git Lab: Page 2 is done.</h1>';

});

// Run fat free
$f3->run();