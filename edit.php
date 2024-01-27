
<?php
$userId = $_GET['id'];
include_once 'userR.php';



$userRepository = new UserRepository();

$user  = $userRepository->getUserById($userId);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT USER</title>
</head>
<body>
    <h3>Edit User</h3>
    <form action="edit.php" method="post">
        <input type="text" name="userid"  value="<?=$user['UserID']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user['Name']?>"> <br> <br>
        <input type="text" name="lastname"  value="<?=$user['Lastname']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['Email']?>"> <br> <br>
        <input type="text" name="username"  value="<?=$user['Username']?>"> <br> <br>
        <input type="text" name="password"  value="<?=$user['Password']?>"> <br> <br>
        <!-- <input type="text" name="role"  value="<?=$user['Role']?>"> <br> <br> -->

        <input type="submit" name="editBtn" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $UserID = $user['UserID'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $role = $_POST['role'];

    $userRepository->updateUser($UserID,$name,$lastname,$email,$username,$password);
    header("location:dashboard.php");
}


?>