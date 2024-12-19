<?php
include('config.php');

if (isset($_POST['submit'])) {
    // Collect form data
    $title = $_POST['title'];
    $description = $_POST['description'];

    $uploadDir = "upload/";

    if (isset($_FILES['file_upload']) && count($_FILES['file_upload']['name']) > 0) {
        foreach ($_FILES['file_upload']['name'] as $index => $fileName) {
            $fileTmpName = $_FILES['file_upload']['tmp_name'][$index];
            $fileError = $_FILES['file_upload']['error'][$index];

            if ($fileError === UPLOAD_ERR_OK) {
                // Generate a unique file name
                $uniqueFileName = uniqid() . "_" . basename($fileName);
                $filePath = $uploadDir . $uniqueFileName;

                // Move the uploaded file to the target directory
                if (move_uploaded_file($fileTmpName, $filePath)) {
                    $uploadedFiles = $uniqueFileName;
                } else {
                    echo "<script>alert('Failed to upload file: $fileName');</script>";
                }
            } else {
                echo "<script>alert('Error uploading file: $fileName');</script>";
            }
        }
    }

    $sql = "INSERT INTO blog (upload_file, title, description) 
            VALUES ('$uploadedFiles', '$title', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Blog post added successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .form-group label {
            font-weight: 600;
            color: #555;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0.8rem;
        }

        .btn-primary {
            background: #050505;
            border: none;
            padding: 0.8rem;
            font-size: 1rem;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #0f0f0f;
        }
    </style>







</head>



    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="css/skins/yellow.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="home">

 <!-- Menu -->
 <header class="header">
    <ul class="icon-menu">
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="addportfolio.html">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="addblog.html">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
</header>














<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green"/></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow"/></a>
            </li>
        </ul>
           <div id="hideSwitcher">&times;</div>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->













  <!-- Contact Form Starts -->
  <div class="form-container">
    <h2>Add Blog Post</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
       <!-- HTML -->
<div class="form-group">
    <label for="blogImage">Upload Image</label>
    <input type="file" class="form-control no-outline" id="blogImage" name="file_upload[]" required>
</div>

        <div class="form-group">
            <label for="blogTitle">Title</label>
            <input type="text" class="form-control" id="blogTitle" name="title" placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="blogDescription">Description</label>
            <textarea class="form-control" id="blogDescription" name="description" rows="5" placeholder="Enter description" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit Blog</button>
    </form>
</div>

    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>












<!-- Template JS Files -->
<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/preloader.min.js"></script>
<script src="js/fm.revealator.jquery.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpGridGallery.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>


</html>
