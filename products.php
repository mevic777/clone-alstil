<?php

include 'includes/header.php';
// include 'home.php';

?>
<section>
    <div class="container mt-2">
        <?php foreach ($connection->query("SELECT * FROM `cars` WHERE `company_link` LIKE '" . $company_parameter . "';") as $product) { ?>
            <div class="mt-1">
                <a href="car?product=<?= $product['product_link']; ?>"><?= $product['car_name']; ?></a>
            </div>
        <?php } ?>
    </div>
</section>
<?php include 'includes/footer.php'; ?>