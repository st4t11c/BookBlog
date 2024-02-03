<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: Home.php");
    exit();
}

$loggedInUserRole = isset($_SESSION['roli']) ? $_SESSION['roli'] : '';

include 'databaseConnection.php'; 
$dbConnection = new DatabaseConnection();
$conn = $dbConnection->startConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $bookName = $_POST['bookName'];
    $bookAuthor = $_POST['bookAuthor'];
    $registeredDate = $_POST['registeredDate'];
    $registeredBy = $_POST['registeredBy'];
    $aboutBook = $_POST['aboutBook'];

    
    $targetDirectory = "img/"; 
    $targetFile = $targetDirectory . basename($_FILES["uploadPicture"]["name"]); 
    move_uploaded_file($_FILES["uploadPicture"]["tmp_name"], $targetFile); 

   
    $sql = "INSERT INTO registeredBooks (bookName, bookAuthor, registeredDate, registeredBy, aboutBook, uploadPicture) VALUES (:bookName, :bookAuthor, :registeredDate, :registeredBy, :aboutBook, :uploadPicture)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':bookName', $bookName);
    $stmt->bindParam(':bookAuthor', $bookAuthor);
    $stmt->bindParam(':registeredDate', $registeredDate);
    $stmt->bindParam(':registeredBy', $registeredBy);
    $stmt->bindParam(':aboutBook', $aboutBook);
    $stmt->bindParam(':uploadPicture', $targetFile); 

   
    if ($stmt->execute()) {
    
        echo "Book registered successfully!";
    } else {
    
        echo "Error: Unable to register book.";
    }
    
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
<body style="background-color: rgb(245, 235, 220);">

<div class="navbar">
    <div class="logo">
        <a id="dashboard" href="boooks.php"><img src="img/logo.png">
        <h2>BookBlog</h2></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="Books.php"><i class="fa fa-book" aria-hidden="true"></i> Books</a></li>
        <li><a href="About.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
        <li><a href="ContactUs.php"><i class="fa fa-info" aria-hidden="true"></i> Contact Us</a></li>
        <?php if ($loggedInUserRole === 'Admin'): ?>
        <li><a href="boooks.php"><i class="fa fa-book" aria-hidden="true"></i> BooksADM</a></li>
        <?php endif; ?>
        <?php if ($loggedInUserRole === 'Admin'): ?>
            <li><a href="registerBooks.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Register Books</a></li>
        <?php endif; ?>
    </ul>
    <?php    
        if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin') {
            echo '<a href="Dashboard.php">Dashboard</a>';
            echo '<a href="boooks.php">Book Dashboard</a>';
        }
   ?>
    <div class="qkyqu">
    <button><a href="qkyqu.php">Logout</a> </button>   
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

    document.addEventListener("click", function(event) {
        if (!loggedInUser.contains(event.target)) {
            loggedInUser.classList.remove("active");
        }
    });
});
</script>

</body>
</html>
