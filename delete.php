<?php

$userId = $_GET['id'];
include_once 'userR.php';



$userRepository = new UserRepository();

$userRepository->deleteUser($userId);

header("location:dashboard.php");


?>