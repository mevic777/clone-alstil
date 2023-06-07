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
    <div class="container mt-3">
        <div class="button-container mb-3">
            <button class="btn btn-primary" data-btn="#first-block">First block</button>
            <button class="btn btn-primary" data-btn="#second-block">Second block</button>
            <button class="btn btn-primary" data-btn="#third-block">Third block</button>
            <button class="btn btn-primary" data-btn="#fourth-block">Fourth block</button>
        </div>
        <div class="block-container" style="gap: 10px;">
            <div class="col-md-3 block" id="first-block">
                <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, accusamus.</p>
            </div>
            <div class="col-md-3 block" id="second-block">
                <p>2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, tempore?</p>
            </div>
            <div class="col-md-3 block" id="third-block">
                <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
            </div>
            <div class="col-md-3 block" id="fourth-block">
                <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="pop-up-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>