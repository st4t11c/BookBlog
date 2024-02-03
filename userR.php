<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $UserID = $user->getUserID();
        $name = $user->getName();
        $lastname = $user->getLastname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (Name, Lastname, Email, Username, Password) VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$name, $lastname, $email, $username, $password]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";
        header("location:Login.php");
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($UserID){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE userid='$UserID'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($UserID, $name, $lastname, $email, $username, $password, $role){
        $conn = $this->connection;

        $sql = "UPDATE user SET name=?, lastname=?, email=?, username=?, password=?, roli_userit=? WHERE UserID=?";

        $statement = $conn->prepare($sql);


        $statement->execute([$name, $lastname, $email, $username, $password, $role, $UserID]);

        echo "<script>alert('Update was successful'); </script>";
    } 

    function deleteUser($UserID){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE UserID=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$UserID]);
        echo "delete was successful";
        
    } 
}


?>
