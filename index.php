<?php

include 'db.php';
$request = explode('?', $_SERVER['REQUEST_URI']);
$url = $request[0];

switch ($url) {
    case '/':
        include 'home.php';
        break;
    case '/products':
        $company_parameter = $_GET['company'];

        if ($company_parameter) {
            $check_company = $connection->query("SELECT * FROM `cars` WHERE `company_link` LIKE '$company_parameter';");

            if ($check_company->num_rows > 0) {
                include 'products.php';
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
        break;
    case '/login':
        include 'login_system/login.php';
        break;
    case '/register':
        include 'login_system/register.php';
        break;
    case '/new-car':
        include 'new-car.php';
        break;
}
