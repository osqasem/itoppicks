<?php

require_once 'Classes/DataSourceClass.php';
require_once 'Classes/UserReviewClass.php';

// Start a session
session_start();

$user = null;

if ($_SESSION && $_SESSION['current_user']) {
    $user = $_SESSION['current_user'];
    $userReview = new UserReview(
        uniqid(),
        $user->id,
        $_POST['id'],
        $_POST['comment'],
        $_POST['rating']
    );

    $userReviewData = $userReview->serialize() . PHP_EOL;

    file_put_contents('data/userReview.txt', $userReviewData, FILE_APPEND);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: Main.php');
}
