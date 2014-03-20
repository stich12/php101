<?php
  session_start();
  require_once('access.php');
  require_once('database.php');
?>
<!doctype html>
<html>
  <head>
    <title>Guest Book App</title>
    <style>
      .error {
        color: red;
      }
    </style>
  </head>
  <body>
    <?php if (isset($_SESSION['error'])) : ?>
    <p class="error"><?= $_SESSION['error']; ?></p>
    <?php endif; ?>
    <form action="process-form.php" method="post" enctype="multipart/form-data">
      <p>
        <label for="Name">Name</label>
        <input type="text" name="Name" value="<?= isset($_SESSION['Name']) ? $_SESSION['Name'] : null ?>">
      </p>
      <p>
        <label for="Email">Email</label>
        <input type="text" name="Email" value="<?= isset($_SESSION['Email']) ? $_SESSION['Email'] : null ?>">
      </p>
      <p>
        <label for="Age">Age</label>
        <input type="text" name="Age" value="<?= isset($_SESSION['Age']) ? $_SESSION['Age'] : null ?>">
      </p>
      <p>
        <label for="Address">Address</label>
        <input type="text" name="Address" value="<?= isset($_SESSION['Address']) ? $_SESSION['Address'] : null ?>">
      </p>
      <p>
        <label for="Photo">Photo</label>
        <input type="file" name="Photo">
      </p>
      <input type="submit" value="Save">
    </form>

    <div>
      <p>Here you will call the function visitors to return an associative array of all records in the database.  You will then enumerate over the records and display the information.  If they have a photo display that too.</p>
      <p>Since the function visitors returns an array, we can assign it to a variable and check the variable, then begin our foreach loop.</p>
      <h1>My Visitors</h1>
      <ul>
      </ul>
    </div>
  </body>
</html>
