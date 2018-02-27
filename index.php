<?php

// returns a random element from the array
function pick_random($array) {
  return $array[array_rand($array)];
}

$subjects = array('Elvis', 'Your mama', 'My neighbor\'s dog', 'Some dumb programmer', 'A scary clown');
$verbs = array('needs', 'wants', 'ate', 'built', 'destroyed');
$objects = array('a website', 'a bath', 'a large pizza', 'three kittens', 'a new bicycle');

$sentence = pick_random($subjects) . " " . pick_random($verbs) . " " . pick_random($objects) . '.';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Random Sentence</title>
  	<style type="text/css">
    body {
    	margin: 5px;
      padding: 0;
      background: #EEE;
      font-size: 100px;
      font-weight: bold;
      text-align: center;
      text-transform: uppercase;
    }
    p, a {
      color: blue;
    }
    h1 {
      text-align: center;
      font-size: 30px;
      font-weight: normal;

    }
  	</style>
  </head>
  <h1>Click to get a random sentence!</h1>
  <body>
        <p><a href=""><?php echo $sentence; ?></a></p>
  </body>
</html>
