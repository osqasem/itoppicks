<?php
// Start a session
session_start();
// Get the current session ID
$sessionID = session_id();
$username = null;
$user = null;

if ($_SESSION && $_SESSION['current_user']) {
    $user = $_SESSION['current_user'];
    $username = $_SESSION['username'];

    // Update session timeout on user activity
    $_SESSION['timeout'] = time() + (30 * 60);
}

// Check if session is not timed out i.e., check if current time is greater than session timeout
if (isset($_SESSION['timeout']) && time() > $_SESSION['timeout']) {
    session_destroy();
    header('Location: Main.php');
    exit();
}


// Display secure content

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iTopPicks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <style>
        /* Style for header */
        .header {
            background-color: #343a40;
            /* Off-white background color */
            color: #ffffff;
            /* Dark text color */
            padding: 20px;
            text-align: center;
            font-family: Arial, sans-serif;
            /* Change the font family to Arial or any other sans-serif font */
        }

        /* Style for user icon */
        .user-icon {
            position: absolute;
            top: 10px;
            right: 20px;
        }
        .login-btn {
            padding: 35px;
            display: block;
        }
        .footer {
            background-color: #343a40;
            /* Off-white background color */
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        /* Style for menu items */
        .menu-item {
            margin-bottom: 5px;
        }
        /* Style for homepage icon */
        .homepage-icon {
            position: absolute;
            top: 10px;
            left: 20px;
        }

        /* Style for homepage label */
        .homepage-icon span {
            color: #ffffff;
            /* White text color */
        }

        .container-fluid h2 {
            font-size: 24px;

        }
        .carousel-caption {
            background: #53535361;
            border-radius: 10px;
        }
        .btn-primary {
            color: #fff;
            background-color: #212529;
            border-color: #ffffff;
        }
        footer {
            margin-top: 4rem;
        }
        /* Change the font of the title to Times New Roman */
        h1 {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body>
    <header class="border mb-4 p-2">
        <!-- Homepage icon -->
        <div class="homepage-icon">
            <!-- Replace "homepage-icon.png" with the path to your homepage icon image -->
            <img src="HomePage icon.png" alt="Homepage" width="70" height="60">
            <br>
            <a href="master.php"><span>HomePage</span></a>
        </div>

        <div class="header">
            <h1> iTopPicks </h1>
            <div class="user-icon">
                <?php if ($username) : ?>
                    <img src=<?php echo $username . ".jpg"; ?> alt="User Icon" width="60" height="60">
                    <div class="username"><?php echo $username; ?></div>

                <?php elseif (!$username) : ?>
                    <a class="login-btn" href="Main.php">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </header>