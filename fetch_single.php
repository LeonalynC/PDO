<?php
// fetch_single.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to select a single record based on Patient_ID
$sql = "SELECT * FROM Patients WHERE Patient_ID = 1";
$stmt = $pdo->query($sql); // Execute the query

// Fetch a single record as an associative array
$patient = $stmt->fetch();

echo "<pre>"; // Format output for readability
print_r($patient); // Display the record
echo "</pre>";
?>
