<?php include 'includes/header.php'; ?>

<div class="container mt-2">
    <form action="login_process.php" method="POST">
        <input class="form-control" type="text" placeholder="Username">
        <input class="form-control" type="password" placeholder="Password">
        <button class="btn btn-primary mb-3" type="submit">Submit</button>
    </form>
    <a class="link-primary" href="/register">Don't have an account ?</a>
</div>

<?php include 'includes/footer.php'; ?>