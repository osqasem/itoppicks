<?php

// Define the Device class
class Device {
    public $id;
    public $model;
    public $manufacturer;
    public $operatingSystem;
    public $colour;
    public $storage;
    public $price;
    public $rank;
    public $score;
    public $previewLink;
    public $imageName;
    public $mainImg;
    public $memory;
    public $cpuCores;
    public $camera;
    public $battery;
    public $weight;
    public $dimensions;
    public $releaseDate;

    private $favorites = array(); 

    public function __construct(
        $id,
        $model,
        $manufacturer,
        $operatingSystem,
        $colour,
        $storage,
        $price,
        $rank,
        $score,
        $previewLink,
        $imageName,
        $mainImg,
        $memory,
        $cpuCores,
        $camera,
        $battery,
        $weight,
        $dimensions,
        $releaseDate
    ) {
        $this->id = $id;
        $this->model = $model;
        $this->manufacturer = $manufacturer;
        $this->operatingSystem = $operatingSystem;
        $this->colour = $colour;
        $this->storage = $storage;
        $this->price = $price;
        $this->rank = $rank;
        $this->score = $score;
        $this->previewLink = $previewLink;
        $this->imageName = $imageName;
        $this->mainImg = $mainImg;
        $this->memory = $memory;
        $this->cpuCores = $cpuCores;
        $this->camera = $camera;
        $this->battery = $battery;
        $this->weight = $weight;
        $this->dimensions = $dimensions;
        $this->releaseDate = $releaseDate;
    }

    // Function to create a user object from serialized data
    public static function deserialize($data) {
        $deviceData = json_decode($data, true);
        return new Device(
            $deviceData['id'],
            $deviceData['model'],
            $deviceData['manufacturer'],
            $deviceData['operatingSystem'],
            $deviceData['colour'],
            $deviceData['storage'],
            $deviceData['price'],
            $deviceData['rank'],
            $deviceData['score'],
            $deviceData['previewLink'],
            $deviceData['imageName'],
            $deviceData['mainImg'],
            $deviceData['memory'],
            $deviceData['cpuCores'],
            $deviceData['camera'],
            $deviceData['battery'],
            $deviceData['weight'],
            $deviceData['dimensions'],
            $deviceData['releaseDate']
        );
    }
}
?>
