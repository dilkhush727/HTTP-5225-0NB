<!doctype html>
<html>

<head>
    <title>PHP If Statements</title>
</head>

<body>

    <h1>Welcome to the Quirky Zoo Management System!</h1>

    <h2><u>Challenge 1:</u></h2>

    <?php
    // Generate a random hour between 1 and 24
    $hour = ceil(rand(1, 24));

    echo $hour . "<br>";

    // Determine feeding schedule based on the time of day
    if ($hour >= 5 && $hour <= 9) {
        echo "<h3>Animals should eat Bananas, Apples, and Oats</h3>";
    } elseif ($hour >= 12 && $hour <= 14) {
        echo "<h3>Animals should eat Fish, Chicken, and Vegetables</h3>";
    } elseif ($hour >= 19 && $hour <= 21) {
        echo "<h3>Animals should eat Steak, Carrots, and Broccoli</h3>";
    } else {
        echo "<h3>Animals are not being fed</h3>";
    }

    echo "<h2><u>Challenge 2:</u></h2>";

    // Generate a random number between 1 and 100
    $number = ceil(rand(1, 100));

    // FizzBuzz logic
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($number % 3 == 0) {
        echo "Fizz";
    } elseif ($number % 5 == 0) {
        echo "Buzz";
    } else {
        echo $number;
    }

    ?>
</body>

</html>
