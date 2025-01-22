<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Portfolio -  Personal Portfolio</title>
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

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="portfolio">
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
        <li class="icon-box active">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio.html">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
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
                <li class="active"><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->

<?php
include("config.php");
$resultsPerPage = 6;

// Get the current page number from the URL, default to 1 if not set
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// Calculate the starting limit for the query
$startLimit = ($page - 1) * $resultsPerPage;

// Get the total number of portfolio items
$totalQuery = "SELECT COUNT(*) AS total FROM portfolio";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalItems = $totalRow['total'];

// Calculate the total number of pages
$totalPages = ceil($totalItems / $resultsPerPage);
// Fetch the portfolio items for the current page
$portfolioQuery = "SELECT * FROM portfolio LIMIT $startLimit, $resultsPerPage";
$portfolioResult = mysqli_query($conn, $portfolioQuery);

$portfolioItems = [];
if ($portfolioResult && mysqli_num_rows($portfolioResult) > 0) {
    while ($portfolio = mysqli_fetch_assoc($portfolioResult)) {
        $portfolioItems[] = $portfolio; // Store all portfolio items in an array
    }
}
?>

<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">
                <!-- Portfolio Item Starts -->
                <?php if (!empty($portfolioItems)) {
                    foreach ($portfolioItems as $portfolio) { ?>
                        <li>
                            <figure>
                                <img style="width: 400px; height: 200px; object-fit: cover;" src="portfolio_uploads/<?php echo htmlspecialchars($portfolio['portfolioImage']); ?>" alt="Portfolio Image for <?php echo htmlspecialchars($portfolio['projectName']); ?>" />
                                <div><span><?php echo htmlspecialchars($portfolio['projectName']); ?></span></div>
                            </figure>
                        </li>
                    <?php }
                } ?>
            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
 <!-- Pagination Starts -->
 <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- Pagination Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                <?php if (!empty($portfolioItems)) {
                    foreach ($portfolioItems as $portfolio) { ?>
                        <!-- Portfolio Item Detail Starts -->
                        <li>
                            <figure>
                                <figcaption>
                                    <h3><?php echo htmlspecialchars($portfolio['projectName']); ?></h3>
                                    <div class="row open-sans-font">
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-file-text-o pr-2"></i>
                                            <span class="project-label">Project: </span>
                                            <span class="ft-wt-600 uppercase"><?php echo htmlspecialchars($portfolio['projectDescription'] ?? 'N/A'); ?></span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-user-o pr-2"></i>
                                            <span class="project-label">Client: </span>
                                            <span class="ft-wt-600 uppercase"><?php echo htmlspecialchars($portfolio['clientName']); ?></span>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-2">
                                            <i class="fa fa-code pr-2"></i>
                                            <span class="project-label">Technologies: </span>
                                            <span class="ft-wt-600 uppercase"><?php echo htmlspecialchars($portfolio['inputTechnologies']); ?></span>
                                        </div>
                                    </div>
                                </figcaption>
                                <img src="portfolio_uploads/<?php echo htmlspecialchars($portfolio['portfolioImage']); ?>" alt="Portfolio Image for <?php echo htmlspecialchars($portfolio['projectName']); ?>" />
                            </figure>
                        </li>
                    <?php }
                } ?>
                <!-- Portfolio Item Detail Ends -->
            </ul>

            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="Previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="Next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="Close"></span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
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
