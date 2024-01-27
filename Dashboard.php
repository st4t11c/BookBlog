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
        <a id="dashboard" href="Home.php"><img style="width: 10%; margin-right:100%;" src="book1.png">
        <h2>BookBlog</h2></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="About.php"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
        <li><a href="Quotes.php"><i class="fa fa-book" aria-hidden="true"></i> Quotes</a></li>
    </ul>
    <div class="logged-in-user">
    <span> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
        <div class="dropdown-menu">
            <a href="qkyqu.php">Logout</a>
        </div>
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
                 <th>PASSWORD</th>
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
                     <td>$user[Password] </td>
                     <td><a href='edit.php?id=$user[UserID]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[UserID]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
</html>