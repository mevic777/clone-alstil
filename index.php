<?php

$connection = new mysqli('localhost', 'root', '', 'project');
$request = explode('?', $_SERVER['REQUEST_URL']);
$url = $request[0];

switch ($url) {
    case '/':
        include 'home.php';
        break;
    case '/category':
        $category_parameter = $_GET['category'];
}
