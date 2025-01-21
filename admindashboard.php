<?php
session_start();
include("config.php");
if (empty($_SESSION['email']) || empty($_SESSION['user_id']) || empty($_SESSION['role'])) {    
    header("Location: login.php");
    exit();
}

if (isset($_POST['portfolio_submit'])) {    
    $projectName = $_POST['portfolioName'];
    $clientName = $_POST['clientName'];
    $inputTechnologies = $_POST['inputTechnologies']; 

    $image = $_FILES['image']['name'];
    $targetDir = "portfolio_uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $sql = "INSERT INTO portfolio (projectName, clientName, inputTechnologies, portfolioImage) 
            VALUES ('$projectName', '$clientName', '$inputTechnologies', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "Portfolio successfully added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Blog Form Submission
if (isset($_POST['blog_submit'])) {
    // Collecting form data
    $blogTitle = $_POST['blogTitle'];
    $blogContent = $_POST['blogContent'];
    $image = $_FILES['blogImage']['name']; // Assuming image is uploaded via a form

    // Image upload process (move the uploaded file to the server folder)
    $targetDir = "Blog_uploads/"; // The folder where images will be uploaded
    $targetFile = $targetDir . basename($_FILES["blogImage"]["name"]);
    move_uploaded_file($_FILES["blogImage"]["tmp_name"], $targetFile);

    // Inserting into the blog table
    $sql = "INSERT INTO blog (blogTitle, blogContent, blogImage, createdAt) 
            VALUES ('$blogTitle', '$blogContent', '$image', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "Blog successfully added!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://smtpjs.com/v3/smtp.js"></script>

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

    <style>
        /* .active-button {
            font-weight: bold;
            color: #007bff;
            border-bottom: 2px solid #007bff;
        } */
        .flex-container {
    max-width: 800px;
    margin: 0 auto;
}

.nav-tabs .nav-item {
    flex: 1;
    text-align: center;
}

.nav-tabs .nav-link {
    font-size: 16px;
    padding: 10px;
}

.nav-link.active {
    background-color: #007bff;
    color: white;
}

.tab-content {
    margin-top: 30px;
}

.form-label {
    font-size: 14px;
}

textarea.form-control {
    height: 100px;
}

    </style>
</head>

<body class="project">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img
                            src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img
                            src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img
                            src="img/styleswitcher/yellowgreen.png" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>

            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends -  for demo only -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box">
                <i class="fa fa-home"></i>
                <a href="index.html">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="about.html">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.html">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box active">
                <i class="fa fa-envelope-open"></i>
                <a href="contact.html">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="blog.html">
                    <h2>Blog</h2>
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
                    <li><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li class="active"><a href="contact.html"><i
                                class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>                    
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1><span>suman</span></h1>
        <span class="title-bg"><?php echo $_SESSION['role']; ?></span>
    </section>


    <section class="flex-container">
    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs" id="navTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="portfolio-tab" data-bs-toggle="tab" href="#portfolio" role="tab" aria-controls="portfolio" aria-selected="true">Portfolio</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="blog-tab" data-bs-toggle="tab" href="#blog" role="tab" aria-controls="blog" aria-selected="false">Blog</a>
        </li>
        <li>            
            <button type="submit" name="logout_button" class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>        
    </li>
    </ul></section>
    <section>

    <!-- Tab Contents -->
    <div class="tab-content" id="navTabContent">
    <!-- Portfolio Content -->
    <div class="tab-pane fade show active" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
        <!-- Portfolio Form -->
            <form method="POST" action="" enctype="multipart/form-data" class="form mt-3" id="portfolioForm">
        <div class="mb-3">
            <label for="portfolioName" class="form-label">Portfolio Name</label>
            <input type="text" class="form-control" id="portfolioName" name="portfolioName" required>
        </div>
        <div class="mb-3">
            <label for="clientName" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="clientName" name="clientName" required>
        </div>
        <div class="mb-3">
                    <label for="Technologies" class="form-label">Technologies</label>
                    <div class="Technologies-container" id="TechnologiesContainer">
                        <input type="hidden" name="inputTechnologies" id="hiddenTechnologies">
                        <input type="text" name="Technologies" class="tag-input" id="tagInput" placeholder="Type and press space">
                    </div>
                    <span class="error" id="errorTechnologies"></span>
                </div>
        <div class="mb-3">
            <label for="image" class="form-label">Portfolio Project Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <button type="submit" name="portfolio_submit" class="btn btn-primary btn-form">Submit Portfolio</button>
    </form>
    </div>

    <!-- Blog Content -->
    <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">
        <!-- Blog Form -->
        <form method="POST" action="" enctype="multipart/form-data" class="blog-form form mt-3" id="blogForm">
    <div class="mb-3">
        <label for="image" class="form-label">Blog Image</label>
        <input type="file" class="form-control" id="inputGroupFile02 image" name="blogImage">
        <span class="error" id="errormessage"></span>
    </div>
    <div class="mb-3">
        <label for="blogTitle" class="form-label">Blog Title</label>
        <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter Blog Title" required>
    </div>
  
    <div class="mb-3">
        <label for="blogContent" class="form-label">Content</label>
        <textarea class="form-control" name="blogContent" id="blogContent" placeholder="Write your blog here" required></textarea>
    </div>
    <button type="submit" name="blog_submit" class="btn btn-primary btn-form">Submit Blog</button>
</form>
    </div>
</div>

</section>

 <script>
    document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.nav-link');
    const tabContents = document.querySelectorAll('.tab-pane');

    // Set default active tab
    let activeTab = document.querySelector('.nav-link.active');
    let activeContent = document.querySelector('.tab-pane.active');

    tabs.forEach(tab => {
        tab.addEventListener('click', function(event) {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('show', 'active'));

            // Add active class to clicked tab and show corresponding content
            tab.classList.add('active');
            const targetContent = document.querySelector(tab.getAttribute('href'));
            targetContent.classList.add('show', 'active');
        });
    });


    const tagInput = document.getElementById('tagInput');
const technologiesContainer = document.getElementById('TechnologiesContainer');
const hiddenTechnologies = document.getElementById('hiddenTechnologies'); // Hidden input for technologies
const errorTechnologies = document.getElementById('errorTechnologies');
const technologies = [];

tagInput.addEventListener('keyup', (e) => {
    if (e.key === ' ' && tagInput.value.trim() !== '') {
        const technologyText = tagInput.value.trim();
        if (!technologies.includes(technologyText)) {
            technologies.push(technologyText);
            const tag = document.createElement('div');
            tag.classList.add('tag');
            tag.setAttribute('name', 'inputTechnologies');
            tag.innerHTML = '${technologyText} <button type="button">&times;</button>';

            tag.querySelector('button').addEventListener('click', () => {
                technologies.splice(technologies.indexOf(technologyText), 1);
                tag.remove();
                updateHiddenTechnologies();
            });

            technologiesContainer.insertBefore(tag, tagInput);
            updateHiddenTechnologies(); // Update hidden technologies when a tag is added
        }
        tagInput.value = ''; // Clear the input field after adding a tag
    }
});

// Function to update the hidden input field with the technologies
function updateHiddenTechnologies() {
    hiddenTechnologies.value = technologies.join(','); // Join the technologies with commas
}


});

 </script>


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

</body>


</html>