<?php

// Function to increment and return the visitor count
function incrementVisitorCount() {
    $countFile = 'visitor_count.txt';

    // Read current count
    $count = (file_exists($countFile)) ? intval(file_get_contents($countFile)) : 0;

    // Increment count
    $count++;

    // Write new count to file
    file_put_contents($countFile, $count);

    // Return updated count
    return $count;
}

// Increment visitor count
$visitorCount = incrementVisitorCount();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Count</title>
</head>
<body>
    <h1>Welcome to the website!</h1>
    <p>You are visitor number <?php echo $visitorCount; ?>.</p>
</body>
</html>
