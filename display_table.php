<?php
// display_table.php
require 'dbconfig.php'; // Include the database configuration file

// SQL query to select all records from the Patients table
$sql = "SELECT * FROM Patients";
$stmt = $pdo->query($sql); // Execute the query
$patients = $stmt->fetchAll(); // Fetch all records

// Begin rendering the HTML table
echo "<table border='1'>"; // Table border for visibility
echo "<tr><th>Patient ID</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Contact Number</th><th>Email</th><th>Health Conditions</th><th>Wearable Device ID</th></tr>";

// Loop through each patient and display their information in table rows
foreach ($patients as $patient) {
    echo "<tr>";
    echo "<td>{$patient['Patient_ID']}</td>"; // Patient ID
    echo "<td>{$patient['FirstName']}</td>"; // First Name
    echo "<td>{$patient['LastName']}</td>"; // Last Name
    echo "<td>{$patient['DateOfBirth']}</td>"; // Date of Birth
    echo "<td>{$patient['ContactNumber']}</td>"; // Contact Number
    echo "<td>{$patient['Email']}</td>"; // Email
    echo "<td>{$patient['HealthConditions']}</td>"; // Health Conditions
    echo "<td>{$patient['WearableDeviceID']}</td>"; // Wearable Device ID
    echo "</tr>";
}

echo "</table>"; // End of table
?>
