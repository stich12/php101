<?php
require_once '../config/access.php';
require_once '../config/security.php';
?>
<!doctype html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<form action="login-submit.php" method="post">
    <p>
        <label for="username">Username</label>
        <input name="username" type="text"/>
    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" name="password"/>
    </p>

    <button type="submit">Login</button>

    <?= inputCSRF(); ?>
</form>
</body>
</html>