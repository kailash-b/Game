<?php

// Assign moves to integers (1 = Rock, 2 = Paper, 3 = Scissors, 4 = Lizard, 5 = Spock)
echo 'Welcome to Rock, Paper Scissors, Lizard, Spock';
echo "\n";

// Randomize Moves
$computer = rand(1, 5);

// Declare wins
$rock_wins = array(3, 4);
$paper_wins = array(1, 5);
$scissors_wins = array(2, 4);
$lizard_wins = array(5, 2);
$spock_wins = array(3, 1);

// Conditional logic for wins
if ($computer == $_GET["name"]) {
    echo "Tie.";
    
    echo "\n";
} elseif ($computer == 1) {
        if (in_array($_GET["name"], $rock_wins)) {
            echo "\nPlayer 1 wins";
            
	    
            echo "\n";
        }
} elseif ($computer == 2) {
    if (in_array($_GET["name"], $paper_wins)) {
            echo "\nPlayer 1 wins";
	    
            echo "\n";
        }
} elseif ($computer == 3) {
    if (in_array($_GET["name"], $scissors_wins)) {
            echo "\nPlayer 1 wins";
	    
            echo "\n";
        }
}
elseif ($computer == 4) {
    if (in_array($_GET["name"], $lizard_wins)) {
            echo "\nPlayer 1 wins";
            
echo "\n";
        }
}
elseif ($computer == 5) {
    if (in_array($_GET["name"], $spock_wins)) {
            echo "\nPlayer 1 wins";
	    
            echo "\n";
        }
} else {
    echo "\nPlayer 2 wins";
}

?>

<form action="<?php $_PHP_SELF ?>" method="GET"><br>
Name: <input type="text" name="name"><br>
</form>
