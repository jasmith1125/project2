<?php 

//pull data from form
if(isset ($_GET['count'])) {
	$count = $_GET['count'];
} else {
	$count = 3;
}
//prevent problems when 0 or large number typed in url
$error = null;
if($count < 2 || $count > 7) {
     $count = $error;
     $error = "Please choose a number between 2 and 7";
}

if(isset ($_GET['number'])) {
	$number = true;
} else {
	$number = false;
	}
if($error) {
	$number = false;
}

if(isset ($_GET['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
	}
if($error) {
	$symbol = false;
}

if(isset ($_GET['uppercase'])) {
	$uppercase = true;
} else {
	$uppercase = false;
	}
if($error) {
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
	$numbers = range(1, 50);
  $rand = rand(0, count($numbers) -1);
  $number = $numbers[$rand];
} 

if($symbol) {
  $symbols = ['!', '@', '#', '$', '%', '^', '&', '*'];
  $rand = rand(0, count($symbols) -1);
  $symbol =  $symbols[$rand];
} 

if($uppercase) {
	foreach($selected_words as $index => $word) {
		$selected_words[$index] = ucfirst($word);
		//echo $selected_words[$index];
	}
	}


//update variables to send back

$password = implode("", $selected_words)." ".$symbol." ".$number;