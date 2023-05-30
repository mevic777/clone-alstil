<?php

include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_REQUEST["company"];
    $company_link = strtolower($company);

    $sql = "INSERT INTO `COMPANY`(`id`, `name`, `link`) VALUES (null, '$company', '$company_link');";
    if ($connection->query($sql) === true) {
        echo "Company was inserted.";
        header("Location: ../home.php");
    } else {
        echo "Company was not inserted. " . mysqli_error($connection);
    }
} else {
    echo "Error";
}