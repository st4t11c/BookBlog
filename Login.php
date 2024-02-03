<?php

session_start();
include 'databaseConnection.php'; 
$dbConnection = new DatabaseConnection();
$conn = $dbConnection->startConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if (password_verify($password, $row['Password'])) {

            $_SESSION['authenticated'] = true; 
            $_SESSION['username'] = $username;
            $_SESSION['roli'] = $row['roli_userit'];
            header("Location:Home.php");
            exit();
        } else {
            
            echo "Invalid password. Please try again.";
        }
    } else {
        
        echo "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style3.css" >
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<title>BookBlog</title>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <img src="book1.png">
        <h2>BookBlog</h2>
    </div>
</div>


<div class="containerGif">
    <h1>BookBlog</h1>
    <img id="openingBook" src="Opening-Book.gif">
</div>
<div class="container">
  


    <h2>Login</h2>
    <form action="Login.php" method="post" class="form-horizontal">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <div class="password-container">
      <input type="password" id="password" name="password" required class="password-input">
    <span type="button" id="togglePassword" class="toggle-password" onclick="togglePasswordVisibility()">🙈</span>  
    </div>

        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="Register.php">Sign Up</a></p>
</div>
   
  <script>
    const passwordInput = document.querySelector('.password-input');
  const togglePasswordButton = document.getElementById('togglePassword');

  togglePasswordButton.addEventListener('click', function () {
    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
    togglePasswordButton.textContent = passwordInput.type === 'password' ? '🙈' : '🙊';
  });
    function validateForm() {

      var email = document.getElementById('email').value;

      var password = document.getElementById('password').value;



      var emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;

      if (!emailRegex.test(email)) {
        alert('please type a valid email format');
        return false;
      }



      if (password.length < 8) {
        alert('password should be 8 characters long');
        return false;
      }

      return true;
    }

  </script>
</body>

</html>