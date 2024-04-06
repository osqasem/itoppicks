<?php
session_start();

// Check if the user is authenticated, if not then redirect to login.php page.
if (!isset($_SESSION['user_id'])) {
    echo "session ID not set";
    // Wait for 5 seconds
    sleep(5);
    header('Location: Main.HTML');
    exit();
}

// Check if session is not timed out i.e., check if current time is greater than session timeout
if (isset($_SESSION['timeout']) && time() > $_SESSION['timeout']) {
    echo "Session timed out!";
    // Wait for 5 seconds
    sleep(5);
    session_destroy();
    header('Location: Main1.HTML');
    exit();
}

// Update session timeout on user activity
$_SESSION['timeout'] = time() + (30 * 60);

// Display secure content


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard, <?php $role= $_SESSION['user_role']; echo $role;?>!</h2>
    
    <h2>You are logged in as <?php echo $_SESSION['user_id'];?></h2>
    
    <h2> The user name is: <?php echo $_SESSION['username'];?></h2>
    
    <h2><a href="logout.php">Logout</a></h2>
</body>
</html>

