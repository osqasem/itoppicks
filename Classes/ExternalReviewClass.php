<?php

class ExternalReview {
    private $id;
    private $deviceId;
    private $model;
    private $siteUrl;
    private $siteName;

    // Constructor
    public function __construct($id, $deviceId, $model, $siteName, $siteUrl) {
        $this->id = $id;
        $this->deviceId = $deviceId;
        $this->model = $model;
        $this->siteName = $siteName;
        $this->siteUrl = $siteUrl;
    }
    
    // Getter and setter methods
    public function getReviewId() {
        return $this->reviewId;
    }
    
    public function setReviewId($reviewId) {
        $this->reviewId = $reviewId;
    }
    
    public function getDeviceId() {
        return $this->deviceId;
    }
    
    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }

    public function getmodel() {
        return $this->model;
    }
    
    public function setmodel($model) {
        $this->model = $model;
    }
        
    public function getSiteUrl() {
        return $this->siteUrl;
    }
    
    public function setSiteUrl($source) {
        $this->siteUrl = $source;
    }
    
    public function getSiteName() {
        return $this->siteName;
    }
    
    public static function deserialize($data) {
        $reviews = json_decode($data, true);
        
        return new ExternalReview($reviews['id'],  
            $reviews['deviceId'],
            $reviews['model'], 
            $reviews['siteName'], 
            $reviews['siteUrl']);
    }
}
?>
