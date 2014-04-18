<?php include 'header.php'; ?>

<?php include_once 'navigation.php'; ?>

  <form action="admin/login-submit.php" method="post">

    <p>
      <label for="username">Username</label>
      <input type="text" name="username" value="" />
    </p>

    <p>
      <label for="password">Password</label>
      <input type="password" name="password" value="" />
    </p>

    <button type="submit">Register</button>

    <?= inputCSRF(); ?>

  </form>

<?php require 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>