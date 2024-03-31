<?php
$error = false;
$md5 = false;
$code = "";

// Function to validate input code
function validateCode($code) {
    // Convert the input code to lowercase
    $code = strtolower($code);
    
    // Check if the input code is exactly two characters
    if (strlen($code) != 2) {
        return "Input must be exactly two characters";
    }  	
    return false; // No error
}

// Function to compute MD5 hash for the input code
function computeMD5($code) {
    return hash('md5', $code);
}

// Process input code
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $error = validateCode($code);
    if (!$error) {
        $md5 = computeMD5($code);
    }
}
?>
<!DOCTYPE html>
<head><title> PIN Code</title></head>
<body>
<h1>MD5 PIN Maker</h1>
<?php
// Display error message if validation fails
if ($error !== false) {
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}

// Display MD5 value if computed successfully
if ($md5 !== false) {
    print "<p>MD5 value: ".htmlentities($md5)."</p>";
}
?>
<p>Please enter a two-letter key for encoding.</p>
<form>
<input type="text" name="code" value="<?= htmlentities($code) ?>"/>
<input type="submit" value="Compute MD5 for CODE"/>
</form>
<p><a href="generate_code.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>
