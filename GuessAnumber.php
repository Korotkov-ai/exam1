<?php
echo 'Welcome!' . PHP_EOL;
echo 'Guess my randomized number, or type (exit) without brackets to leave the program' . PHP_EOL;

$minimalNumber = 1;
$maximumNumber = 100;
$zero = 0;

$loop = 1;
$randomizer = rand($minimalNumber, $maximumNumber);
while ($loop = 1) {
    $input = readline();
    if ($input == 'exit') {
        exit();
    } elseif ($input == 'again'){
        $randomizer = rand($minimalNumber, $maximumNumber);
        echo 'Guess my new number' . PHP_EOL;
    } elseif ($input != intval($input) || $input < $minimalNumber || $input > $maximumNumber){
        echo 'You must enter number from ' . $minimalNumber . ' to ' . $maximumNumber . PHP_EOL;
        echo 'Else type (exit) without brackets to leave the program' . PHP_EOL;
    }

    $correctNumber = $randomizer;
    if ($input = intval($input)) {
        if ($input === $correctNumber) {
            echo 'Congratulations, You guessed my number!' . PHP_EOL;
            echo 'Enter (again) without brackets to randomize number for a guess' . PHP_EOL;
            echo 'Or enter (exit) without brackets to exit the program';
        } elseif ($input < $correctNumber && $input != $input < $zero) {
            echo "The number is bigger than $input" . PHP_EOL;
        } elseif ($input > $correctNumber && $input != $input > $maximumNumber) {
            echo "The number is lesser than $input" . PHP_EOL;
        }
    }
}