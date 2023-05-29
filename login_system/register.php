<?php include 'includes/header.php'; ?>

    <div class="container">
        <form action="register_process.php" method="POST">
            <input type="text" placeholder="First name" name="first_name">
            <input type="text" placeholder="Last name" name="last_name">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Submit</button>
        </form>
        <a href="/login">Login</a>
    </div>

<?php include 'includes/footer.php'; ?>