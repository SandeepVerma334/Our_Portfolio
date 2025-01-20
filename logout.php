<?php
session_start();
echo "<h1>You Are Logging out Please Wait For Few Seconds...</h1>";

// Check if the user is logged in
if (isset($_SESSION["email"])) {
    session_unset();
    session_destroy();
    
    // Set a JavaScript code to delay the redirect
    echo "<script>
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 5000); // 2000 milliseconds = 2 seconds
    </script>";
}
?>
