<?php
require_once ('vendor/autoload.php');
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function (){
    echo '<h1>Git Lab</h1>';
});

// Run fat free
$f3->run();