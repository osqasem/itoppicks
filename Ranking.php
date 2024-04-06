<?php
require_once 'Classes/UserClass.php';
require_once 'Header.php';
?>


<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Device Rankings are displayed below</h2>
            <p class="ios-explanation font-weight-bold">The ranking view page includes full information and comparison on 3 different devices using a designated table that presents the key information about each device, how the external and user reviews differ, and what is iTopPicks personal review on the device.</p>
        </div>
    </div>
</div>

<?php
// Table for three devices
$devices = [
    [
        'id' => 1,
        'model' => 'iPhone 15 Pro Max',
        'keyInfo' => 'The standard iPhone 15 lineup has upgraded 48MP Main Cameras, a USB 2.0 Type C port, and the Dynamic Island. This may be the last iPhone with a mute switch. 
        The iPhone 15 Pro Max is a highly anticipated smartphone from Apple, set to offer top-tier performance, a stunning OLED display, and a sophisticated camera system',
        'externalReviews' => ['Review 1'],
        'userReviews' => ['One of the best phones in the market. Really recomment it'],
        'iTopPicksReview' => 'iPhone 15 Pro Max is the best recommended device from iTopPicks for its amazing features and uprgrades from the other IOS versions',
        'score' => 9.5,
    ],
    [
        'id' => 2,
        'model' => 'iPhone 14 Plus',
        'keyInfo' => 'The extraordinary battery life, lightweight design, pro-level camera and video features, groundbreaking safety capabilities like Emergency SOS via satellite, and all iOS 16 has to offer make iPhone 14 a great option for anyone in the market for a new iPhone',
        'externalReviews' => ['Review 2'],
        'userReviews' => ['This iPhone is my all time favourite. It basically has all the features of the upgraded iphones but its much lighter'],
        'iTopPicksReview' => 'iPhone 14 Plus is a really good option who would like an iPhone with basically most the features but a ligher phone',
        'score' => 9.0,
    ],
    [
        'id' => 3,
        'model' => 'iPhone 11 Pro Max',
        'keyInfo' => 'The iPhone 11 line did not receive a major cosmetic upgrade, but instead brought a host of performance upgrades. The iPhone 11 Pro Max includes Apples three-camera system, a 6.5-inch Super Retina XDR display, the A12 Bionic chip, and a bigger battery for all-day battery life',
        'externalReviews' => ['Review 3'],
        'userReviews' => ['iPhone 11 will always be one of the best IOS versions of Apple, although its older than other iPhones but still has all the capabilities and features'],
        'iTopPicksReview' => 'iPhone 11 Pro Max is and has always been a top favourite for many users as it was a big game changer when it first released compared to the older IOS versions',
        'score' => 8.5,
    ],
];

// Table header
echo '<table class="table table-bordered">';
echo '<tr><th>Model</th><th>Key Information</th><th>External Reviews</th><th>User Reviews</th><th>iTopPicks Review</th><th>Score</th></tr>';

// Table rows
foreach ($devices as $device) {
    echo '<tr>';
    echo '<td>' . $device['model'] . '</td>';
    echo '<td>' . $device['keyInfo'] . '</td>';
    echo '<td><ul>';
    foreach ($device['externalReviews'] as $externalReview) {
        echo '<li><a target="_blank" href="https://www.tech-review.com/category/iphone">'  . $externalReview . '</a></li>';
    }
    echo '</ul></td>';
    echo '<td><ul>';
    foreach ($device['userReviews'] as $userReview) {
        echo '<li>' . $userReview . '</li>';
    }
    echo '</ul></td>';
    echo '<td>' . $device['iTopPicksReview'] . '</td>';
    echo '<td>' . $device['score'] . '</td>';
    echo '</tr>';
}

// Table footer
echo '</table>';
?>

<?php require_once 'Footer.php'; ?>
