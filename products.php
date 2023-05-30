<?php include 'includes/header.php'; ?>
    <section>
        <div class="container mt-2">
            <?php foreach ($connection->query("SELECT * FROM `cars` WHERE `company_link` LIKE '" . $company_parameter . "';") as $product) { ?>
                <div class="mt-1">
                    <?= $product['car_name']; ?>
                </div>
            <?php } ?>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>