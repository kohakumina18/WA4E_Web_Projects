<!DOCTYPE html>
<html>
<head>
    <title>Haku_Nguyen_MD5 Hash Cracker</title>
</head>
<body>
<h1>_____MD5 Hash Cracker______</h1>
<p>This is an application to determine the PIN from 10,000 possible four digits PIN.<p>
<p>Enter the MD5 hash below to crack:</p>
<form method="GET">
    <input type="text" name="md5" size="40">
    <input type="submit" value="Crack MD5">
</form>
<br>
<?php
if (isset($_GET['md5'])) {
    $md5 = $_GET['md5'];
    $found = false;
    $show_attempts = 15;
    $start_time = microtime(true);

    // Iterate through all possible four-digit PINs
    for ($i = 0; $i < 10000; $i++) {
        $pin = str_pad($i, 4, '0', STR_PAD_LEFT); // Format PIN as four digits
        $hash = hash('md5', $pin);

        // Print out the first 15 attempts
        if ($show_attempts > 0) {
            echo "Attempt $i: PIN: $pin, MD5: $hash<br>";
            $show_attempts--;
        }

        // Check if the hash matches the input MD5
        if ($hash === $md5) {
            $found = true;
            $cracked_pin = $pin;
            break;
        }
    }

    // Calculate elapsed time
    $end_time = microtime(true);
    $elapsed_time = $end_time - $start_time;

    // Display the result
    if ($found) {
        echo "<p>PIN: $cracked_pin</p>";
    } else {
        echo "<p>PIN: Not found</p>";
    }
    echo "<p>Elapsed time: $elapsed_time seconds</p>";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<form method="GET">
    <input type="text" name="md5" size="40" />
    <input type="submit" value="Crack MD5"/>
</form>
<ul>
    <li><a href="index.php">Reset</a></li>
    <li><a href="md5.php">MD5 Encoder</a></li>
    <li><a href="makecode.php">MD5 Code Maker</a></li>
</ul>
</body>
</html>
	