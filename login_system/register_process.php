<?php

include '../db.php';

$first_time = 1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password`) VALUES (NULL, '$first_name', '$last_name', '$username', '$hashed_password');";

        if ($connection->query($sql) === true) {
            header('Location: register.php?first_time=' . $first_time);
        } else {
            echo 'Nothing was inserted. ' . mysqli_error($connection);
        }
    } else {
        $first_time = 2;
        header("Location: register.php?first_time=" . $first_time);
    }
} else {
    echo 'Nothing was inserted. ' . mysqli_error($connection);
}