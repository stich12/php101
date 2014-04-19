<?php include 'header.php'; ?>

<?php include 'navigation.php'; ?>

    <section id="page">

        <form method="post" action="admin/contact-submit.php">
            <p>
                <label for="email">Email</label>
                <input name="email" type="text" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : null; ?>"/>
            </p>

            <p>
                <label for="name">Name</label>
                <input name="name" type="text" value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : null; ?>"/>
            </p>

            <p>
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30"
                          rows="10"><?= isset($_SESSION['message']) ? $_SESSION['message'] : null; ?></textarea>
            </p>

        </form>

    </section>

<?php include 'sidebar.php'; ?>

<?php include 'footer.php'; ?>