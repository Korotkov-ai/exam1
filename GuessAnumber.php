<?php
echo 'Welcome!' . PHP_EOL;
echo 'Guess my randomized number, or type (exit) without brackets to leave the program' . PHP_EOL;
$loop = 1;
$Randomizer = rand(1, 100);
while ($loop = 1) {
    $input = readline();
    if ($input == 'exit') {
        exit();
    } elseif ($input == 'again'){
        $Randomizer = rand(1, 100);
        echo 'Guess my new number' . PHP_EOL;
    } elseif ($input != intval($input) || $input < 1 || $input > 100){
        echo 'You must enter number from 1 to 100' . PHP_EOL;
        echo 'Else type (exit) without brackets to leave the program' . PHP_EOL;
    }

    $CorrectNumber = $Randomizer;
    if ($input = intval($input)) {
        if ($input === $CorrectNumber) {
            echo 'Congratulations, You guessed my number!' . PHP_EOL;
            echo 'Enter (again) without brackets to randomize number for a guess' . PHP_EOL;
            echo 'Or enter (exit) without brackets to exit the program';
        } elseif ($input < $CorrectNumber && $input != $input < 0) {
            echo "The number is bigger than $input". PHP_EOL;
        } elseif ($input > $CorrectNumber && $input != $input > 100) {
            echo "The number is lesser than $input". PHP_EOL;
        }
    }
}