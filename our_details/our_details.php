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
$range3 = 'Client_&_Projects_Details';
$range4 = 'Investment';
$range5 = 'Income';
function fetchGoogleSheetData($spreadsheetId, $apiKey, $range) {
    $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/{$range}?key={$apiKey}";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    // print_r($response);
    curl_close($ch);

    if ($response) {
        $data = json_decode($response, true);        
        return $data['values'] ?? null;
    }
    return null;
}
$data1 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range1); 
$data2 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range2); 
$data3 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range3); 
$data4 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range4); 
$data5 = fetchGoogleSheetData($spreadsheetId, $apiKey, $range5); 

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
     <!-- Template Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/preloader.min.css" rel="stylesheet">
    <link href="../css/circle.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="../css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="../css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="../css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="../css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="../css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="../css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="../css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="../css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="../css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="../css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="../css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="../css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="../js/modernizr.custom.js"></script>
    <style>
        .daily-table,  .Investment, .Income {
    background-color: #252525;
    border-collapse: collapse;
    color:#fff;
    width:60%;
    height:autopx;
    border-radius:10px;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 145px;
    margin-right: auto;
    margin-left: auto;
}
 


.daily-table td {
    padding: 8px;
    border: 1px solid black;
    text-align: center;
}

.monthly-table {
    background-color: #252525;
    border-collapse: collapse;
    color:#fff;
    border-radius:10px;

    width:60%;
    height:200px;
}
.container h3 {
    padding : 25px;
    padding-left: 0px;
}

.monthly-table td {
    padding: 8px;
    border: 1px solid black;
    text-align: center;
}
.table-row {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 20px;
}
.ClientProjects_Details{

}
.table-row .container {
    width: 50%;
}


    </style>
</head>
<body class="our_detail">
    <!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="../img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="../img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="../img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="../img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="../img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="../img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="../img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="../img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="../img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="../img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>

       <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="../index.html">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="../about.html">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="../portfolio.php">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="../contact.html">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-comments"></i>
            <a href="../blog.php">
                <h2>Blog</h2>
            </a>
        </li>
        <li class="icon-box">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <a href="../logout.php">
                    <h2>Logout</h2>
                </a>
            </li>
      
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href="../index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="../about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="../portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="../contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="active"><a href="../blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
    
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>daily<span>data</span></h1>
    <span class="title-bg">Data</span>
</section>
<div class="table-row">
    <?php
    displayTable($data1, 'Daily Basis Data Entry', 'daily-table');
    displayTable($data5, 'Income', 'Income');
    ?>
</div>

<div class="table-row">
    <?php
    displayTable($data2, 'Monthly Loss and Profit', 'monthly-table');
    displayTable($data4, 'Investment', 'Investment');
    ?>
</div>

<?php 
displayTable($data3, 'Client_&_Projects_Details', 'Client_and_Projects_Details');

} ?>

</body>

<!-- Template JS Files -->
<script src="../js/jquery-3.5.0.min.js"></script>
<script src="../js/styleswitcher.js"></script>
<script src="../js/preloader.min.js"></script>
<script src="../js/fm.revealator.jquery.min.js"></script>
<script src="../js/imagesloaded.pkgd.min.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/cbpGridGallery.js"></script>
<script src="../js/jquery.hoverdir.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/custom.js"></script>
</html>





