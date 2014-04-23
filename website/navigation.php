<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['user'])) : ?>
            <li>
                <form action="admin/logout.php" method="post">
                    <button type="submit">Logout</button>
                    <?= inputCSRF(); ?>
                </form>
            </li>
        <?php else : ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>

        <li><a href="register.php">Register</a></li>
    </ul>
</nav>