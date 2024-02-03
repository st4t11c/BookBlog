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
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php"><img style="width: 10%; margin-right:100%;" src="book1.png">
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
      <h4 >#1</h4>
      <p>
        “Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.”     
        ― Albert Einstein
      </p>
      <a href="Books.php" class="button">Check out our books!</a>
  </div>
  <img src="ABOUTQUOTES/book-grass.jpg" alt="">
</div>
<div class="content-container" style="margin-right: 10%;">
  <img src="ABOUTQUOTES/book-sky.jpg" alt="">
  <div class="text-content">
      <h4 >#2</h4>
      <p>
        “So many books, so little time.”   ― Frank Zappa
      </p>
      <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
     
  </div>
  
</div>
<div class="content-container" style="margin-left: 5%;">
    <div class="text-content">
        <h4 >#3</h4>
        <p>
            “A room without books is like a body without a soul.” ― Bernard M. Baruch
        </p>
       
    </div>
    <img src="ABOUTQUOTES/Nature-look.jpg" alt="">
  </div>
  <div class="content-container" style="margin-right: 10%;">
    <img src="ABOUTQUOTES/beautiful-scenery.jpg" alt="">
    <div class="text-content">
        <h4 >#4</h4>
        <p>
          "Books are timeless companions, carrying the collective wisdom and dreams of humanity. 
          Within their pages, we discover the magic of imagination and the power of shared stories."
        </p>
        <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
        
    </div>
    
  </div>
  <div class="content-container" style="margin-left: 5%;">
    <div class="text-content">
        <h4 >#5</h4>
        <p>
            “You know you're in love when you can't fall asleep because reality is finally better than your dreams.”  ― Dr. Seuss
        </p>
        
    </div>
    <img src="ABOUTQUOTES/coffe-book.jpg" alt="">
  </div>
  <div class="content-container" style="margin-right: 10%;">
    <img src="ABOUTQUOTES/farm.jpg" alt="">
    <div class="text-content">
        <h4 >#6</h4>
        <p>
            “You only live once, but if you do it right, once is enough.”
            ― Mae West
        </p>
        <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
       
    </div>
    
  </div>
  <div class="content-container" style="margin-left: 5%;">
    <div class="text-content">
        <h4 >#7</h4>
        <p>
            “Be the change that you wish to see in the world.”
            ― Mahatma Gandhi
        </p>
        
    </div>
    <img src="ABOUTQUOTES/insidethebook.jpg" alt="">
  </div>
  <div class="content-container" style="margin-right: 10%;">
    <img src="ABOUTQUOTES/interesant.jpg" alt="">
    <div class="text-content">
        <h4 >#8</h4>
        <p>
            “If you tell the truth, you don't have to remember anything.”
            ― Mark Twain
        </p>
        <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
        
    </div>
    
  </div>
  <div class="content-container" style="margin-left: 5%;">
    <div class="text-content">
        <h4 >#9</h4>
        <p>
            “Friendship ... is born at the moment when one man says to another "What! You too? I thought that no one but myself . . .”
            ― C.S. Lewis, The Four Loves
        </p>
        
    </div>
    <img src="ABOUTQUOTES/owl-crow.jpg" alt="">
  </div>
  <div class="content-container" style="margin-right: 10%;">
    <img src="ABOUTQUOTES/russia-omsk-sunset-book.jpg" alt="">
    <div class="text-content">
        <h4 >#10</h4>
        <p>
            “Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.”
            ― Martin Luther King Jr
        </p>
        <!-- <a href="https://www.goodreads.com/quotes" class="button">Check out some more book quotes!</a> -->
        
    </div>
    
  </div>
  <p style="margin-left: 35%; font-family: cursive;">~~~~...WE WILL HAVE MORE IN THE FUTURE STAY TUNED...~~~~</p>

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