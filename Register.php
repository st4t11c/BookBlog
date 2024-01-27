<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'databaseConnection.php'; // Include your database connection
    $dbConnection = new DatabaseConnection();
    $conn = $dbConnection->startConnection();


    // Collect form data
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $roliPerdoruesit = $_POST['roli'];

    // Hash the password for security before storing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO user(name, lastName, email, username, password, roli_userit) VALUES (:name, :lastName, :email, :username, :password, :roliPerdoruesit)";
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username); // Add this line to bind the username parameter
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':roliPerdoruesit', $roliPerdoruesit);

    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
 
        echo "Error: Unable to register user.";
    }
    $conn = null;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style3.css">
<title>BookBlog</title>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">
        <img src="img/logo.png">
        <h2>BookBlog</h2>
    </div>
</div>

<!-- Login Form -->
<div class="containerGif">
    <h1>BookBlog</h1>
    <img id="openingBook" src="img/Opening-Book.gif">
</div>
<div class="container">
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Filan" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Fisteki" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Filani@example.com" required>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Filan123" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="write strong password" required>

        <label for="roliPerdoruesit">Roli:</label>
        <select id="roliPerdoruesit" name="roliPerdoruesit" required>
            <option value="Admin">Admin</option>
            <option value="Guest">Guest</option>
        </select>

        <input type="submit" value="Register">
        <p>Don't have an account? <a href="Login.php">Log In</a></p>
    </form>
</div>

</body>
</html>