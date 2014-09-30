<?php 

//$words = ['chip', 'bike', 'dog', 'penguin', 'bubble', 'tin', 'magnet', 'brownie', 'chimp', 'ice', 'pancake', 'medal', 'gum', 'stapler', 'box','bin', 'marker', 'kitty', 'pencil', 'ribbon', 'car', 'apple', 'peach', 'comb', 'guppy', 'soup', 'crayon', 'owl', 'purple', 'sliver', 'olive'];
//pull data from form
if(isset ($_POST['count'])) {
	$count = $_POST['count'];
} else {
	$count = 3;
}

if(isset ($_POST['number'])) {
	$number = true;
} else {
	$number = false;
	}


if(isset ($_POST['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
	}

if(isset ($_POST['uppercase'])) {
	$uppercase = true;
} else {
	$uppercase = false;
	}

//run logic on form responses
if($words = file('words.txt')) {
	
  $selected_words = [];
  $symbols = ['!', '@', '#', '%', '&', '*'];
  $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

  for($i = 0; $i < $count; $i++) {
   //generate random number from 0 to $words array size
  	$max = count($words) - 1;
  	$rand = rand(0, $max);

  	$word = $words[$rand];
  	
  	array_push($selected_words, $word);

  }

//str_replace function to add symbol or number
if($number) {

	}

if($symbol) {

	}

if($uppercase) {
	foreach($selected_words as $index => $word) {
		$selected_words[$index] = ucfirst($word);
		//echo $selected_words[$index];
	}
	}
}
//update variables to send back

$password = implode("", $selected_words);




