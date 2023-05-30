<?php

include '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_REQUEST['company'];
    $car_model = $_REQUEST['car-model'];

    $company_link = strtolower($company_name);
    $car_link = $company_link . '-' . strtolower($car_model);

    $sql = "INSERT INTO `cars`(`id`, `car_name`, `company_link`, `product_link`) VALUES (NULL, '$car_model', '$company_link', '$car_link');";

    if ($connection->query($sql) === true) {
        echo "Everything was inserted.";
        header("Location: ../home.php");
    } else {
        echo "Nothing was inserted. " . mysqli_error($connection);
    }
} else {
    echo "Nothing was inserted.";
}