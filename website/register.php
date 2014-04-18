<?php include 'header.php'; ?>

<?php include_once 'navigation.php'; ?>

  <section id="page">

    <form action="admin/register-submit.php" method="post">

      <p>
        <label for="username">Username</label>
        <input type="text" name="username" value="" />
      </p>

      <p>
        <label for="password">Password</label>
        <input type="password" name="password" value="" />
      </p>

      <p>
        <label for="color">Favorite Color</label>
        <input name="color" type="text" value="" />
      </p>

      <button type="submit">Register</button>

      <?= inputCSRF(); ?>
    </form>

  </section>

<?php require 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>