<?php
include("config.php");

// Start the session
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Securely hash the password

    // Query to check email and password
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $val = mysqli_query($conn, $sql);

    if (mysqli_num_rows($val)) {
        $row = mysqli_fetch_array($val);
        
        // Save session variables
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['uid'];
        $_SESSION['role'] = $row['role']; // Assuming 'role' column exists in the table

        // Check the role and redirect accordingly
        if ($row['role'] === 'admin') {
            header('Location: admindashboard.html'); // Redirect to admin dashboard
            exit();
        } else {
            header('Location: index.html'); // Redirect to user homepage
            exit();
        }
    } else {
        echo "<span style='color: red;'>Invalid Email or Password!</span>";
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
</head>

<body class="login">
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
                <li class="active"><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
              </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1><?php echo htmlspecialchars($_SESSION['name']); ?> <span></span></h1>
    <span class="title-bg">Contact</span>
</section>

<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
           
            <!-- Login Form Starts -->
            <div class="col-12 col-lg-8">
                <form class="loginform" method="post" action="#">
                    <div class="loginform">
                        <div class="login_row">
                           
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" id="email" placeholder="YOUR EMAIL">
                            </div><br>
                            <div class="col-12 col-md-4">
                                <input type="password" name="password" id="password" placeholder="YOUR PASSWORD">
                            </div><br>
                           
                            <div class="col-12">
                               
                               <button type="submit" name="login" class="btn btn-login">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Login Form Ends  -->
        </div>
    </div>

</section>
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
<!--<script type="text/javascript">
    function sendEmail() {
      Email.send({
        Host: "sandeepkumar941732@gmail.com",
        Username: "sandeepkumar941732@email.com",
        To: 'svwebsolution334@email_address.com',
        From: "sandeepkumar941732@email.com",
        Subject: "Sending Email using javascript",
        Body: "Well that was easy!!",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script>
-->
</html>
