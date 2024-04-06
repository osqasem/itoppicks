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
        'technicalInfo' => 'iOS 17 is Apples current major release of its iOS operating system for the iPhone, succeeding iOS 16. iOS 17 receives frequent security and bug-fix updates, along with feature updates every few months. Beta builds are released weekly or biweekly to developers and public beta testers. Like previous iOS updates, iOS 17 is free for users.',
        'history' => 'Announced on June 5, 2023, at Apples WWDC, it was publicly available on September 18, 2023, as a free update. ',
    ],
    [
        'name' => 'iOS 16',
        'technicalInfo' => 'It is exclusive to iPhones and drops support for the last iPod Touch. iOS 16 is also the last iOS release to support iPhone models with a 5.5-inch display, particularly the iPhone 8 Plus. It was succeeded by iOS 17 on September 18, 2023',
        'history' => 'iOS 16 is Apples sixteenth major release of the iOS mobile operating system for the iPhone, succeeding iOS 15. Announced at WWDC on June 6, 2022, alongside iPadOS 16, it was released on September 12, 2022.',
    ],
    [
        'name' => 'iOS 13',
        'technicalInfo' => 'iOS 13 introduces a dramatic new look for iPhone with Dark Mode, new ways to browse and edit photos, and a private new way to sign in to apps and websites with just a tap. It also had several new security features, including stronger password protections, improved data encryption, and a new "Sign in with Apple" option. It also includes an enhanced version of the Intelligent Tracking Prevention tool to prevent websites from tracking user data',
        'history' => 'iOS 13 is the thirteenth major release of iOS, being the successor to iOS 12 and the predecessor to iOS 14. It was announced at WWDC 2019 on June 3, 2019 alongside tvOS 13, watchOS 6, iPadOS and macOS Catalina, before being released to the general public on September 19, 2019',
    ],
];

// Table header
echo '<table class="table table-bordered">';
echo '<tr><th>Name</th><th>Technical Information</th><th>History</th></tr>';

// Table rows
foreach ($operatingSystems as $os) {
    echo '<tr>';
    echo '<td>' . $os['name'] . '</td>';
    echo '<td>' . $os['technicalInfo'] . '</td>';
    echo '<td>' . $os['history'] . '</td>';    
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