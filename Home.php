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
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
<title>BookBlog</title>
<style>

</style>
</head>
<body>

<div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php"><img src="book1.png">
        <h2>BookBlog</h2></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="Books.php"><i class="fa fa-book" aria-hidden="true"></i> Books</a></li>
        <li><a href="About.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
        <?php if ($loggedInUserRole === 'Admin'): ?>
        <li><a href="boooks.php"><i class="fa fa-book" aria-hidden="true"></i> BooksADM</a></li>
        <?php endif; ?>
        <?php if ($loggedInUserRole === 'Admin'): ?>
            <li><a href="registerBooks.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Register Books</a></li>
        <?php endif; ?>
    </ul>
    <div class="logged-in-user">
    <span> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
        <div class="dropdown-menu">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <?php if ($loggedInUserRole === 'Admin'): ?>
            <a href="Dashboard.php">Dashboard</a>
            <?php endif; ?>
            <a href="qkyqu.php">Logout</a>
        </div>
    </div>

</div>

<div class="container">
    <img id="searchBackground" src="BgPhoto2.jpg">
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>
    <div class="h2">
      <h2>Award Winning Books</h2>
    </div>
    <br>
    <div class="box-container" >
      <div class="box">
        <div class="image">
            <img src="TheWingmen.jpg" alt="">
        </div>
        <div class="content">
            <img src="Monkey.jpg" alt="">
        </div>
    </div>

      <div class="box">
        <div class="image">
            <img src="Bear.jpg" alt="">
        </div>
        <div class="content">
            <img src="Trust.jpg" alt="">
        </div>
    </div>

      <div class="box">
          <div class="image">
              <img src="Wizard.jpg" alt="">
          </div>
          <div class="content">
              <img src="66.jpg" alt="">
          </div>
      </div>
      <div id="imazhet">
        <header>
          <img id="slideshow">
        </header>
        
        <button onclick="changeImg()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
              </svg>
        </button>
    </div>
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
let i=0;
        let imgArray=["Study.jpg","AnImmenseWorld.jpg","G-Man.jpg", "BreakingThrough.jpg","FireWeather.jpg","George.jpg","Hamnet.jpg","TheSwimmers.jpg","Aeroplan.jpg","MadHoney.jpg","America.jpg","City.jpg","Demon.jpg","Heaven.jpg","Wrong.jpg","Forest.jpg","Sea.jpg","River.jpg"];

        function changeImg(){
            document.getElementById('slideshow').src=imgArray[i];
            if(i<imgArray.length-1){
                i++;
            }
            else{
                i=0;
            }
        }

        document.addEventListener(onload,changeImg());

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
