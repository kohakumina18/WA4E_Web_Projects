<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Big Thumb PHP</title>
</head>
<body>
    <h1>Master Big Thumb PHP</h1>
	<?php
    // Compute the SHA256 hash of the name
	$name = 'Master Big Thumb';
    $name_hash = hash('SHA256', 'Master Big Thumb');
    echo "<p>SHA256 hash of "$name": $name_hash</p>";
    ?>
    <pre>
    ASCII ART:
	 ____
     /      \
    |   O  O |
    |    ||   |
    \______/__|
    </pre>

   
	<a href="check.php">Click here to check the error setting </a><br>
	<a href="fail.php">Click here to cause a traceback</a>

</body>
</html>
