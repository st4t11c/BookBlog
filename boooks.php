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


$sql = "SELECT * FROM registeredBooks";
$stmt = $conn->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style5.css">
<link rel="stylesheet"  href="footer.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<title>BookBlog</title>
<style>

</style>
</head>
<body style="background-color: rgb(245, 235, 220);">

<div class="navbar">
    <div class="logo">
        <a id="dashboard" href="dashboard.php"><img src="img/logo.png">
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
     <div class="qkyqu">
    <button><a href="qkyqu.php">Logout</a> </button>   
    </div>

</div>

<div class="container">
    <h2>Registered Books</h2>
    <table>
        <thead>
            <tr>
                <th style="background-color:bisque;">Book Name</th>
                <th style="background-color:bisque;">Book Author</th>
                <th style="background-color:bisque;">Registered Date</th>
                <th style="background-color:bisque;">Registered By</th>
                <th style="background-color:bisque;">About Book</th>
                <th style="background-color:bisque;">Upload Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo $book['bookName']; ?></td>
                <td><?php echo $book['bookAuthor']; ?></td>
                <td><?php echo $book['registeredDate']; ?></td>
                <td><?php echo $book['registeredBy']; ?></td>
                <td><?php echo $book['aboutBook']; ?></td>
                <td><img src="<?php echo $book['uploadPicture']; ?>" alt="<?php echo $book['bookName']; ?>" width="100"></td>
                

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
