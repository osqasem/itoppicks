<?php

require_once 'Classes/DataSourceClass.php';

// Start a session
session_start();
// Get the current session ID
$sessionID = session_id();
// Display the session ID
echo "Session ID: $sessionID";
$user = null;

if ($_SESSION && $_SESSION['current_user']) {
    $user = $_SESSION['current_user'];
    $user->addFavorite("device " . $_GET['model']);
    echo "<h2>The device is added to current user: <h2> " . $user->printFavorites();
    header('Location: FavouriteDevices.php');
} else {
    header('Location: Main.php');
}
