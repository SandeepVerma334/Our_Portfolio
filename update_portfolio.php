<?php
include 'config.php';

// Get POST data
$portfolioId = $_POST['portfolioId'];
$projectName = $_POST['projectName'];
$clientName = $_POST['clientName'];
$inputTechnologies = $_POST['inputTechnologies'];

// Log the data for debugging
error_log("Portfolio ID: $portfolioId");
error_log("Project Name: $projectName");
error_log("Client Name: $clientName");
error_log("Technologies: $inputTechnologies");

// Check if any field is missing and handle error
if (empty($portfolioId) || empty($projectName) || empty($clientName) || empty($inputTechnologies)) {
    echo 'Error: Missing required fields';
    exit;
}

// Update portfolio data in the database
$sql = "UPDATE portfolio SET projectName=?, clientName=?, inputTechnologies=? WHERE id=?";
$stmt = $conn->prepare($sql);

// Check if the prepare statement was successful
if ($stmt === false) {
    echo 'Error: Failed to prepare the statement';
    exit;
}

// Bind parameters and execute the query
$stmt->bind_param('sssi', $projectName, $clientName, $inputTechnologies, $portfolioId);

if ($stmt->execute()) {
    echo 'Success: Portfolio updated successfully';
} else {
    echo 'Error: Failed to update portfolio';
}

$stmt->close();
$conn->close();
?>
