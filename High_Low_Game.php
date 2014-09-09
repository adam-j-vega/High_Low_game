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

//============Prior iteration of game==============
// echo "Welcome to High Low Game!\n";

// $game_num=rand ($argv[1] , $argv[2]);
// $play_game=true;
// $num_guesses=0;

// //echo $game_num;
// fwrite(STDOUT, "Input an integer. ");

// $int_guess = fgets(STDIN);

// while($play_game){	
// 	if($int_guess<$game_num){
// 		echo "HIGHER \n";
// 		fwrite(STDOUT, "Input an integer. ");

// 		$int_guess = fgets(STDIN);
// 		++$num_guesses;
// 	}elseif($int_guess>$game_num){
// 		echo "Lower\n";
// 		fwrite(STDOUT, "Input an integer. ");

// 		++$num_guesses;
// 		$int_guess = fgets(STDIN);
// 	}elseif($int_guess == $game_num){
// 		echo "Good Guess!\n";
// 		$play_game = false;
// 		++$num_guesses;
//     }
// }
// echo "You guessed " . $num_guesses . " times\n";

//============Final iteration of game===============

echo "Welcome to High Low Game!\n";
if(argc)//finish this later to check if argc has two values, if not make the array default to 1 to 100
$game_num=rand($argv[1],$argv[2]);
$int_guess=0;
$attempts=1;
$play_again="yes";
//End variables

//Do Loop to get user input and reassign $int_guess value
while($play_again=="yes"){
	fwrite(STDOUT, "Input an integer. ");

	do
	{	
		$int_guess = fgets(STDIN);

		if($int_guess > $game_num) 
		{
			fwrite(STDOUT, "Lower\n");
			++$attempts;
		} 
		elseif($int_guess < $game_num) 
		{
			fwrite(STDOUT, "Greater\n");
			++$attempts;
		}
	} 
	while($int_guess != $game_num );
		echo "You win! You guessed " . $attempts . " times." . "\n";
	
	fwrite(STDOUT, "Would you like to play again? Enter yes or no");
	$play_again = fgets(STDIN);
	fwrite(STDOUT, "Input an integer. ");

} 
while ($play_again = "yes");
?>