<?php
session_start();

// Include the credentials file
include 'credentials.php';

$error = ''; // Variable to store error messages

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the posted username and password
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate credentials
    if (isset($credentials[$username]) && $credentials[$username] === $password) {
        // Credentials are correct, set session variable
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: dashboard/index');
        exit();
    } else {
        // Invalid credentials
        $error = 'Invalid username or password.';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your stylesheet here -->
</head>
<body>
<?php include('head.php'); ?>
<?php include('nav.php'); ?>
<div class="container">
    <div class="myform">
        <center><h1>Admin Login</h1>
        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?></center>
        <form align="center" action="login" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button><p>
        </form>
    </div>
</div>
<style>
div.container {
    flex-direction: row;
    align-items: center;
    background-color: white;
    padding: 30px;
    box-shadow: 0 50px 50px -50px darkslategray;
}

div.container div.myform h1 {
    color: #1c1c1e;
    margin-bottom: 20px;
}

div.container div.myform input {
    border: none;
    outline: none;
    border-radius: 0;
    width: 60%;
    border-bottom: 2px solid #1c1c1e;
    margin-bottom: 25px;
    padding: 7px 0;
    font-size: 14px;
}

div.container div.myform button {
    color: white;
    background-color: #1c1c1e;
    border: none;
    outline: none;
    border-radius: 2px;
    font-size: 14px;
    padding: 5px 12px;
    font-weight: 500;
}

div.error-message {
    color: red;
    margin-bottom: 20px;
}
</style>
<?php include('footer.php'); ?>
</body>
</html>
