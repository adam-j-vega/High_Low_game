<?php
//High Low Game!
//
//    game picks a random number between 1 and 100.
//    prompts user to guess the number
//    if user's guess is less than the number, 
//    it outputs "HIGHER"
//    if user's guess is more than the number, 
//    it outputs "LOWER"
//    if a user guesses the number, the game should 
//	  declare "GOOD GUESS!"

//    Using conditionals and loops here is important
//    Random numbers can be made with 
//    the internal rand() function
//    If user is right, tell them they won
//    While they are wrong, give them hints and keep asking
//    Use exit(0) to end the game
//    If you get stuck in game, ctrl-c will exit.

echo "Welcome to High Low Game!\n";
$game_num=rand (1 , 100);
$Game_End=10;
//echo $game_num;
		fwrite(STDOUT, "Input an integer between 1 and 100. ");
		$Integer_guess = fgets(STDIN);
while($Game_End==10){	
	if($Integer_guess<$game_num){
	echo "HIGHER \n";
	fwrite(STDOUT, "Input an integer between 1 and 100. ");
	$Integer_guess = fgets(STDIN);
	}elseif($Integer_guess>$game_num){
	echo "Lower\n";
	fwrite(STDOUT, "Input an integer between 1 and 100. ");
	$Integer_guess = fgets(STDIN);
	}elseif($Integer_guess == $game_num){
	echo "Good Guess!";
	--$Game_End;
    }
}    
?>












