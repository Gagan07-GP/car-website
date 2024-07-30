<?php
// Start the session
session_start();

// Check if a session is already active
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session cookie if it exists
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, 
            $params["path"], 
            $params["domain"], 
            $params["secure"], 
            $params["httponly"]
        );
    }

    // Destroy the session
    session_destroy();

    // Redirect to login page with a message
    echo '<script>
            alert("You have been logged out.");
            window.location.href = "login.php";
          </script>';
} else {
    // Redirect to login page if no session is active
    header("Location: login.php");
    exit();
}
?>
