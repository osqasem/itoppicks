<?php
require_once 'Classes/DeviceClass.php';
require_once 'Classes/UserReviewClass.php';
require_once 'Classes/ExternalReviewClass.php';
require_once 'classes/UserClass.php';
require_once 'classes/RetailerClass.php';

class DataSource {

    public static function loadUsers() {
        $users = [];
        $lines = file('data/user.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($lines !== false) {
            foreach ($lines as $line) {
                $users[] = User::deserialize($line);
            }
        }
        return $users;
    }

    public static function getUserById($id) {
        $users = DataSource::loadUsers();

        foreach ( $users as $user ) {
            if ( $id == $user->id ) {
                return $user;
            }
        }

        return null;
    }

    
    // Function to load user objects from file
    public static function loadDevices() {
        $devices = [];
        $lines = file('data/device.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($lines !== false) {
            foreach ($lines as $line) {
                $devices[] = Device::deserialize($line);
            }
        }
        return $devices;
    }

    public static function loadRetailers() {
        $retailers = [];
        $lines = file('data/retailer.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($lines !== false) {
            foreach ($lines as $line) {
                $retailers[] = Retailer::deserialize($line);
            }
        }
        return $retailers;
    }

    public static function loadDeviceById($id) {
        $devices = DataSource::loadDevices();

        foreach ( $devices as $device ) {
            if ( $id == $device->id ) {
                return $device;
            }
        }

        return null;
    }

    // Function to load reviews from file
    public static function loadReviews() {
        $reviews = [];
        $lines = file('data/userReview.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($lines !== false) {
            foreach ($lines as $line) {
                $reviews[] = UserReview::deserialize($line);
            }
        }
        return $reviews;
    }
    
    public static function loadExternalReviews() {
        $reviews = [];
        $lines = file('data/externalReview.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if ($lines !== false) {
            foreach ($lines as $line) {
                $reviews[] = ExternalReview::deserialize($line);
            }
        }
        return $reviews;
    }

    public static function loadReviewsByDeviceId($id) {
        $reviews = DataSource::loadReviews();
        $deviceReviews = [];

        foreach ( $reviews as $review ) {
            if ($id == $review->getDeviceId()) {
                $user = DataSource::getUserById($review->getUserId());
                $review->setUser($user);
                $deviceReviews[] = $review;
            }
        }

        return $deviceReviews;
    }

    public static function loadExternalReviewsByDeviceId($id) {
        $reviews = DataSource::loadExternalReviews();
        $data = [];

        foreach ( $reviews as $review ) {
            if ($id == $review->getDeviceId()) {
                $data[] = $review;
            }
        }

        return $data;
    }



    public static function loadTopRetailersByDeviceId($id) {
        $retailers = DataSource::loadRetailers();
        $data = [];

        foreach ( $retailers as $retailer ) {
            if ($id == $retailer->getDeviceId()) {
                $data[] = $retailer;
            }
        }

        return $data;
    }
}

?>