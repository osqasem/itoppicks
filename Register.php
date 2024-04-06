<?php
require_once 'Classes/DataSourceClass.php';
require_once 'Classes/UserClass.php';

$users = DataSource::loadUsers();


// Function to save user object to file
function saveUser($user)
{
    $userData = $user->serialize() . PHP_EOL;
    file_put_contents('data/user.txt', $userData, FILE_APPEND);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];
    $new_email = $_POST['email'];

    // Check if the username is not already taken
    $username_exists = false;
    foreach ($users as $user) {
        if ($user->username === $new_username) {
            $username_exists = true;
            break;
        }
    }

    if (! $username_exists) {
        // Create a new User object
        $new_user = new User(uniqid(), $new_username, $new_password, $new_email);

        // Save the user to file
        saveUser($new_user);
        // Define the messages

        $welcomeMessage = "User registration successful! \\n\\nWelcome, " . $new_username . "! \\n\\nYou can now login with your credentials.";

        // Generate JavaScript alert
        echo "<script>alert('$welcomeMessage');</script>";

        // Route to Main.html page for log in.

        // Delay the redirection by a few seconds (optional)
        echo "<meta http-equiv='refresh' content='0.1;url=Main.php'>";
    } else {
        // Display error message if username is already taken
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iTopPicks - Register</title>
<!-- Bootstrap CSS -->
<link
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
	rel="stylesheet">
<!-- Custom styles -->
<style>
body {
	background-color: #f8f9fa;
	background-image: url('Login Background.jpg');
	/* Replace 'car_background.jpg' with the path to your car image */
	background-size: cover;
	background-position: cover;
	background-repeat: no-repeat;
}

.register-container {
	max-width: 400px;
	margin: auto;
	margin-top: 100px;
	padding: 20px;
	background-color: #fff;
	border-radius: 5px;
	box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
}

.register-header {
	text-align: center;
	margin-bottom: 20px;
}
</style>
</head>
<body>

	<div class="container">
		<div class="register-container">
			<h2 class="register-header">Register</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
				method="post">

				<div class="form-group">
					<label for="username">Username</label> <input type="text"
						class="form-control" id="username" name="username"
						placeholder="Enter username" required>
				</div>



				<div class="form-group">
					<label for="password">Password</label> <input type="password"
						class="form-control" id="password" name="password"
						placeholder="Password" required>
				</div>

				<div class="form-group">
					<label for="email">Email</label> <input type="email"
						class="form-control" id="email" name="email" placeholder="email"
						required>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Register</button>
			</form>
			<div class="text-center mt-3">
				<a href="Main.php">Already have an account? Login here</a>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

