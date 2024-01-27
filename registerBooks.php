<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}

$loggedInUserRole = isset($_SESSION['roli']) ? $_SESSION['roli'] : '';

include 'dist/databaseConnection.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $bookName = $_POST['bookName'];
    $bookAuthor = $_POST['bookAuthor'];
    $registeredDate = $_POST['registeredDate'];
    $registeredBy = $_POST['registeredBy'];
    $aboutBook = $_POST['aboutBook'];

    // File upload handling
    $targetDirectory = "img/"; // Directory where uploaded files will be stored
    $targetFile = $targetDirectory . basename($_FILES["uploadPicture"]["name"]); // Path of the uploaded file
    move_uploaded_file($_FILES["uploadPicture"]["tmp_name"], $targetFile); // Move uploaded file to target directory

    // Prepare SQL statement to insert data into the table
    $sql = "INSERT INTO registeredBooks (bookName, bookAuthor, registeredDate, registeredBy, aboutBook, uploadPicture) VALUES (:bookName, :bookAuthor, :registeredDate, :registeredBy, :aboutBook, :uploadPicture)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bindParam(':bookName', $bookName);
    $stmt->bindParam(':bookAuthor', $bookAuthor);
    $stmt->bindParam(':registeredDate', $registeredDate);
    $stmt->bindParam(':registeredBy', $registeredBy);
    $stmt->bindParam(':aboutBook', $aboutBook);
    $stmt->bindParam(':uploadPicture', $targetFile); // Save the path of the uploaded picture

    // Execute the query
    if ($stmt->execute()) {
        // Registration successful
        echo "Book registered successfully!";
    } else {
        // Registration failed
        echo "Error: Unable to register book.";
    }
    // Close the database connection
    $conn = null;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style4.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<title>BookBlog</title>
<style>

</style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <a id="dashboard" href="dashboard.php"><img src="img/logo.png">
        <h2>BookBlog</h2></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
        <li><a href="books.php"><i class="fa fa-book" aria-hidden="true"></i> Books</a></li>
        <li><a href="boooks.php"><i class="fa fa-book" aria-hidden="true"></i> BooksADM</a></li>
    </ul>
    <div class="logged-in-user">
    <span>Welcome, <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
        <div class="dropdown-menu">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="qkyqu.php">Logout</a>
        </div>
    </div>

</div>

<div class="container">
    <h1>Register Book</h1>
    <form action="registerBooks.php" method="post" enctype="multipart/form-data">
        <div class="input-row">
            <label for="bookName">Book name:</label>
            <input type="text" id="bookName" name="bookName" required>

            <label for="bookAuthor">Book Author:</label>
            <input type="text" id="bookAuthor" name="bookAuthor" required>

            <label for="registeredDate">Registered Date:</label>
            <input type="date" id="registeredDate" name="registeredDate" required>
        </div>

        <div class="input-row">
            <label for="registeredBy">Registered by:</label>
            <input type="text" id="registeredBy" name="registeredBy" value="<?php echo $_SESSION['username']; ?>" required readonly>

            <label for="aboutBook">About the book:</label>
            <textarea id="aboutBook" name="aboutBook" rows="4" required></textarea>

            <label for="uploadPicture">Upload picture of book:</label>
            <input type="file" id="uploadPicture" name="uploadPicture" accept="image/*" required>
        </div>

        <div class="input-row">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>



<footer>

    <p>&copy; Copyright ~ 2023 BookBlog. All rights reserved.</p>
    <div class="socialMedia">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var loggedInUser = document.querySelector(".logged-in-user");

    loggedInUser.addEventListener("click", function() {
        this.classList.toggle("active");
    });

    // Close dropdown when clicking outside of it
    document.addEventListener("click", function(event) {
        if (!loggedInUser.contains(event.target)) {
            loggedInUser.classList.remove("active");
        }
    });
});
</script>

</body>
</html>
