<?php
require_once 'Classes/UserClass.php';
require_once 'Header.php';
?>

<style>
    .ios-explanation {
        font-family: 'Arial', sans-serif;
        /* Change 'Arial' to the desired font family */
        font-size: 18px;
        line-height: 1.5;
    }

    .ios-differences-label {
        font-family: 'Arial', sans-serif;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Why iOS?</h2>
            <p class="ios-explanation font-weight-bold">iOS was chosen for its user-friendly interface, seamless integration with other Apple products, and robust security features. It offers a smooth and consistent user experience across all devices, along with regular updates and a vast selection of high-quality apps.</p>
        </div>
    </div>
</div>


<?php

// Example data for three operating systems
$operatingSystems = [
    [
        'name' => 'iOS 17',
        'technicalInfo' => 'Technical information about iOS 17',
        'history' => 'History of iOS 17',
        'currentNews' => 'Current news related to iOS 17',
    ],
    [
        'name' => 'iOS 16',
        'technicalInfo' => 'Technical information about iOS 16',
        'history' => 'History of iOS 16',
        'currentNews' => 'Current news related to iOS 16',
    ],
    [
        'name' => 'iOS 13',
        'technicalInfo' => 'Technical information about iOS 13',
        'history' => 'History of iOS 13',
        'currentNews' => 'Current news related to iOS 13',
    ],
];

// Table header
echo '<table class="table table-bordered">';
echo '<tr><th>Name</th><th>Technical Information</th><th>History</th><th>Current News</th></tr>';

// Table rows
foreach ($operatingSystems as $os) {
    echo '<tr>';
    echo '<td>' . $os['name'] . '</td>';
    echo '<td>' . $os['technicalInfo'] . '</td>';
    echo '<td>' . $os['history'] . '</td>';
    echo '<td>' . $os['currentNews'] . '</td>';
    echo '</tr>';
}

// Table footer
echo '</table>';

// YouTube video
echo '<div class="embed-responsive embed-responsive-16by9">';
echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/76nY4OHUQHs?si=uroq6nluwDDRODhx" allowfullscreen></iframe>';
echo '</div>';

?>



<?php require_once 'Footer.php';
?>