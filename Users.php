<?php
require_once 'classes/UserClass.php';
// Define the global array to store User objects
$users = array();

// Function to load user objects from file
function loadUsers() {
    $users2 = [];
    $lines = file('data/user.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if ($lines !== false) {
        foreach ($lines as $line) {
            $users2[] = User::deserialize($line);
        }
    }
    return $users2;
}


// Load existing users
$users = loadUsers();

?>
