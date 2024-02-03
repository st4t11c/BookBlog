<?php
session_start();

$userId = $_GET['id'];
include_once 'userR.php';

$userRepository = new UserRepository();
$user  = $userRepository->getUserById($userId);

if(isset($_POST['editBtn'])){
    $UserID = $user['UserID'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $role = $_POST['roli_userit']; 

    $userRepository->updateUser($UserID, $name, $lastname, $email, $username, $password, $role);
    header("location:Dashboard.php");
}
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
    <form action="" method="post">
        <input type="text" name="userid"  value="<?=$user['UserID']?>" readonly> <br> <br>
        <input type="text" name="name"  value="<?=$user['Name']?>"> <br> <br>
        <input type="text" name="lastname"  value="<?=$user['Lastname']?>"> <br> <br>
        <input type="text" name="email"  value="<?=$user['Email']?>"> <br> <br>
        <input type="text" name="username"  value="<?=$user['Username']?>"> <br> <br>
        <select name="roli_userit">
            <?php
            $roles = array('Admin', 'User');

            foreach ($roles as $role) {
                $selected = ($user['roli_userit'] == $role) ? 'selected' : '';
                echo "<option value='$role' $selected>$role</option>";
            }
            ?>
        </select>


        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</body>
</html>
