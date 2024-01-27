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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php"><img style="width: 10%; margin-right:100%;" src="book1.png"></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="Books.php"><i class="fa fa-info" aria-hidden="true"></i> Books</a></li>
        <li><a href="Quotes.php"><i class="fa fa-quotes" aria-hidden="true"></i> Quotes</a></li>
    </ul>
    <div class="logged-in-user">
    <span> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
        <div class="dropdown-menu">
            <a href="qkyqu.php">Logout</a>
        </div>
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

<footer class="footer">    
  <div class="f">
      <h2 style=" margin-right: 9%;">BookBlog</h2>
      <h2 style="margin-right: 10%;">Our Links</h2>
      <div class="ff">
          <a href="www.facebook.com"><img src="facebook.png" alt="" width="32px" height="32px"></a>
          <a href="www.twitter.com"><img src="twitter.png" alt="" width="32px" height="32px" style="margin-left: 80%;"></a>
          <a href="www.instagram.com"><img style="margin-left: 150%;" src="instagram.png" alt="" width="32px" height="32px" ></a>
          
      </div>
  </div>
  <div class="fm">
          <div class="fl">
              <p>BookBlog, the place for a book lover.</p>
          </div>
          <div class="fc" style="margin-right: 9%;">
              <p><a href="Home.php" style="color: bisque;">Home</a></p>
              <p><a href="About.php"style="color: bisque;">About</a></p>
              <p><a href="Books.php"style="color: bisque;">Books</a></p>
          </div>
          <div class="fr" style="margin-right: 8.2%;">
              <a href="" style="color: bisque;"><p>Terms of use</p></a>
              <a href="" style="color: bisque;"><p>Privacy Policy</p></a>
          </div>
      </div>
      <div class="fi" >
      <p style="margin-left: 40%;"> ©Copyright ~ 2023 BookBlog. All rights reserved.</p>
        
      </div>
  </footer>
<script>
    


</script>
</body>
</html>