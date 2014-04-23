<nav>
    <ul>
        <li><a href="posts.php">Blog Posts</a></li>
        <li><a href="users.php">Registered Users</a></li>
    </ul>
</nav>

<?php if (hasFlashMessage()) : ?>
    <p><?php getFlashMessage(); ?></p>
<?php endif; ?>