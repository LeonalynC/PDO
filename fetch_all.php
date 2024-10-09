<?php
// fetch_all.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to select all records from the Patients table
$sql = "SELECT * FROM Patients";
$stmt = $pdo->query($sql); // Execute the query

// Fetch all records as an associative array
$patients = $stmt->fetchAll();

echo "<pre>"; // Format output for readability
print_r($patients); // Display the records
echo "</pre>";
?>

