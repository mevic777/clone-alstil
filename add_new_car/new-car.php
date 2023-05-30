<?php include 'includes/header.php'; ?>

<div class="container mt-2">
    <form action="../add_new_car/process.php" method="post">
        <select name="company" class="form-select">
            <?php foreach ($connection->query("SELECT * FROM COMPANY;") as $company) { ?>
                <option value="<?php echo $company['name']; ?>"><?= $company['name']; ?></option>
            <?php } ?>
        </select>
        <input class="form-control" type="text" placeholder="Car model" name="car-model">
        <button class="btn btn-primary" type="submit">Add</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
