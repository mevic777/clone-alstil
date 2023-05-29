<?php include 'includes/header.php'; ?>

    <section>
        <?php foreach ($connection->query("SELECT * FROM `cars` WHERE `company_link` LIKE '" . $company_parameter . "';") as $product) { ?>
            <div>
                <?= $product['car_name']; ?>
            </div>
        <?php } ?>
    </section>

<?php include 'includes/footer.php'; ?>