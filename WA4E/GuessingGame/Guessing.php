<!DOCTYPE html>
<html>
<head>
    <title>dfc81546</title>
</head>
<body>
    <h1>Welcome to my guessing game</h1>
    <?php
    $correctNumber = 55;

    // Check if the guess is submitted
    if (isset($_GET['guess'])) {
        // Validate the guess
        if (strlen($_GET['guess']) < 1) {
            echo "Your guess is too short";
        } else if (!is_numeric($_GET['guess'])) {
            echo "Your guess is not a number";
        } else {
            $guess = $_GET['guess'];
            // Compare the guess with the correct number
            if ($guess < $correctNumber) {
                echo "Your guess is too low";
            } else if ($guess > $correctNumber) {
                echo "Your guess is too high";
            } else {
                echo "Congratulations - You are right";
            }
        }
    } else {
        echo "Please enter your guess.";
    }
    ?>
</body>
</html>
