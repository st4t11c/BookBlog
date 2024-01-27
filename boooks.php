<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}

$loggedInUserRole = isset($_SESSION['roli']) ? $_SESSION['roli'] : '';

include 'dist/databaseConnection.php'; // Include your database connection

// Prepare SQL statement to select data from the table
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
        <li><a href="About.php"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
        <?php if ($loggedInUserRole === 'Admin'): ?>
            <li><a href="registerBooks.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Register Books</a></li>
        <?php endif; ?>
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
    <h2>Registered Books</h2>
    <table>
        <thead>
            <tr>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Registered Date</th>
                <th>Registered By</th>
                <th>About Book</th>
                <th>Upload Picture</th>
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
                <td><a href='edit.php?id=$book[UserID]'>Edit</a> </td>
                     <td><a href='delete.php?id=$book[UserID]'>Delete</a></td>
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
