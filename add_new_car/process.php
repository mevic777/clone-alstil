<?php

include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_REQUEST['company'];
    $car_model = $_REQUEST['car-model'];

    $company_link = strtolower($company_name);
    $db_car_link = str_replace(" ", "-", strtolower($car_model));
    $car_link = $company_link . '-' . $db_car_link;

    $sql = "INSERT INTO `cars`(`id`, `car_name`, `company_link`, `product_link`, `company_name`) VALUES (NULL, '$car_model', '$company_link', '$car_link', '$company_name');";

    if ($connection->query($sql) === true) {
        echo "Everything was inserted.";
        header("Location: ../home.php");
    } else {
        echo "Nothing was inserted. " . mysqli_error($connection);
    }
} else {
    echo "Nothing was inserted.";
}
