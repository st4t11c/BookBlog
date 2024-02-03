<?php
if (isset($_POST['contactBtn'])) {
    $userEmail = $_POST['email'];
    $message = $_POST['message'];

    $sentMessage = "From: $userEmail\nMessage:\n$message\n\n";
    $filename = 'Dashboard.php';

    file_put_contents($filename, $sentMessage, FILE_APPEND | LOCK_EX);

    echo "<script>alert('Your message has been received. Thank you!'); window.location.href='ContactUs.php';</script>";
    exit();
} else {
    echo "Please fill the required fields!";
    header("Location: ContactUs.php");
    exit();
}
?>
