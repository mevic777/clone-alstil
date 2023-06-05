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
    case '/car':
        $product_parameter = $_GET['product'];

        if ($product_parameter) {
            $product = $connection->query("select * from cars where product_link like '$product_parameter';");
            $product = $product->fetch_array();

            if ($product) {
                include 'car.php';
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }

        break;
    case '/new-car':
        include './add_new_car/new-car.php';
        break;
    case '/login':
        include './login_system/login.php';
        break;
    case '/logout':
        include './login_system/logout.php';
        break;
    case '/register':
        include './login_system/register.php';
        break;
    case '/new-company':
        include './add_new_company/new_company.php';
        break;
    default:
        break;
}
