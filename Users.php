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


// Example usage: Load existing users
$users = loadUsers();





// // Sample existing users
// $users[] = new User('user1', '321');
// $users[] = new User('tom', '123');
// $users[] = new User('hafeez', '123');
// $users[] = new User('Omar', '123');
// // Add more users as needed

?>
