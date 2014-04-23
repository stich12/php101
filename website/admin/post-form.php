<?php
require_once 'admin-header.php';
?>

    <form method="post" action="post-form-submit.php">

        <p>
            <label for="title">Title</label>
            <input type="text" name="title" value="<?= isset($_SESSION['title']) ? $_SESSION['title'] : null; ?>"/>
        </p>

        <p>
            <label for="content">Content</label>
            <textarea
                name="content"
                id="content"
                cols="30"
                rows="10"><?= isset($_SESSION['content']) ? $_SESSION['content'] : null; ?></textarea>
        </p>

        <button type="submit">Save Post</button>

        <?= inputCSRF(); ?>

    </form>

<?php
require_once 'admin-footer.php';
?>