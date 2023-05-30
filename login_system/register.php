<?php include "$_SERVER[DOCUMENT_ROOT]/includes/header.php"; ?>

    <div class="container mt-2">
        <form action="../login_system/register_process.php" method="POST">
            <input class="form-control" type="text" placeholder="First name" name="first_name">
            <input class="form-control" type="text" placeholder="Last name" name="last_name">
            <input class="form-control" type="text" placeholder="Username" name="username">
            <input class="form-control" type="password" placeholder="Password" name="password">
            <button class="btn btn-primary mb-3" type="submit">Register</button>
            <br>
            <?php
                if ($_GET['first_time'] == 2) {
                    echo '<p class="text-danger">You must fill all the gaps.</p>';
                } elseif ($_GET['first_time'] == 1) {
                    echo '<p class="text-success">You registered.</p>';
                } else {
                    echo "";
                }
            ?>
        </form>
        <a class="link-primary" href="/login">Have already an account ?</a>
        <a class="link-primary" href="/">Home</a>
    </div>

<?php include "$_SERVER[DOCUMENT_ROOT]/includes/footer.php"; ?>