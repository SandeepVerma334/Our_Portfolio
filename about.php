<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>About Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
    <style>
 /* Reduce the space between <li> elements */
.about-list li {
  margin-bottom: -2px; /* Adjust this value to control spacing */
  padding: 0; /* Remove unnecessary padding if any */
  display:flex;
}
.about-list .icon i{
    margin-left:-35px;
   
}
.about .about-list li{
   
    width: 10rem;

}
.about .icon{
    display:flex;
    justify-content:center;
    align-items:center;
}

/* Adjust the icon and content alignment */
.about-list .icon {
  margin-right: 10px; /* Reduce space between icon and text */
  font-size:33px;
  margin-left:-17px;
}

.about-list .content {
  padding: 0;
}

/* Optional: Remove extra margins for <p> tags */
.about-list p {
  margin: 0; /* Remove default paragraph margins */
}
.icon-list li{
    display:flex;
}
ul.icon-list {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -112px;
    gap: 0px;
    padding-left: 55px;
}

.icon-list {
  display: flex; /* Align all items in a single row */
  list-style: none;
  padding: 0;
  margin: 0;
  gap: 15px; /* Space between icons */
  justify-content: center; /* Center align the items */
}

.icon-link {
  display: flex; /* Icon inside flex container for consistent alignment */
  align-items: center; /* Center align the icon vertically */
  justify-content: center; /* Center align the icon horizontally */
  width: 50px; /* Set width for icons */
  height: 50px; /* Set height for icons */
  /* Background color for the icon link */
  border-radius: 50%; /* Make icons circular */
  text-decoration: none; /* Remove underline */
 background-color: #2b2a2a;
  transition: all 0.3s ease; /* Smooth transition for hover effect */
}
.icon-link:hover{
    text-decoration:none;
    
}

.icon-link i {
  font-size: 23px; /* Icon size */
  color:#fff;
  padding-left:3px;
  background-color:transparent ;
}

@media (max-width: 444px) {
    ul.icon-list {
    display: flex;
    justify-content: center;
    align-items: start;
    margin-left: -112px;
    gap: 20px;
    padding-left:96px;
    }
    
    /* margin-left:20px; */
    .language-icon {
        display: flex;
        flex-direction: column;
        align-items: start; /* Ya center agar beech mein rakhna ho */
    }
    
    .language-icon .language,
    .language-icon .icon-list {
        width: 100%;
        text-align: left; /* Ya center, agar beech mein chahiye */
    }
    
    .icon-list {
        display: flex;
        justify-content: start; /* Ya center agar icons beech mein chahiye */
        flex-wrap: wrap;
        gap: 10px;
    }
}
  



.col-6.language-icon {
    padding-left:60px;
}


    </style>
</head>

