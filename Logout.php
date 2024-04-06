
<?php

echo "<h2> Logging out from the system <h2>";


session_start();

// Clear session variable
unset($_SESSION['username']);


session_destroy();

//Redirect to login page.
header('Location: Main.php');
exit();
?>
