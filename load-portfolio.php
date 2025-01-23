<?php
include("config.php");

$resultsPerPage = 6;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$startLimit = ($page - 1) * $resultsPerPage;

// Get the total number of portfolio items
$totalQuery = "SELECT COUNT(*) AS total FROM portfolio";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalItems = $totalRow['total'];

// Calculate the total number of pages
$totalPages = ceil($totalItems / $resultsPerPage);

// Fetch the portfolio items for the current page
$portfolioQuery = "SELECT id, projectName, clientName, inputTechnologies, portfolioImage, createdAt 
                   FROM portfolio 
                   LIMIT $startLimit, $resultsPerPage";
$portfolioResult = mysqli_query($conn, $portfolioQuery);

// Prepare portfolio items
$portfolioItems = '';
if ($portfolioResult && mysqli_num_rows($portfolioResult) > 0) {
    while ($portfolio = mysqli_fetch_assoc($portfolioResult)) {
        $portfolioItems .= '<li><figure>
                                <img style="width: 400px; height: 200px; object-fit: cover;" src="portfolio_uploads/' . htmlspecialchars($portfolio['portfolioImage']) . '" alt="Portfolio Image" />
                                <div><span>' . htmlspecialchars($portfolio['projectName']) . '</span></div>
                             </figure></li>';
    }
} else {
    $portfolioItems = '<p>No portfolio items found.</p>';
}

// Prepare pagination
$pagination = '';
if ($page > 1) {
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page - 1) . '" aria-label="Previous">&laquo;</a></li>';
}

for ($i = 1; $i <= $totalPages; $i++) {
    $pagination .= '<li class="page-item ' . ($i == $page ? 'active' : '') . '">
                        <a class="page-link" href="#" data-page="' . $i . '">' . $i . '</a>
                     </li>';
}

if ($page < $totalPages) {
    $pagination .= '<li class="page-item"><a class="page-link" href="#" data-page="' . ($page + 1) . '" aria-label="Next">&raquo;</a></li>';
}

// Return the data as JSON
echo json_encode(['portfolioItems' => $portfolioItems, 'pagination' => $pagination]);
?>
