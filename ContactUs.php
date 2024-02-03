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
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
    <title>ContactUS</title>
</head>
<body style="background-color: rgb(245, 235, 220);">
<div class="navbar" style="padding:10px; margin:-10px;">
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
    <div class="qkyqu" style="margin-top:17px;   hover:brown; ">
    <button><a href="qkyqu.php">Logout</a> </button>   
    </div>


</div>
    <div class="container" >
        <div class="contact-us" style="background-color: rgb(245, 235, 220);">
            <form method="post" action="process_c.php" >
                <h1>Contact Us</h1>
                <input type="email" name="email" placeholder="Enter your email"><br>
                <span class="error" id="erroremail"></span><br>
                <textarea name="message" placeholder="Enter your message"></textarea><br>
                <span class="errormessage"></span>
                <input style="width:30%; margin-left:35%;" type="submit" name="contactBtn" value="Send message"  class="submit">
            </form>          
        </div>
    </div>
    
      
</body>
<script>
   function validateFormContact() {
  var email = document.forms["myForm"]["email"].value;
  var message = document.forms["myForm"]["message"].value;
  
  var emailRegex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if(email=="" || message=="")
            alert("Please fill all ");
        else if(validateEmail(email==false))
            alert("Wrong email format!");

  if(!(emailRegex.test(email))){
    document.getElementById('erroremail').innerHTML="Please enter a valid email address"; 
   return false;
   }
   else{
    document.getElementById('erroremail').innerHTML=""; 
   }
   if (message.value == ""){ 
    document.getElementById('errormessage').innerHTML="Please enter a valid message!";  
    return false; 
  }else{
    document.getElementById('errormessage').innerHTML="";  
  }

  
}  

</script>
</html>