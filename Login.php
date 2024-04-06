<?php

require_once 'Classes/DataSourceClass.php';

$users = DataSource::loadUsers();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Flag to check if authentication is successful
    $authenticated = false;

    // Iterate over the users array to find the user
    foreach ($users as $user) {
        // Check if the username matches and the password is verified
        if ($user->username === $username && $user->verifyPassword($password)) {
            $authenticated = true;
            echo "<h1>Login successful. Welcome, $username!</h1>";
            // Wait for 1 second
            sleep(1);

            // Set Session information after login

            // Start a session
            session_start();
            // Get the current session ID
            $sessionID = session_id();
            // Display the session ID
            echo "Session ID: $sessionID";

            // Authentication successful, set session variables
            $_SESSION['user_id'] = $username; // Replace with the actual user ID
            $_SESSION['user_role'] = 'admin'; // Replace with the actual user role
            $_SESSION['username'] = $username;
            $_SESSION['current_user'] = $user;

            // Set session timeout in seconds (e.g., 30 minutes equal 180 seconds)
            $_SESSION['timeout'] = time() + (30 * 60);

            // Redirect to a secure master page after successful login and session setup.
            header('Location: master.php');
            exit();
        }
    }

    // If authentication fails
    if (!$authenticated) {
        echo "<h1>Login Failed. <br> <br> Invalid username or password.</h1>";
        echo "<h2><a href=\"Main.php\"> Try Again</a> </h2>";
    }
} else {
    echo "<h1>Error: Form data not received.</h1>";
}
