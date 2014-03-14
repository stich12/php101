<!doctype html>
<html lang="en">
  <head>
    <title>Associative Array</title>
  </head>
  <body>
    <?php
        // iterate over the array inside on an unordered list tag
        // print out the data in a list item tag like so key: value
        // beneath the key/value information do the following
        // if the price is under 100000 echo that it is affordable
        // if the price is over 100000 and under 200000 echo that it is pricey
        // if the price is over 200000 echo that it is out of my league
      $cars = [
          [
            "make" => "Aston Martin",
            "model" => "V12 Vanquish",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Red",
            "price" => 279995
          ],
          [
            "make" => "Lotus",
            "model" => "Elise",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Orange",
            "price" => 57113
          ],
          [
            "make" => "Audi",
            "model" => "R8",
            "year" => 2014,
            "doors" => 2,
            "transmission" => "Manual",
            "suspension" => "Sport",
            "color" => "Black",
            "price" => 114900
          ]
        ];
?>
<ul>
<?php
  foreach($cars as $key => $value) :
    if ($value['price'] > 200000) {
      $response = '<b>Out my league</b>';
    } elseif ($value['price'] > 100000) {
      $response = '<b>Pricey</b>';
    } else {
      $response = '<b>I got the dough</b>';
    }
?>
  <li>Make: <?= $value['make']; ?></li>
  <li>Model: <?= $value['model']; ?></li>
  <li>Price: <?= $value['price']; ?></li>
  <li>Can I get it?: <?= $response; ?></li>
<?php endforeach; ?>
</ul>
  </body>
</html>
