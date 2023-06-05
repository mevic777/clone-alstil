<?php
session_start();
include 'includes/header.php';
include 'db.php';
include "helpers.php";
?>

<main>
    <div class="container mt-2">
        <?php
        if (!isset($_SESSION['username'])) {
            cars_render($connection);
        ?>
            <a class="btn btn-primary link-underline-opacity-0 m-1" href="/login">Login</a>
            <a class="btn btn-primary link-underline-opacity-0 m-1" href="/register">Register</a>
            <?php } else {
            if ($_SESSION['admin']) {
                cars_render($connection);
            ?>
                <a class="btn btn-primary link-underline-opacity-0 m-1" href="/new-car">Add new car</a>
                <a class="btn btn-primary link-underline-opacity-0 m-1" href="/new-company">Add new company</a>
                <a class="btn btn-primary link-underline-opacity-0 m-1"><?= $_SESSION['username']; ?></a>
                <a class="btn btn-danger link-underline-opacity-0 m-1" href="/logout">Logout</a>
            <?php } else {
                cars_render($connection);
            ?>
                <a class="btn btn-primary link-underline-opacity-0 m-1"><?= $_SESSION['username']; ?></a>
                <a class="btn btn-danger link-underline-opacity-0 m-1" href="/logout">Logout</a>
        <?php }
        } ?>
    </div>
    <div class="container mt-3">
        <?php foreach ($connection->query('SELECT * FROM `cars`') as $car) {
            echo '<a class="link-secondary link-underline-opacity-0 m-1" href="/car?product=' . $car['product_link'] . '">' . $car['car_name'] . '</a>';
        } ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>