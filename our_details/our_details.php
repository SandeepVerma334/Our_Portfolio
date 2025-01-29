<?php 
session_start();
include("../config.php");
require_once('../vendor/autoload.php');

if (empty($_SESSION['email']) || empty($_SESSION['user_id']) || empty($_SESSION['role'])) {    
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
$spreadsheetId = '1XiWJF-HVO25-HyFeaNPcRmJQQbblB9nPUOiOSDzVe54';
$apiKey = 'AIzaSyDMYL2sn7PvWbmbF52oORsexY1Rop9v4ow';
$range1 = 'Data_entry';
$range2 = 'monthly_loss_profit';
function fetchGoogleSheetData($spreadsheetId, $apiKey, $range) {
    $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/{$range}?key={$apiKey}";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
        $data = json_decode($response, true);        
        return $data['values'] ?? null;
    }
    return null;
}
$data1 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range1); 
$data2 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range2); 

function displayTable($data, $title, $className) {
    if ($data) {
        echo "<div class='container {$className}-container'>";
        echo "<h3>{$title}</h3>";
        echo "<table class='{$className}' border='1' cellpadding='5' cellspacing='0'>";
        foreach ($data as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p>No data found for {$title}</p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Google Sheets Data</title>
    <style>
        .daily-table {
    background-color: lightblue;
    border-collapse: collapse;
}

.daily-table td {
    padding: 8px;
    border: 1px solid black;
}

.monthly-table {
    background-color: lightgreen;
    border-collapse: collapse;
}

.monthly-table td {
    padding: 8px;
    border: 1px solid black;
}

    </style>
</head>
<body>
    <?php
   displayTable($data1, 'Daily Basis Data Entry', 'daily-table');
   displayTable($data2, 'Monthly Loss and Profit', 'monthly-table');
}
    ?>
</body>
</html>