<body class="about">
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
        <li class="icon-box">
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
                <li class="active"><a href="about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio.php"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
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
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <!-- <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Full Name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Sandeep Verma</span> </li>                            
                            <li> <span class="title">Age :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">30 Years</span> </li>
                            <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Indian</span> </li>
                            <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                            <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Sri Ganganagar</span> </li>
                            <li> <span class="title">phone :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+91-87692-58334</span> </li>
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">sandeepkumar941732@gmail.com</span> </li>                            
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Skype :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">sandeepkumar941732</span> </li>
                            <li> <span class="title">linkedin :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="https://www.linkedin.com/in/sandeep-verma-04b35320a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">linkedin Profile</a></span> </li>
                            <li> <span class="title">Github :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="https://github.com/SandeepVerma334">Github Profile</a></span> </li>
                            <li> <span class="title">Upwork :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"><a href="https://upwork.com/SandeepVerma334">Upwork Profile</a></span> </li>
                            <li> <span class="title">languages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">English, Hindi, Punjabi</span> </li>
                        </ul>
                    </div>
                   
                </div>
            </div> -->
             <!-- Personal Info Starts -->
             <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                    </div> 
                    <div class="col-12 d-block d-sm-none">
                        <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6" style="padding-left: 10px; padding-right: 10px;">

                        <ul class="about-list personal-info">
                            <li>
                              <span class="icon"><i class="fas fa-user position-absolute"></i></span>
                              <div class="content">
                                <p class="title">NAME</p>
                                <p class="value">Sandeep Verma</p>
                              </div>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fa fa-child position-absolute fs-2" aria-hidden="true"></i>
                                </span>
                                  <div class="content">
                                <p class="title">AGE</p>
                                <p class="value">30 Years</p>
                              </div>
                            </li>
                            <li>
                              <span class="icon"><i class="fas fa-flag position-absolute"></i></span>
                              <div class="content">
                                <p class="title">NATIONALITY</p>
                                <p class="value">Indian</p>
                              </div>
                            </li>
                            <li>
                              <span class="icon"><i class="fas fa-briefcase position-absolute"></i></span>
                              <div class="content">
                                <p class="title">STATUS</p>
                                <p class="value">Available</p>
                              </div>
                            </li>
                            <li>
                              <span class="icon"><i class="fa-solid fa-address-book position-absolute"></i></span>
                              <div class="content">
                                <p class="title">ADDRESS</p>
                                <p class="value">Sri Ganganagar</p>
                              </div>
                            </li>
                            <li>
                              <span class="icon"><i class="fas fa-phone position-absolute"></i></span>
                              <div class="content">
                                <p class="title">PHONE</p>
                                <p class="value">+91-87692-58334</p>
                              </div>
                            </li>
                            <li>
                              <span class="icon"><i class="fas fa-envelope position-absolute"></i></span>
                              <div class="content">
                                <p class="title">EMAIL</p>
                                <p class="value">sandeepkumar941732@gmail.com</p>
                              </div>
                            </li>
                          </ul>
                          
                    </div>
                    <div class="col-6 language-icon">
                        <ul class="about-list  list-unstyled open-sans-font">
                        <li>
                                <span class="icon"><i class="fa fa-language fs-33"></i>
                                </span>
                                <div class="language">
                                  <p class="title">LANGUAGES</p>
                                  <p class="value">English, Hindi, Punjabi</p>
                                </div>
                              </li>
                              <ul class="icon-list">
                            <li>
                              <a href="#" class="icon-link">
                                <i class="fa fa-skype" aria-hidden="true"></i>
                              </a>
                            </li>
                            <li>
                              <a href="https://www.linkedin.com/in/sandeep-verma-04b35320a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="icon-link" target="_blank">
                                <i class="fab fa-linkedin"></i>
                              </a>
                            </li>
                            <li>
                              <a href="https://github.com/SandeepVerma334" class="icon-link" target="_blank">
                                <i class="fab fa-github"></i>
                              </a>
                            </li>
                            <li>
                              <a href="https://upwork.com/SandeepVerma334" class="icon-link" target="_blank"style="margin-bottom: 17px;">
                                <i class="fa-brands fa-upwork"></i>
                              </a>
                            </li>
                          </ul>
                          </ul>
                          
                    </div>
                   
                </div>
            </div>
            <!-- Personal Info Ends from here -->
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Years Of <span class="d-block">Experience</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">15</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Completed <span class="d-block">Projects</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">8</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">Customers</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">4</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">Certificates <span class="d-block">Won</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                    <span>60%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">bootstrap</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p55">
                    <span>80%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
            </div>
           
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p50">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
            </div>
            
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>80%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">mysql</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">ajax</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Node.Js</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Express.Js</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>75%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">MongoDB</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Prisma ORM</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>50%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">React.Js</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p65">
                    <span>60%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">Postger SQL</h6>
            </div>
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2019 - 2020</span>
                            <h5 class="poppins-font text-uppercase">Diploma in Frontend & Backend Development <span class="place open-sans-font">Sri Ganganagar Rajasthan</span></h5>
                            <p class="open-sans-font">I have completed my Diploma in Full Stack from Sri Ganganagar Rajasthan </p>
                            <p class="open-sans-font">SKILLS : HTML, CSS, BOOTSTRAP, JAVASCRIPT, jquery, Ajax, php, mysql, wordpress </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2020 - 2021</span>
                            <h5 class="poppins-font text-uppercase"> I have completed my Internship with Job in Frontend & Backend Development <span class="place open-sans-font">Mohali Punjab</span></h5>
                            <p class="open-sans-font">I have completed my Internship in Frontend & Backend from Mohali Punjab</p>
                            <p class="open-sans-font">SKILLS : HTML, CSS, BOOTSTRAP, JAVASCRIPT, jquery, Ajax, php, mysql, wordpress</p>                            
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021 - 2023</span>
                            <h5 class="poppins-font text-uppercase">Frontend & Backend Development<span class="place open-sans-font">
                                Mohali Punjab
                            </span></h5>
                            <p class="open-sans-font">I have successfully completed projects in both front-end and back-end development, showcasing my expertise in full-stack development.</p>
                        </br><p class="open-sans-font">SKILLS : HTML, CSS, BOOTSTRAP, JAVASCRIPT, jquery, Ajax, php, mysql, wordpress customization, Create plugins & themes</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2023 - AT PRESENT</span>
                            <h5 class="poppins-font text-uppercase">Full Stack Development<span class="place open-sans-font">Sri Ganganagar Rajasthan</span></h5>
                            <p class="open-sans-font">Discription : I have experience in full-stack development and work as a professional freelancer. I specialize in delivering end-to-end solutions, combining front-end and back-end expertise to build efficient, scalable, and user-friendly applications.</p></br>
                            <p class="open-sans-font">SKILLS : HTML, CSS, BOOTSTRAP, JAVASCRIPT, jquery, Ajax, php, mysql, wordpress customization, Create plugins & themes, Node.Js, Prisma ORM, mongoDB, PostgerSQL, React.Js</p>
                        </li>
                       
                        <!-- <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2021</span>
                            <h5 class="poppins-font text-uppercase">BCA <span class="place open-sans-font">Chandigarh university</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore</p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
<!-- Main Content Ends -->

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
