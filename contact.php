<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Contact - Personal Portfolio</title>
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
</head>

<body class="contact">
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
                <a href="index.php">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-info"></i>
                    <a href="about.php">
                        <h2>About</h2>
                    </a>
                </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.php">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box active">
                <i class="fa fa-envelope-open"></i>
                <a href="contact.php">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="blog.php">
                    <h2>Blog</h2>
                </a>
            </li>
            <?php 
        // session_start();
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        ?>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="our_details/our_details.php">
                <h2>Admin</h2>
            </a>
        </li>
        <?php } ?>
             <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        ?>
        <li class="icon-box">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <a href="logout.php">
                    <h2>Logout</h2>
                </a>
            </li>
        <?php } ?>
           

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
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li class="active"><a href="contact.php"><i
                                class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li><a href="blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                    <?php 
        // session_start();
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        ?>
                <li><a href="our_details/our_details.php"><i class="fa fa-user"></i><span>Admin</span></a></li>
<?php } ?>
                      <?php
                    // session_start();
                    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                        ?>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>get in <span>touch</span></h1>
        <span class="title-bg">contact</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Left Side Starts -->
                <div class="col-12 col-lg-4">
                    <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                    <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always available to
                        discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                    <p class="open-sans-font custom-span-contact position-relative">
                        <i class="fa fa-envelope-open position-absolute"></i>
                        <span class="d-block">mail me</span>sandeepkumar941732@gmail.com
                    </p>
                    <p class="open-sans-font custom-span-contact position-relative">
                        <i class="fa fa-phone-square position-absolute"></i>
                        <span class="d-block">call me</span>+91-87692-58334
                    </p>
                    <ul class="social list-unstyled pt-1 mb-5">
                        <li class="github"><a title="github" href="https://github.com/SandeepVerma334"><i
                                    class="fa fa-github"></i></a>
                        </li>
                        <li class="linkedin"><a title="linkedin"
                                href="https://www.linkedin.com/in/sandeep-verma-04b35320a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                    class="fa fa-linkedin"></i></a>
                        </li>
                        <li class="skype"><a title="skype" href="live:.cid.a0e60dcb3acac6ff"><i
                                    class="fa fa-skype"></i></a>
                        </li>
                        <li class="telegram"><a title="telegram" href="http://t.me/Sandeep_s_verma"><i
                                    class="fa fa-telegram"></i></a>
                        </li>
                        <!-- <li class="instagram"><a title="instagram" href=""><i class="fa fa-instagram"></i></a>
                    </li> -->
                    </ul>
                </div>
                <!-- Left Side Ends -->
                <!-- Contact Form Starts -->
                <div class="col-12 col-lg-8">
                    <form class="contactform" method="post" action="mail.php">
                        <div class="contactform">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" name="name" id="name" placeholder="YOUR NAME">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="email" name="email" id="email" placeholder="YOUR EMAIL">
                                </div>
                                <div class="col-12 col-md-4">
                                    <select name="budget" id="budget" id="budget" class="form-control">
                                        <option value="0">SELECT YOUR BUDGET</option>
                                        <option value="Less than $50">Less than $50</option>
                                        <option value="$50 - $100">$50 - $100</option>
                                        <option value="$100 - $150">$100 - $150</option>
                                        <option value="$150 - $200">$150 - $200</option>
                                        <option value="More than $200">More than $200</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" name="subject" id="subject" placeholder="YOUR SUBJECT">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="msg" placeholder="YOUR MESSAGE"></textarea>
                                    <button type="submit" class="btn btn-contact">Send Message</button>
                                </div>
                                <div class="col-12 form-message">
                                    <span class="output_message text-center font-weight-600 text-uppercase"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form Ends -->
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