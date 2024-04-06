<?php

class Retailer {
    private $id;
    private $deviceId;
    private $siteName;
    private $price;
    private $siteUrl;
    private $model;
    
    public function __construct($id, $deviceId, $siteName, $price, $siteUrl, $model) {
        $this->id = $id;
        $this->deviceId = $deviceId;
        $this->siteName = $siteName;
        $this->price = $price;
        $this->siteUrl = $siteUrl;
        $this->model = $model;
    }
    
    // Getter and setter for id
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }

    public function getModel() {
        return $this->model;
    }
    
    public function getDeviceId() {
        return $this->deviceId;
    }
    
    public function setDeviceId($deviceId) {
        $this->deviceId = $deviceId;
    }
    
    // Getter and setter for siteName
    public function getSiteName() {
        return $this->siteName;
    }
    
    public function setSiteName($siteName) {
        $this->siteName = $siteName;
    }
    
    // Getter and setter for price
    public function getPrice() {
        return $this->price;
    }
    
    public function setPrice($price) {
        $this->price = $price;
    }

    // Getter and setter for siteUrl
    public function getSiteUrl() {
        return $this->siteUrl;
    }
    
    public function setSiteUrl($siteUrl) {
        $this->siteUrl = $siteUrl;
    } 

    public static function deserialize($data) {
        $retailers = json_decode($data, true);

        return new Retailer(
            $retailers['id'],
            $retailers['deviceId'],
            $retailers['siteName'],
            $retailers['price'],
            $retailers['siteUrl'],
            $retailers['model']);
    }
    
}

?>
