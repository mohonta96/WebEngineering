<?php
// File to store visitor count
$counterFile = "counter.txt";

// Check if counter file exists, if not, create one
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, "0");
}

// Read the current visitor count
$counter = (int)file_get_contents($counterFile);

// Increment the visitor count
$counter++;

// Save the new visitor count back to the file
file_put_contents($counterFile, $counter);

// Get the current date and time
$dateTime = date("Y-m-d H:i:s");

// Display visitor count and last visit time
echo "<h2>Website Visitor Counter</h2>";
echo "<p>Total Visitors: $counter</p>";
echo "<p>Last Visit: $dateTime</p>";
?>

