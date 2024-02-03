<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: Login.php");
    exit();
}

$loggedInUserRole = isset($_SESSION['roli']) ? $_SESSION['roli'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBlog</title>
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet"  href="footer.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php"><img style="width: 10%; margin-right:100%;" src="book1.png"></a>
        <h2 style="color:white;">BookBlog</h2></a>
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

<div class="content-container" style="margin-left: 5%;">
  <div class="text-content">
      <h4 style="margin-left: 45%;">About Us</h4>
      <p>
        BookBlog is your go-to destination for exploring a diverse array of books across various genres. 
        You can navigate through an extensive collection of books spanning from thrilling mysteries and heartwarming romances to mind-bending science fiction.
        BookBlog is not just a website, it's a community of book enthusiasts passionate about sharing their love for literature.
      </p>
      <a href="Books.php" class="button">Check out our books!</a>
  </div>
  <img src="ABOUTQUOTES/book-grass.jpg" alt="">
</div>
<div class="content-container" style="margin-right: 10%;">
  <img src="ABOUTQUOTES/book-sky.jpg" alt="">
  <div class="text-content">
      <h4 style="margin-left: 45%;">Quote</h4>
      <p>
        "Books are timeless companions, carrying the collective wisdom and dreams of humanity. 
        Within their pages, we discover the magic of imagination and the power of shared stories."
      </p>
      <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
      <a href="Quotes.php" class="button">Check out some more book quotes!</a>
  </div>
  
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
    


</script>
</body>
</html>