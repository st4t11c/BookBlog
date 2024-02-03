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
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php">
            <img style="width: 10%; margin-right:100%;" src="book1.png">
            <h2 style="color:white; ">BookBlog</h2>
        </a>
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
    <h3 style="color: #054a05;" >~~~~DASHBOARD~~~~</h3>
    <table border="1" style="" >
             <tr>
                 <th>UserID</th>
                 <th>NAME</th>
                 <th>LASTNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>Statusi</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once 'userR.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[UserID]</td>
                     <td>$user[Name] </td>
                     <td>$user[Lastname]</td>
                     <td>$user[Email] </td>
                     <td>$user[Username] </td>
                     <td>$user[roli_userit]</td> <!-- Display the role from the roli_userit column -->
                     <td><a href='edit.php?id=$user[UserID]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[UserID]'>Delete</a></td>
                     
                </tr>
                ";
             }
             ?>
    </table>
</body>
</html>


