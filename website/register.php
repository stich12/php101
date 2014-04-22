<?php include 'header.php'; ?>

<?php include_once 'navigation.php';
var_dump($_COOKIE);
?>

    <section id="page">

        <form action="admin/register-submit.php" method="post">

            <p>
                <label for="username">Username</label>
                <input type="text" name="username"
                       value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>"/>
            </p>

            <p>
                <label for="password">Password</label>
                <input type="password" name="password"
                       value="<?= isset($_SESSION['password']) ? $_SESSION['password'] : null; ?>"/>
            </p>

            <p>
                <label for="color">Favorite Color</label>
                <input name="color" type="text" value="<?= isset($_SESSION['color']) ? $_SESSION['color'] : null; ?>"/>
            </p>

            <button type="submit">Register</button>

            <?= inputCSRF(); ?>
        </form>

    </section>

<?php require 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>