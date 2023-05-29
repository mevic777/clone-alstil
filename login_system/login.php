<?php include 'includes/header.php'; ?>

<div class="container">
    <form action="login_process.php" method="POST">
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
    <a href="/register"></a>
</div>

<?php include 'includes/footer.php'; ?>