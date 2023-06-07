<?php

session_start();
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_input = $_REQUEST['username'];
    $password_input = $_REQUEST['password'];

    $sql = "select * from users where username like '$username_input';";
    $data_db = $connection->query($sql)->fetch_array();

    if ($username_input == $data_db['username'] && password_verify($password_input, $data_db['password'])) {
        $_SESSION["username"] = $data_db["username"];
        $_SESSION["admin"] = $data_db["admin"];
        header("Location: ../home.php");
    } else {
        echo "Login failed.";
    }
} else {
    return false;
}
