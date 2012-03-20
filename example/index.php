<?php 

require '../ham/ham.php';

$beans = new Ham('beans');
$beans->route('/', function($app) {
    return "Beans home.";
});
$beans->route('/baked', function($app) {
    return "Yum!";
});

$app = new Ham('example');
$app->route('/', function($app) {
    return "Home.";
});

$app->route('/hello/<string>', function($app, $name) {
    return $app->render('hello.html', array(
        'name' => $name
    ));
});

$app->route('/beans', $beans);
$app->run();