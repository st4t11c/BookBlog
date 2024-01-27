<?php
include_once 'userR.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['lastname']) || 
    empty($_POST['username']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $UserID = $username.rand(100,999);

        $user  = new User($UserID,$name,$lastname,$email,$username,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);


    }
}




?>