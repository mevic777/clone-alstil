<?php
    include "includes/header.php";
?>

<div class="container mt-2">
    <form action="../add_new_company/new_company_process.php" method="POST">
        <input class="form-control" type="text" placeholder="Company name" name="company">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
