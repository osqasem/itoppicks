<?php

// Define the User class
class User {
    // public $userId;
    public $id;
    public $username;
    public $password;
    public $email;
    
    private $favorites = array(); 
    
    public function __construct($id, $username, $password, $email) {
        // $this->userId = $userId;
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
    
    // Function to serialize user object for storage
    public function serialize() {
        return json_encode([
            'id' => $this->id,
            'username' => $this->username,
            'password' => $this->password,
            'email' => $this->email
        ]);
    }
    
    // Function to create a user object from serialized data
    public static function deserialize($data) {
        $userData = json_decode($data, true);
        
        return new User($userData['id'], $userData['username'], $userData['password'], $userData['email']);
    }
    
    // Method to verify password
    public function verifyPassword($password) {
        return $this->password === $password;
    }
    
    public function addFavorite($device)
    {
        foreach($this->favorites as $favorite) {
            if($favorite === $device) {
                return;
            }
        }
        
        $this->favorites[]=$device;
    }
    
    public function printFavorites() {
        echo "<div class='m-4 text-capitalize'>";
        foreach ($this->favorites as $fav1) {
            echo "<p><b> $fav1 </b></p>" . "<br>";
        }
        echo "</div>";
    }
    

}
?>
