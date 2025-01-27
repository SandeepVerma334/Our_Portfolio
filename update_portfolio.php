<?php
include 'config.php';

// Get POST data
// print_r($_POST);
$portfolioId = $_POST['portfolioId'];
$projectName = $_POST['projectName'];
$clientName = $_POST['clientName'];
$inputTechnologies = $_POST['inputTechnologies'];
$portfolioImage = $_POST['portfolioImage'];

// Log the data for debugging
error_log("Portfolio ID: $portfolioId");
error_log("Project Name: $projectName");
error_log("Client Name: $clientName");
error_log("Technologies: $inputTechnologies");
error_log("portfolioImage: $portfolioImage");

// Check if any field is missing and handle error
if (empty($portfolioId) || empty($projectName) || empty($clientName) || empty($inputTechnologies) || empty($portfolioImage)) {
    echo 'Error: Missing required fields';
    exit;
}

// Update portfolio data in the database
$sql = "UPDATE portfolio SET projectName=?, clientName=?, inputTechnologies=?, portfolioImage=? WHERE id=?";
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

// Get POST data
// $portfolioId = $_POST['portfolioId'];
// $projectName = $_POST['projectName'];
// $clientName = $_POST['clientName'];
// $inputTechnologies = $_POST['inputTechnologies'];
// $portfolioImage = $_POST['portfolioImage']; // Use $_FILES for file upload
// echo $portfolioImage;
// // Log the data for debugging
// error_log("Portfolio ID: $portfolioId");
// error_log("Project Name: $projectName");
// error_log("Client Name: $clientName");
// error_log("Technologies: $inputTechnologies");
// error_log("portfolioImage: " . print_r($portfolioImage, true));

// // Check if any field is missing and handle error
// if (empty($portfolioId) || empty($projectName) || empty($clientName) || empty($inputTechnologies) || empty($portfolioImage['name'])) {
//     echo 'Error: Missing required fields';
//     exit;
// }

// // Define the upload directory
// $uploadDir = 'portfolio_uploads/';
// if (!is_dir($uploadDir)) {
//     mkdir($uploadDir, 0777, true); // Create the directory if it doesn't exist
// }

// // Generate a unique file name for the image
// $imageName = time() . '_' . basename($portfolioImage['name']);
// $targetFile = $uploadDir . $imageName;

// // Move the uploaded file to the target directory
// if (move_uploaded_file($portfolioImage['tmp_name'], $targetFile)) {
//     error_log("Image uploaded successfully to: $targetFile");
// } else {
//     echo 'Error: Failed to upload image';
//     exit;
// }

// // Update portfolio data in the database
// $sql = "UPDATE portfolio SET projectName=?, clientName=?, inputTechnologies=?, portfolioImage=? WHERE id=?";
// $stmt = $conn->prepare($sql);

// // Check if the prepare statement was successful
// if ($stmt === false) {
//     echo 'Error: Failed to prepare the statement';
//     exit;
// }

// // Bind parameters and execute the query
// $stmt->bind_param('ssssi', $projectName, $clientName, $inputTechnologies, $imageName, $portfolioId);

// if ($stmt->execute()) {
//     echo 'Success: Portfolio updated successfully';
// } else {
//     echo 'Error: Failed to update portfolio';
// }

// $stmt->close();
// $conn->close();
?>


