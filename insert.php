<?php
// insert.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to insert a new patient record
$sql = "INSERT INTO Patients (FirstName, LastName, DateOfBirth, ContactNumber, Email, HealthConditions, WearableDeviceID)
VALUES (:FirstName, :LastName, :DateOfBirth, :ContactNumber, :Email, :HealthConditions, :WearableDeviceID)";

// Prepare the SQL statement for execution
$stmt = $pdo->prepare($sql);

// Execute the statement with the provided values
$stmt->execute([
    'FirstName' => 'John',
    'LastName' => 'Doe',
    'DateOfBirth' => '1990-01-01',
    'ContactNumber' => '123-456-7890',
    'Email' => 'john.doe@example.com',
    'HealthConditions' => 'Healthy',
    'WearableDeviceID' => 'XYZ123'
]);

echo "New record inserted successfully!"; // Confirmation message
?>
