<!doctype html>
<html lang="en">
  <head>
    <title>Multi Array</title>
  </head>
  <body>
    <?php
        // iterate over the array inside on an unordered list tag
        // based on the value of the hand of each player, using your judgement place a bet for each player (fold, bet or all in)
        // substract that amount from the balance of each player and set that value in the array
        // assign the value of the bet to the bet key
        // print out the name, and bet of each player
        // print out the winner of the hand
      $pokerPlayers = array(
          array(
            "name" => "Frank",
            "hand" => array(
              "suit" => "hearts",
              "face" => "2 of Hearts",
              "value" => 2
            ),
            "bet" => null,
            "balance" => 300
          ),
          array(
            "name" => "Dick",
            "hand" => array(
              "suit" => "clubs",
              "face" => "Jack of Clubs",
              "value" => 10
            ),
            "bet" => null,
            "balance" => 500
          ),
          array(
            "name" => "Harry",
            "hand" => array(
              "suit" => "spades",
              "face" => "Ace of Spades",
              "value" => 13
            ),
            "bet" => null,
            "balance" => 350
          ),
          array(
            "name" => "Tom",
            "hand" => array(
              "suit" => "diamonds",
              "face" => "8 of Diamonds",
              "value" => 8
            ),
            "bet" => null,
            "balance" => 275
          )
        );
?>
<ul>
  <?php foreach ($pokerPlayers as $key => $player) :
          $playerCard = array();

          foreach ($player as $prop => $value) {
            if (is_array($value)) {
              foreach ($value as $hand => $card) {
                $playerCard[$hand] = $card; // build an array from an array
                // or we can access the players hand in the switch case statement
              }
            }
          }

          switch ($player['name']) {
            case 'Tom':
              $player['bet'] = 75;
              $player['balance'] = $player['balance'] - $player['bet'];
              // get player hand directly ex. $player['hand'][0]['face']
              $result = $player['name'] . ' bets ' . $player['bet'] . ' dollars. Hand is: ' . $playerCard['face'];
              break;
            case 'Frank':
              $player['bet'] = 300;
              $player['balance'] = $player['balance'] - $player['bet'];
              $result = $player['name'] . ' bets ' . $player['bet'] . ' dollars. Hand is: ' . $playerCard['face'];
              break;
            case 'Dick':
              $player['bet'] = 300;
              $player['balance'] = $player['balance'] - $player['bet'];
              $result = $player['name'] . ' : ' . $player['bet'] . ' dollars. Hand is: ' . $playerCard['face'];
              break;
            case 'Harry':
              $player['bet'] = 300;
              $player['balance'] = $player['balance'] - $player['bet'];
              $result = $player['name'] . ' bets ' . $player['bet'] . ' dollars. Hand is: ' . $playerCard['face'];
              break;
          }
  ?>
    <li><?= $result; ?></li>
  <?php endforeach; ?>
</ul>
  </body>
</html>
