<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($password)) {
        $hashed_password = password_hash($password);
        $sql = "INSERT INTO `users` VALUES (NULL, '$first_name', '$last_name', '$username', '$hashed_password');";

        if ($connection->query($sql) === true) {
            echo 'Everything was inserted.';
            header('Location: home.php');
        } else {
            echo 'Nothing was inserted. ' . mysqli_error($connection);
        }
    } else {
        echo 'You must fill all the inputs.';
        header('Location: register.php');
    }
} else {
    echo 'Nothing was inserted. ' . mysqli_error($connection);
}