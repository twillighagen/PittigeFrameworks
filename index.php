<?php

include_once 'Http\Request.php';
include_once 'Http\Router.php';
$router = new Router(new Request);

$router->get('/', function() {
    return <<<HTML
  <h1>Profile</h1>
HTML;
});