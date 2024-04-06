<?php

class UserReview {
    private $reviewId;
    private $userId;
    private $deviceId; 
    private $reviewText;
    private $rating;
    private $user;
    
    // Constructor
    public function __construct($reviewId, $userId, $deviceId, $reviewText, $rating) {
        $this->reviewId = $reviewId;
        $this->userId = $userId;
        $this->deviceId = $deviceId;
        $this->reviewText = $reviewText;
        $this->rating = $rating;
    }
    
    // Getter and setter methods
    public function getReviewId() {
        return $this->reviewId;
    }
    
    public function setReviewId($reviewId) {
        $this->reviewId = $reviewId;
    }
    
    public function getUserId() {
        return $this->userId;
    }
    
    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getDeviceId() {
        return $this->deviceId;
    }
    
    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }
    
    public function getReviewText() {
        return $this->reviewText;
    }
    
    public function setReviewText($reviewText) {
        $this->reviewText = $reviewText;
    }
    
    public function getRating() {
        return $this->rating;
    }
    
    public function setRating($rating) {
        $this->rating = $rating;
    }
        
    public function setUser($user) {
        $this->user = $user;
    }

        
    public function getUser() {
      return $this->user;
    }

    // Function to serialize user object for storage
    public function serialize() {
        return json_encode([
            'reviewId' => $this->reviewId,
            'userId' => $this->userId,
            'deviceId' => $this->deviceId,
            'reviewText' => $this->reviewText,
            'rating' => $this->rating,
        ]);
    }

    // Function to create a user review from serialized data
    public static function deserialize($data) {
        $userData = json_decode($data, true);
        
        return new UserReview($userData['reviewId'], 
            $userData['userId'], 
            $userData['deviceId'], 
            $userData['reviewText'],
            $userData['rating']);
    }
}

?>
