<?php
session_start();

$host = 'localhost';  // Replace with your actual server IP or hostname
$db_user = 'root';
$db_password = '';
$db_name = 'church_donations';


// Create connection
$conn = new mysqli($host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is already logged in
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: dashboard.php");
    exit();
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Prepare and bind
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    if (!$stmt) {
        die("Statement preparation failed: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($stored_password);
    $stmt->fetch();

    // Debugging output (optional)
    // echo "Username: $username<br>";
    // echo "Stored Password from DB: $stored_password<br>";
    // echo "Entered Password: $password<br>";

    // Check if the user exists and verify the password
    if ($stmt->num_rows > 0 && $password === $stored_password) {
        $_SESSION['user_logged_in'] = true; // Set session variable
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }

    $stmt->close();  // Close the statement
}

$conn->close();  // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St. Anthony's Church Login</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <div class="login-container">
        <h1 class="header">St. Anthony's Mayura Web Login</h1>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
