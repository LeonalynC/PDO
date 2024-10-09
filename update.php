<?php
// update.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to update a patient's email based on Patient_ID
$sql = "UPDATE Patients SET Email = :Email WHERE Patient_ID = :Patient_ID";
$stmt = $pdo->prepare($sql); // Prepare the SQL statement
$stmt->execute([
    'Email' => 'newemail@example.com', // New email to update
    'Patient_ID' => 2 // Patient_ID of the record to update
]);

echo "Record updated successfully!"; // Confirmation message
?>
