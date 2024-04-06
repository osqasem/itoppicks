<?php
require_once 'Classes/DataSourceClass.php';

$users = DataSource::loadUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> iTopPicks - Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles -->
  <style>
    body {
      background-color: #f8f9fa;
      background-image: url('Login Background.jpg');
      background-size: cover;
      background-position: cover;
      background-repeat: no-repeat;
    }

    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.85);
      /* Add opacity to make the login container semi-transparent */
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    .login-header {
      text-align: center;
      margin-bottom: 20px;
      font-family: seriff;
    }

    .register-link {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <audio id="background-music" autoplay loop>
    <source src="Majida El Roumi Copy.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <div class="container">
    <div class="login-container">
      <h2 class="login-header">iTopPicks</h2>
      <form action="login.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </div>
  </div>


  <script>
    // Automatically play background music when the page loads
    window.onload = function() {
      var audio = document.getElementById("background-music");
      audio.play();
    };
  </script>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>