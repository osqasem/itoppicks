<?php
require_once 'Classes/UserClass.php';
require_once 'Header.php' ;


echo "<h2 class='mx-4'> Chosen Favourite Devices is displayed below: </h2>";

if($user) {
    $user->printFavorites();
    // Thank you message
    echo "<div class='container mt-5'>";
    echo "<h3 class='text-center'>Thank you for choosing iTopPicks!</h3>";
    echo "</div>";
} else {
    echo "<h2 class='mx-4 my-5 text-center'>Login to see favorite devices!</h2>";
}


require_once 'Footer.php' ;

?>

