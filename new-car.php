<?php include 'includes/header.php'; ?>

<div>
    <form action="process.php" method="POST">
        <select name="company">
            <?php foreach ($connection->query("SELECT * FROM COMPANY;") as $company) { ?>
                <option value="<?php echo $company['name']; ?>"><?= $company['name']; ?></option>
            <?php } ?>
        </select>
        <input type="text" placeholder="Car model" name="car-model">
        <button type="submit">Add</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
