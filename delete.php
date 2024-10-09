<?php
// delete.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to delete a record based on Patient_ID
$sql = "DELETE FROM Patients WHERE Patient_ID = :Patient_ID";
$stmt = $pdo->prepare($sql); // Prepare the SQL statement
$stmt->execute(['Patient_ID' => 1]); // Execute the statement with Patient_ID to delete

echo "Record deleted successfully!"; // Confirmation message
?>
