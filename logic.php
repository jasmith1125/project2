<?php 

//pull data from form
if(isset ($_GET['count'])) {
	$count = $_GET['count'];
} else {
	$count = 3;
}

if(isset ($_GET['number'])) {
	$number = true;
} else {
	$number = false;
	}


if(isset ($_GET['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
	}

if(isset ($_GET['uppercase'])) {
	$uppercase = true;
} else {
	$uppercase = false;
	}

//run logic on form responses
if($words = file('words.txt')) {
	
  $selected_words = [];
  
  for($i = 0; $i < $count; $i++) {
   //generate random number from 0 to $words array size
  	$max = count($words) - 1;
  	$rand = rand(0, $max);

  	$word = $words[$rand];
 
  	array_push($selected_words, $word);
  }
}

if($number) {
	$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  $rand = rand(0, count($numbers) -1);
  $selected_number = $numbers[$rand];
  $number = $selected_number;
} 

if($symbol) {
  $symbols = ['!', '@', '#', '%', '&', '*'];
  $rand = rand(0, count($symbols) -1);
  $selected_symbol = $symbols[$rand];
  $symbol =  $selected_symbol;
} 

if($uppercase) {
	foreach($selected_words as $index => $word) {
		$selected_words[$index] = ucfirst($word);
		//echo $selected_words[$index];
	}
	}

//update variables to send back

$password = implode("", $selected_words)." ".$symbol." ".$number;