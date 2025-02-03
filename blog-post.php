<?php
include 'config.php'; // Database connection include karein

$blogTitle = "Blog Not Found";
$blogContent = "";
$blogImage = "default.jpg"; // Default image agar koi image na ho
$blogDate = "";
$authorName = "Sandeep Verma"; // Static author name
$blogCategory = "";

if (isset($_GET['id'])) {
    $blogId = $_GET['id'];
    $select_blog = "SELECT * FROM blog WHERE id = $blogId";
    $select_blog_result = mysqli_query($conn, $select_blog);

    if ($select_blog_result && mysqli_num_rows($select_blog_result) > 0) {
        $blog = mysqli_fetch_assoc($select_blog_result);
        $blogTitle = $blog['blogTitle'];
        $blogContent = $blog['blogContent'];
        $blogImage = $blog['blogImage'];
        $blogCategory = $blog['blog_category'];
        $blogDate = date("F d, Y", strtotime($blog['createdAt'])); // Format date
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
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
        /* Blog Post Styling */
        .blog-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .blog-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .blog-meta {
            text-align: center;
            font-size: 14px;
            /* color: #666; */
            color: #fff;
            margin-bottom: 20px;
        }

        .blog-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .blog-content {
            /* font-size: 12px; */
            /* line-height: 1.8; */
            /* color: #333; */
            /* color:#fff; */
            text-align: center;
        }

        .author {
            font-weight: 900;
            /* color: #555; */
            color: #fff;
            animation: colorAnimation 10s linear infinite;
        }
        @keyframes colorAnimation{
            0% { color: #4169e1; font-size:14px }
            10% { color: #8a2be2; font-size:14px }
            20% { color: #daa520; font-size:14px }
            30% { color: #72b626; font-size:14px }
            40% { color: #ee6192; font-size:14px }
            50% { color: #fa5b0f; font-size:14px }
            60% { color: #6957af; font-size:14px }
            70% { color: #f72b1c; font-size:14px }
            80% { color: #ffb400; font-size:14px }
            90% { color: #9acd32; font-size:14px }
            100% { color: #333; font-size:14px }
        }

        
        
        
        
        
        /* related bogs post styling */

        .related-blogs {
        margin-top: 50px;
        padding: 30px 0;
        /* background-color: #f9f9f9; */
    }
    .related-title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 30px;
    }
    .related-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        text-align: center;
    }
    .related-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
    }
    .related-content {
        padding: 10px;
    }
    .related-title a {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        text-decoration: none;
    }
    .related-meta {
        font-size: 12px;
        color: #666;
    }
    .related-desc {
        font-size: 14px;
        color: #444;
        margin-top: 10px;
    }
    .read-more {
        display: inline-block;
        margin-top: 10px;
        font-size: 14px;
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }
    .read-more:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body class="blog-post">
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
                <i class="fa fa-user"></i>
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
            <li class="icon-box active">
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
                    <li><a href="contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li class="active"><a href="blog.php"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                    <?php
                    // session_start();
                    if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                        ?>
                        <li><a href="our_details/our_details.php"><i class="fa fa-user"></i><span>Admin</span></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center">
        <h1>My <span>Blog</span></h1>
        <span class="title-bg">Post</span>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="blog-container">
                <h2 class="blog-title"><?php echo htmlspecialchars($blogTitle); ?></h2>
                <p class="blog-meta"><b>Author:</b> <span class="author"><?php echo $authorName; ?></span> | Published on
                    <?php echo $blogDate; ?> <span class="dot"></span> | Blog Category: <span class="category"><?php echo $blogCategory; ?></span></p>
                <img src="Blog_uploads/<?php echo htmlspecialchars($blogImage); ?>"
                    alt="<?php echo htmlspecialchars($blogTitle); ?>" class="blog-image">
                <p class="blog-content open-sans-font"><?php echo nl2br(htmlspecialchars($blogContent)); ?></p>
            </div>
        </div>
    </section>

    <!-- Related Blog Section -->
<section class="related-blogs">
    <div class="container">
        <h3 class="related-title">Related Posts</h3>
        <div class="row">
            <?php
            // Related Blogs Query - Same Category or Random
            $relatedQuery = "SELECT * FROM blog WHERE id != $blogId ORDER BY RAND() LIMIT 3";
            $relatedResult = mysqli_query($conn, $relatedQuery);

            if ($relatedResult && mysqli_num_rows($relatedResult) > 0) {
                while ($relatedBlog = mysqli_fetch_assoc($relatedResult)) {
                    $relatedTitle = htmlspecialchars($relatedBlog['blogTitle']);
                    $blogCategory = htmlspecialchars($relatedBlog['blog_category']);
                    $relatedTitleWords = explode(" ", $relatedTitle); // Title ko words me todna
                    $relatedTitleSlice = htmlspecialchars(implode(" ", array_slice($relatedTitleWords, 0, 3))) . "..."; // Sirf pehle 5 words lena

                    $relatedImage = htmlspecialchars($relatedBlog['blogImage']);
                    $relatedDate = date("F d, Y", strtotime($relatedBlog['createdAt']));
                    $relatedWords = explode(" ", $relatedBlog['blogContent']);
                    $relatedContent = htmlspecialchars(implode(" ", array_slice($relatedWords, 0, 10))) . "...";
            ?>
            <!-- Related Blog Card -->
            <div class="col-md-4">
                <div class="related-card">
                    <img src="Blog_uploads/<?php echo $relatedImage; ?>" class="related-image" alt="<?php echo $relatedTitleSlice; ?>">
                    <div class="related-content">
                        <h4 class="related-title"><a href="blog-post.php?id=<?php echo $relatedBlog['id']; ?>"><?php echo $relatedTitleSlice; ?></a></h4>
                        <p class="related-meta"><b>Author:</b> <span class="author"><?php echo $authorName; ?></span> | <?php echo $relatedDate; ?> | Blog Category: <span class="category"><?php echo $blogCategory; ?></span></p>
                        <p class="related-desc"><?php echo $relatedContent; ?></p>
                        <a href="blog-post.php?id=<?php echo $relatedBlog['id']; ?>" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <?php } } ?>
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


</html>